<?php

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
    $sql = "INSERT INTO $table ($columns) VALUES ($values)";
    $statement = $pdo->prepare($sql);
    $statement->execute();
}