<?php

include_once(dirname(__FILE__) . '/../../../class/include.php');
include_once(dirname(__FILE__) . '/../../auth.php');

if ($_POST['option'] == 'delete') {

    $CITY = new City($_POST['id']);
 
    unlink('../../../upload/cities/' . $CITY->image_name);
    unlink('../../../upload/cities/gallery/' . $CITY->image_name);
    unlink('../../../upload/cities/gallery/thumb/' . $CITY->image_name);
    
    $result = $CITY->delete();

    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}