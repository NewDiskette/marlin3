<?php
include '../models/functions.php';
// var_dump($_FILES);
$type = mb_substr($_FILES['image']['type'], 0, 5);
// var_dump($type);

if($type !== 'image'){
    redirect_to('../../task_16.php');
    exit;
}

$tmp_name = $_FILES['image']['tmp_name'];
$file = $_FILES['image']['name'];
$uploaddir = '../uploads/images/';

$file_name = uploadfile($tmp_name, $file, $uploaddir);
// var_dump($file_name);

giv_on_db ('`images`', '`image`' , $file_name);
redirect_to('../../task_16.php');