<?php
session_start();
var_dump($_POST);
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

include '../models/functions.php';
$task = get_from_db ('`users_2`', '`email`', $email);

if(!empty($task)){
    $message = 'Этот эл адрес уже занят другим пользователем.';
    $_SESSION['danger'] = $message;
    redirect_to('../../task_11.php');
    exit;
}

include '../models/connect.php';
$sql = "INSERT INTO `users_2` (`email`,`password`) VALUES (:value1,:value2)";
$statement = $pdo->prepare($sql);
$statement->execute(['value1' => $email, 'value2' => $password]);
echo $sql;

