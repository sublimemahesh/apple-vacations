<?php

include_once(dirname(__FILE__) . '/../../class/include.php');

if (isset($_POST['create'])) {

    $ATTRACTION = new Attraction(NULL);
    $VALID = new Validator();


    $ATTRACTION->title = $_POST['title'];
    $ATTRACTION->short_description = $_POST['short_description'];
    $ATTRACTION->description = $_POST['description'];


    $dir_dest = '../../upload/attraction/';
    $dir_dest_thumb = '../../upload/attraction/thumb/';
    $dir_dest_thumb_gallery = '../../upload/attraction/thumb/gallery/';

    $handle = new Upload($_FILES['image']);

    $imgName = null;
    $img = Helper::randamId();

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $img;
        $handle->image_x = 262;
        $handle->image_y = 192;

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
        $handle->image_x = 178;
        $handle->image_y = 100;

        $handle->Process($dir_dest_thumb_gallery);

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
        $handle->image_x = 330;
        $handle->image_y = 250;

        $handle->Process($dir_dest_thumb);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $ATTRACTION->image_name = $imgName;
    $ATTRACTION->create();

    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}

if (isset($_POST['update'])) {


    $dir_dest = '../../upload/attraction/';
    $dir_dest_thumb = '../../upload/attraction/thumb/';
    $dir_dest_thumb_gallery = '../../upload/attraction/thumb/gallery/';
    
    $handle = new Upload($_FILES['image']);

    $img = $_POST ["oldImageName"];

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $img;
        $handle->image_x = 262;
        $handle->image_y = 192;

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
        $handle->image_x = 178;
        $handle->image_y = 100;

        $handle->Process($dir_dest_thumb_gallery);

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
        $handle->image_x = 330;
        $handle->image_y = 250;

        $handle->Process($dir_dest_thumb);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $img = $handle->file_dst_name;
        }
    }

    $ATTRACTION = new Attraction($_POST['id']);
    $ATTRACTION->image_name = $_POST['oldImageName'];
    $ATTRACTION->title = $_POST['title'];
    $ATTRACTION->short_description = $_POST['short_description'];
    $ATTRACTION->description = $_POST['description'];

    $ATTRACTION->update();
    $result = ["id" => $_POST['id']];

    echo json_encode($result);
    exit();
}

if (isset($_POST['save-data'])) {

    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;

        $ATTRACTION = Attraction::arrange($key, $img);

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}    