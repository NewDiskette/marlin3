<?php
var_dump($_FILES);

$uploaddir = '../../uploads/';
$uploadfile = $uploaddir . uniqid() . '.jpg';

move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);


