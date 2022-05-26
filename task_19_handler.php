<?php

if(isset($_GET['id'])) {

    $id = $_GET['id'];

    $pdo = new PDO("mysql:host=localhost;dbname=my_project;","root","");
    $sql = "DELETE FROM images WHERE id = :id"; //не пишем DELETE * FROM, просто DELETE FROM
    $statement =  $pdo->prepare($sql);
    $statement->execute(['id'=>$id]);

    header("Location: task_19.php");
}



