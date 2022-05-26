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

    <?php
        //$names = ['Саша','Валера','Антон','Игорь'];
        $users = [
            [
               "name" => "Alex",
               "surname" => "James",
                "role" => "admin",
            ],
            [
                "name" => "Bob",
                "surname" => "Taylor",
                "role" => "user"
            ],
            [
                "name" => "Nait",
                "surname" => "Tay",
                "role" => "admin"
            ],
            [
                "name" => "Lora",
                "surname" => "Li",
                "role" => "user"
            ],
        ];
     ?>

    <!-- в таков выводе PHP просто выводит, а не ищет выполднения кода PHP как ф-ции дял вычисления  -->
<!--    --><?php //foreach ($users as $user ):?>
<!--        <h3>--><?//= $user['name'] ?><!--</h3>-->
<!--        <p>--><?//= $user['surname'] ?><!--</p>-->
<!--    --><?php //endforeach; ?>

<!-- выводим только админов -->
    <h3>Админы</h3>
<?php foreach ($users as $user): ?>

    <?php if($user["role"] == "admin"): ?>

        <?= $user['name']; ?> -
        <?= $user['surname']; ?> <?= $user['role']; ?><br/>

    <?php endif; ?>

<?php endforeach; ?>


    <h3>Юзера</h3>
<?php foreach ($users as $user): ?>
    <?php if($user["role"] == "user" ): ?>
        <?= $user['name']; ?> -
    <?= $user['surname']; ?> <?= $user["role"] ?> <br/>
    <?php endif; ?>
<?php endforeach; ?>



</body>
</html>

<?php
//по умолчанию онкрывается index на сервере




