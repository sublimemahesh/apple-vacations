<?php

include_once(dirname(__FILE__) . '/../../class/include.php');


if (isset($_POST['create'])) {

    $price_array = array();


    $TOUR_PACKAGE = new TourPackage(NULL);
    $VALID = new Validator();


    foreach ($_POST['name'] as $name) {
        foreach ($_POST['price'] as $price) {

            $result = array(
                "pax" => $name,
                'price' => $price
            );
        }
        array_push($price_array, $result);
    }

    $TOUR_PACKAGE->tour_type = $_POST['tour_type'];
    $TOUR_PACKAGE->price = json_encode($price_array);

    $TOUR_PACKAGE->title = $_POST['title'];
    $TOUR_PACKAGE->dates = $_POST['dates'];
    $TOUR_PACKAGE->short_description = $_POST['short_description'];
    $TOUR_PACKAGE->description = $_POST['description'];
    $TOUR_PACKAGE->includes = $_POST['includes'];
    $TOUR_PACKAGE->excludes = $_POST['excludes'];

    $dir_dest = '../../upload/tour-package/';
    $dir_dest_thumb = '../../upload/tour-package/thumb/';

    $handle = new Upload($_FILES['image_name']);

    $imgName = null;
    $img = Helper::randamId();

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $img;
        $handle->image_x = 400;
        $handle->image_y = 450;


        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }


        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $img;
        $handle->image_x = 900;
        $handle->image_y = 500;

        $handle->Process($dir_dest_thumb);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $TOUR_PACKAGE->image_name = $imgName;
    $TOUR_PACKAGE->create();
    $result = ["id" => $TOUR_PACKAGE->id];
    echo json_encode($result);
    exit();
}

if (isset($_POST['update'])) {



    $dir_dest = '../../upload/tour-package/';
    $dir_dest_thumb = '../../upload/tour-package/thumb/';

    $handle = new Upload($_FILES['image']);

    $img = $_POST ["oldImageName"];

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $img;
        $handle->image_x = 400;
        $handle->image_y = 450;


        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $img = $handle->file_dst_name;
        }


        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $img;
        $handle->image_x = 900;
        $handle->image_y = 500;

        $handle->Process($dir_dest_thumb);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $img = $handle->file_dst_name;
        }
    }

    $TOUR_PACKAGE = new TourPackage($_POST['id']);


    if (isset($_POST['price'])) {

        $price_array = array();
        $price_array_2 = array();

        foreach ($_POST['price'] as $prices) {
            foreach ($_POST['name'] as $name) {
                $result = array(
                    "pax" => $name,
                    "price" => $prices
                );
            }
            array_push($price_array, $result);
        }

        $PRICE_NAME = json_decode($TOUR_PACKAGE->price);
        foreach ($PRICE_NAME as $price_name) {
            $result_2 = array(
                "pax" => $price_name->pax,
                "price" => $price_name->price
            );
            array_push($price_array_2, $result_2);
        }

        $Price_result = array_merge($price_array, $price_array_2);
        $TOUR_PACKAGE->price = json_encode($Price_result);
    } else {
        if (isset($_POST['edit_price'])) {
            $price_array_3 = array();
            foreach ($_POST['edit_name'] as $name) {
                foreach ($_POST['edit_price'] as $price) {

                    $result = array(
                        "pax" => $name,
                        'price' => $price
                    );
                }
                array_push($price_array_3, $result);
            }
            $TOUR_PACKAGE->price = json_encode($price_array_3);
        }
    }



    $TOUR_PACKAGE->tour_type = $_POST['tour_type'];
    $TOUR_PACKAGE->image_name = $_POST['oldImageName'];
    $TOUR_PACKAGE->title = $_POST['title'];
    $TOUR_PACKAGE->dates = $_POST['dates'];
    $TOUR_PACKAGE->short_description = $_POST['short_description'];
    $TOUR_PACKAGE->description = $_POST['description'];
    $TOUR_PACKAGE->includes = $_POST['includes'];
    $TOUR_PACKAGE->excludes = $_POST['excludes'];
    $TOUR_PACKAGE->update();

    $result = ["id" => $_POST['id']];
    echo json_encode($result);
    exit();
}

if (isset($_POST['save-data'])) {

    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;

        $TOUR_PACKAGE = TourPackage::arrange($key, $img);

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}    