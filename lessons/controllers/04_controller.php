<?php
var_dump($_FILES);

$tmp_name = $_FILES['user_file']['tmp_name'];
$file = $_FILES['user_file']['name'];

$count = count($file);

for ($i = 0; $i < $count; $i++) {

    uploadfile($tmp_name[$i],$file[$i]);
}

function uploadfile($tmp_name, $file){

    $extension = pathinfo($file, PATHINFO_EXTENSION);
    $uploaddir = '../uploads/';
    $file_name = uniqid() . ".$extension";
    $uploadfile = $uploaddir . $file_name;

    move_uploaded_file($tmp_name, $uploadfile);
}