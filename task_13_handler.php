<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];


$pdo = new PDO("mysql:host=localhost;dbname=my_project;","root","");
$sql = "SELECT * FROM users WHERE email=:email";
$statement = $pdo->prepare($sql);
$statement->execute(['email'=>$email]);
$result = $statement->fetchAll(PDO::FETCH_ASSOC);


if(!empty($result)){
    $_SESSION['danger'] = "почта существует";
    header("Location: task_13.php");
    exit();
}

//$pdo = new PDO("mysql:host=localhost;dbname=my_project;","root",""); //не нужно потому что уже соединилисб с БД выше
$password_hash = password_hash($password, PASSWORD_DEFAULT);


$sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
$statement = $pdo->prepare($sql);
$statement->execute(['email'=>$email,'password'=>$password_hash]);

$_SESSION['success'] = "такой почты нет";

header("Location: task_13.php");


