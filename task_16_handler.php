<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];


//1. Получить пользователя по эл адресу
$pdo = new PDO("mysql:host=localhost;dbname=my_project","root","");
$sql = "SELECT * FROM users WHERE email=:email";
$statement = $pdo->prepare($sql);
$statement->execute(['email'=>$email]);
$user = $statement->fetch(PDO::FETCH_ASSOC);
//$result = $statement->fetch(PDO::FETCH_ASSOC); // мой вариант

//2 - пытаемя поймать кто не подошёл по почте, 3 - поймать если пароли не совпадают

//2. Нужно проверить результатт запросв (пункт 1)
 //2.1 Если пользователь отсутствует, пишем флэш сообщение : неверный логин или пароль
if(empty($user)) {
    $_SESSION['error'] = "Неверный логин или пароль";
    header("Location: task_16.php");
    exit();
}

//3. Если есть пользователь : то сравниваем пароли
 //3.1 Если пароли не совпадают то пишем флеш-сообщение, неверный логин или пароль
if(!password_verify($password, $user['password'])) { //если пароли не совпадут, тогда мы входим в условие
    $_SESSION['error'] = "Неверный логин или пароль";
    header("Location: task_16.php");
    exit();
}

//4. Записываем пользователя в сессию
$_SESSION['user'] = ["email"=>$user['email'], "id" => $user['id']];

//5. Возвращаем пользователя на страницу - перенаправляем на задачу 17(где можно сделать выход )
header("Location: task_17.php");
exit();


                                                            //мой вариант
//$hash_password = password_hash($password, PASSWORD_DEFAULT); //PASSWORD_DEFAULT - вид алгоритма. Их несколько видов
//
//$pdo = new PDO("mysql:host=localhost;dbname=my_project","root","");
//
//$sql = "SELECT * FROM users WHERE email=:email";
//$statement = $pdo->prepare($sql);
//$statement->execute(['email'=>$email]);
//$result = $statement->fetch(PDO::FETCH_ASSOC);
//
////сначала проверяем если вообще такой пользователь в БД не найден
//if(empty($result)){
//    $_SESSION['danger'] = "Не верный логин или пароль";
//    header("Location: task_16.php");
//    exit();
//}
////Если пользователь найден проверяем, совпадает ли почта и пароль
////password_verify — Проверяет, соответствует ли пароль хешу. 1-123 2-хеш от 123 из БД
//if(!empty($result)){
//    if($result['email'] == $email && (password_verify($password, $result['password'])) ){
//        $_SESSION['success'] = "Вы авторизированы";
//        header("Location: task_16.php");
//        exit();
//    } else {
//        $_SESSION['danger'] = "логин или пароль не верный";
//        header("Location: task_16.php");
//        exit();
//    }
//}



