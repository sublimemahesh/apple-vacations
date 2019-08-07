<?php

include_once(dirname(__FILE__) . '/../../class/include.php');

if (isset($_POST['create'])) {

    $CITY = new City(NULL);
    $VALID = new Validator();

    $CITY->name = $_POST['name'];
    $CITY->description = $_POST['description'];

    $dir_dest = '../../upload/cities/';
    $dir_dest_gallery = '../../upload/cities/gallery';
    $dir_dest_gallery_thumb = '../../upload/cities/gallery/thumb/';

    $handle = new Upload($_FILES['image']);
    $img = Helper::randamId();

    $imgName = null;

    if ($handle->uploaded) {

        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $img;
        $handle->image_x = 330;
        $handle->image_y = 250;

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
        $handle->image_x = 262;
        $handle->image_y = 192;

        $handle->Process($dir_dest_gallery);

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
        $handle->image_x = 178;
        $handle->image_y = 100;

        $handle->Process($dir_dest_gallery_thumb);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $CITY->image_name = $imgName;
    $CITY->create();

    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}

if (isset($_POST['update'])) {

    $dir_dest = '../../upload/cities/';
    $dir_dest_gallery = '../../upload/cities/gallery';
    $dir_dest_gallery_thumb = '../../upload/cities/gallery/thumb/';

    $handle = new Upload($_FILES['image']);
    $img = $_POST ["oldImageName"];
    $imgName = null;

    if ($handle->uploaded) {

        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $img;
        $handle->image_x = 330;
        $handle->image_y = 250;

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
        $handle->image_x = 262;
        $handle->image_y = 192;

        $handle->Process($dir_dest_gallery);

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
        $handle->image_x = 178;
        $handle->image_y = 100;

        $handle->Process($dir_dest_gallery_thumb);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $img = $handle->file_dst_name;
        }
    }

    $CITY = new City($_POST['id']);

    $CITY->image_name = $_POST['oldImageName'];
    $CITY->name = $_POST['name'];
    $CITY->description = $_POST['description'];
    $CITY->update();


    $result = ["id" => $_POST['id']];
    echo json_encode($result);
    exit();
}

if (isset($_POST['save-data'])) {

    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;

        $CITY = City::arrange($key, $img);

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}