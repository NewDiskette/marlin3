<?php
var_dump($_FILES);

$file = $_FILES['image']['name'];

var_dump($file);


function uploadfile($file){
    $file_extension = pathinfo($file, PATHINFO_EXTENSION);

    $uploaddir = '../../uploads/';
    $file_name = uniqid() . ".$file_extension";

    move_uploaded_file($_FILES['image']['tmp_name'], $uploaddir . $file_name);

}

uploadfile($file);
