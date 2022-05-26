<?php
session_start();

if(isset($_POST['text'])){
    $message = $_POST['text'];
    $_SESSION['message'] = $message;
    header("Location: task_14.php");
}



