<?php
var_dump($_FILES);

$file_name = $_FILES['image']['name'];

var_dump($file_name);

$file_extension = pathinfo($file_name, PATHINFO_EXTENSION);
echo $file_extension;

$uploaddir = '../../uploads/';
$uploadfile = $uploaddir . uniqid() . ".$file_extension";

move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);


