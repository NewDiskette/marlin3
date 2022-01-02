<?php

var_dump($_POST);

$hashPassword = password_hash($_POST['userPassword'], PASSWORD_DEFAULT);
var_dump($hashPassword);