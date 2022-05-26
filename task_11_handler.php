<?php

 $text = $_POST['text'];

    $pdo = new PDO("mysql:host=localhost;dbname=my_project;","root","");
    $sql = ("INSERT INTO text (text) VALUES (:text) "); // :text - это метка (назвали её как и поле ) для безопасности
    $statement = $pdo->prepare($sql);
    $statement->execute(['text' => $text]); // Теперь передаём в метку нужно значение
        //['text' => $text] - передаём ассоциативный массив, где тексту будет присвоено переменная которая имеет значение нужное для таблицы
        // этой метке :text присваиваем что туда попадёт ['text' => $text]

header("Location: task_11.php");

