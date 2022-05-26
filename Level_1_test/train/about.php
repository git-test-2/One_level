<?php
session_start();

error_reporting(E_ALL);

echo $_SESSION['name'];


//http://localhost:63342/One/about.php?name=Hi - ?name=Hi передали GET


if(isset($_GET['name']))
{
    echo $_GET['name'];
}
else
{
    echo 'не установлено';
}

if(isset($_POST['text']))
{
    echo $_POST['text'];
    var_dump($_POST['text']);
}

echo '<pre>';
//var_dump($_SERVER);
echo '<pre/>';