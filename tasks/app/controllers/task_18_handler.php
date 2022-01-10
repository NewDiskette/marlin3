<?php
include '../models/functions.php';
// var_dump($_FILES);

if (!empty($_GET['id'])) {
    // var_dump($_GET);
    delete_row_db ('`images`', '`id`', $_GET['id']);
    redirect_to('../../task_18.php');
    exit;
}

$count = count($_FILES['image']['type']);
// var_dump($count);

for ($i = 0; $i < $count; $i++) {

    $type = mb_substr($_FILES['image']['type'][$i], 0, 5);
    // var_dump($type);
    if($type == 'image'){
        $tmp_name = $_FILES['image']['tmp_name'][$i];
        $file = $_FILES['image']['name'][$i];
        $uploaddir = '../uploads/images/';

        $file_name = uploadfile($tmp_name, $file, $uploaddir);
        // var_dump($file_name);

        giv_on_db ('`images`', '`image`' , $file_name);
    }
}
  redirect_to('../../task_18.php');




