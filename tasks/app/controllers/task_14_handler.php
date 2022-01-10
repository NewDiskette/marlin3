<?php
session_start();
include '../models/functions.php';

if(empty($_POST['email']) || empty($_POST['password'])){
    $_SESSION['message'] = 'Неверный логин или пароль';
    redirect_to('../../task_14.php');
    exit;
}

$userDB = get_from_db ('`users_2`', '`email`', $_POST['email']);
if(empty($userDB)){
    $_SESSION['message'] = 'Неверный логин или пароль';
    redirect_to('../../task_14.php');
    exit;
}

$verify = password_verify($_POST['password'], $userDB['password']);
if($verify){
    $_SESSION['email'] = $userDB['email'];
}else{
    $_SESSION['message'] = 'Неверный логин или пароль';
}

redirect_to('../../task_15.php');
    
