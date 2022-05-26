<?php
session_start();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    <?php if($_SESSION['user']): ?>
        <h2>Здравствуйте, <?= $_SESSION['user']['email']; ?>  </h2>
    <?php else: ?>
        <h2>Вы не авторизованы</h2>
    <?php endif; ?>

    <?php if($_SESSION['user']): ?>
        <a href="task_17_handler.php" class="btn btn-info">Выйти</a>
    <?php else: ?>
        <a href="task_16.php" class="btn btn-info">Войти</a>
    <?php endif; ?>

</body>
</html>
