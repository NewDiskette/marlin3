<?php

function get_from_db ($table, $column, $value){
    include 'connect.php';
    $sql = "SELECT * FROM $table WHERE $column=:value";
    $statement = $pdo->prepare($sql);
    $statement->execute(['value' => $value]);
    $resalt = $statement->fetch(PDO::FETCH_ASSOC);
    return $resalt;
}

function get_all_from_db ($table){
    include 'connect.php';
    $sql = "SELECT * FROM $table";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $resalt = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $resalt;
}

function get_column_from_db ($table, $column){
    include 'connect.php';
    $sql = "SELECT $column FROM $table";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $resalt = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $resalt;
}

function giv_on_db ($table, $columns, $value){
    include 'connect.php';
    $sql = "INSERT INTO $table ($columns) VALUES (:value)";
    $statement = $pdo->prepare($sql);
    $statement->execute(['value' => $value]);
    // echo $sql;
}

function delete_row_db ($table, $column, $value){
    include 'connect.php';
    $sql = "DELETE FROM $table WHERE $column=:value";
    $statement = $pdo->prepare($sql);
    $statement->execute(['value' => $value]);
}

function redirect_to($path){
    header("Location: $path");
}

function uploadfile($tmp_name, $file, $uploaddir){

    $extension = pathinfo($file, PATHINFO_EXTENSION);
    $file_name = uniqid() . ".$extension";
    $uploadfile = $uploaddir . $file_name;

    move_uploaded_file($tmp_name, $uploadfile);
    return $file_name;
}