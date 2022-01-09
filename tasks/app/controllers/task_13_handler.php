<?php
session_start();

if (!empty($_SESSION['count'])) {
    ++ $_SESSION['count'];
}else {
    $_SESSION['count'] = 1;
}

header("Location: ../../task_13.php");
