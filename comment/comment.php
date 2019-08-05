<?php

include '../class/include.php';
header('Content-Type: application/json; charset=UTF8');
session_start(); 

if ($_SESSION['CAPTCHACODE'] != $_POST['captchacode']) {

    $result = ["status" => 'error'];
    echo json_encode($result);
    exit();
} else {
 
    $COMMENT = new Comments(NULL);

    $COMMENT->name = $_POST['name'];
    $COMMENT->country = $_POST['country'];
    $COMMENT->comment = $_POST['comment'];
    $COMMENT->is_active = 0;


    $dir_dest = '../upload/comments/';

    $handle = new Upload($_FILES['image_name']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = Helper::randamId();
        $handle->image_x = 300;
        $handle->image_y = 300;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $COMMENT->image_name = $imgName;

    $ss = $COMMENT->create();
  

    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}
?>
