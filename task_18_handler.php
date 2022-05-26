<?php
//echo '<pre>';
//var_dump($_FILES);
//echo '<pre/>';

//Сперва файл с формы загружается во временное хранилище на сервере.
//Следовательно следующим шагом нужно переместить файл оттуда в рабочую папку при помощи функции move_uploaded_file()
//move_uploaded_file($_FILES['name']['tmp_name'],'/images/'. $_FILES['image']);

//pathinfo() - Возвращает информацию о пути к файлу. Массив
//  ["dirname"]=>
//  string(1) "."
//  ["basename"]=>
//  string(36) "2f6c04ef2fb2ff6ee72c1a31cf0d9a64.jpg"
//  ["extension"]=>
//  string(3) "jpg"
//  ["filename"]=>
//  string(32) "2f6c04ef2fb2ff6ee72c1a31cf0d9a64"

//vardump($_FILES['image']);
//array(1) {
//  ["image"]=>
//  array(5) {
//    ["name"]=>
//    string(36) "2f6c04ef2fb2ff6ee72c1a31cf0d9a64.jpg"
//    ["type"]=>
//    string(10) "image/jpeg"
//    ["tmp_name"]=>
//    string(42) "C:\OSPanel\userdata\php_upload\php48A5.tmp"
//    ["error"]=>
//    int(0)
//    ["size"]=>
//    int(46803)
//  }
//}



if(empty( $_FILES['image']["tmp_name"]))
{
    echo "Ошибка загрузки";
} else {

    $tmp_name = $_FILES["image"]["tmp_name"]; //путь к файлу где временно храниться картинка
    //$_FILES["image"] - где искать , ["name"] - имя конкретной картинки
    $path_parts = pathinfo($_FILES["image"]["name"]); //получаем массив из информации про файл (имя, разширение и тд)
    $suffix = $path_parts['extension']; //из массива получаем окончание файла - .jpg

    $image_name = 'images/'.uniqid().'.'.$suffix; //подготовили путь к картинке, чтобы записать в БД
    //берём с временного хранилища, загружаем в папку images/ с уникальныи именем
    move_uploaded_file($tmp_name,$image_name);

    //var_dump($image_name); //string(24) "images/628e600b04f3b.png"

    $pdo = new PDO("mysql:host=localhost;dbname=my_project","root","");
    $sql = "INSERT INTO images (images) VALUES (:image)";
    $statement = $pdo->prepare($sql);
    $statement->execute(['image'=>$image_name]);


    header("Location: task_18.php");

}



