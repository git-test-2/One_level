<?php
session_start(); //чтобы пользоватьсяс сессиями, их нружно подключить

$text = $_POST['text'];

$pdo = new PDO("mysql:host=localhost;dbname=my_project;","root","");

$sql = "SELECT * FROM text WHERE text=:text "; // text=:text - где текст равняется метке текст
$statement = $pdo->prepare($sql);
$statement->execute(['text'=>$text]);
$task = $statement->fetch(PDO::FETCH_ASSOC); //получаем результат из БД, ->fetch - нам нужна одна запись, много не нужно

//var_dump($task);
//die();

if(!empty($task)) {
    $message = "Введённая запись уже присутствуетв таблице!";
    $_SESSION['danger'] = $message; //записываем сообщение в сессию

    header("Location: task_12.php "); //сообщение записали, переводим пользователя назад
    exit(); //чтобы выйти из продолжения скрипта
}

$sql = ("INSERT INTO text (text) VALUES (:text)");
$statement = $pdo->prepare($sql);
$statement->execute(['text' => $text]);

//добавили после
$message = "Введённая запись уже присутствуетв таблице!";
$_SESSION['success'] = $message; //записываем сообщение в сессию

header("Location: task_12.php");


