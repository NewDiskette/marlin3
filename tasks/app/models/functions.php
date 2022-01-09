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

function giv_on_db ($table, $columns, $values){
    include 'connect.php';
    $sql = "INSERT INTO $table ($columns) VALUES (:values)";
    $statement = $pdo->prepare($sql);
    $statement->execute(['values' => $values]);
    // echo $sql;
}

function redirect_to($path){
    header("Location: $path");
}