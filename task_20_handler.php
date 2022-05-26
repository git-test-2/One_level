<?php
//2
//count подсчитывает сколько элементов в массиве
for ($i=0; $i < count($_FILES['image']['name']); $i++ ) {

    upload_file($_FILES['image']['name'][$i], $_FILES['image']['tmp_name'][$i]);

    //для проверки что вышло из цикла
    //echo $_FILES['image']['name'][$i]; //название елемента в вмассиве
    //echo $_FILES['image']['tmp_name'][$i]; //название верменного хранилища у этого же елемента

}

//1
//передаём в ф-ю $_FILES['image'] как $file, и заменяем массив $_FILES['image'] в нашей ф-ции
function upload_file($filename, $tmp_name) {

    $image_path = pathinfo($filename); //получили массив с инфо про картинку
    $image_extension = $image_path['extension']; // взяли разрирение из массива .jpg
    $image_name = uniqid(). '.' .$image_extension; //сформировали уникальное имя и добавили к нему разширение .jpg
    //echo $image_name; //628fb491f2f49.jpg

    move_uploaded_file($tmp_name,"images/".$image_name); //из временногготхранилища загружаем по адресу с уникальным именем

    //3
    $pdo = new PDO("mysql:host=localhost;dbname=my_project","root","");
    $sql = "INSERT INTO images (images) VALUES (:image)";
    $statement = $pdo->prepare($sql);
    $statement->execute(['image'=>'images/'.$image_name]);


}

header("Location: task_20.php");


//upload_file($_FILES['image']); //ф-я сама придумает название и сама загрузит картинку в папку

////////////////////// мой код
if(empty($_FILES['image']['name'])){ //['name'] - добавляем чтобы было на что проверять empty
    echo 'не загрузили картинку';
} else {
//pathinfo() - режет название файла на название, потом на разширения


    $image_path = pathinfo($_FILES['image']['name']); //получили массив с инфо про картинку
    $image_extension = $image_path['extension']; // вщяли разрирение из массива .jpg
    $image_name = uniqid(). '.' .$image_extension; //сформировали уникальное имя и добавили к нему разширение .jpg
    //echo $image_name; //628fb491f2f49.jpg

    move_uploaded_file($_FILES['image']['tmp_name'],"images/".$image_name);

    $pdo = new PDO("mysql:host=localhost;dbname=my_project","root","");
    $sql = "INSERT INTO images (images) VALUES (:image)";
    $statement = $pdo->prepare($sql);
    $statement->execute(['image'=>'images/'.$image_name]);

    header("Location: task_20.php");


}



