<?php
var_dump($_FILES);

$uploaddir = '../../uploads/';
$uploadfile = $uploaddir . basename($_FILES['image']['name']);

move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);


