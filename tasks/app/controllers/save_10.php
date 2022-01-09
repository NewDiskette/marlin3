<?php
session_start();
var_dump($_POST);
$text = $_POST['text'];

include '../models/functions.php';
$task = get_from_db ('`my_table`', '`text`', $text);

if(!empty($task)){
    $message = 'Введённая запись уже присутствует в таблице.';
    $_SESSION['danger'] = $message;
    redirect_to('../../task_10.php');
    exit;
}

giv_on_db ('`my_table`', '`text`', $text);
$message = 'Введённая запись записана в таблицу.';
$_SESSION['success'] = $message;
redirect_to('../../task_10.php');
