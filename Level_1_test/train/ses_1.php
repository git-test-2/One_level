<?php
session_start(); //новый листок для записи туда данных юзера (Сервер это банк)

$_SERVER['name'] = 'simba'; // записывает туда имя

echo $_SERVER['name'];

//Появилась запись куки PHPSESSID = u0ceolit50ldbttbdr0947j8i4adbiim (F12 - cookie)

var_dump($_COOKIE); //какие куки существуют у юзера по отношению к сайту

                            //как хранитиь инфу в кукисах, не использую сессию
//setcookie('login','simba', 3360); // устанавливаем куку. Первое - имя  ключа, второе значение, третье - время жизни куки
//после чего она удаляется
// F12 login = simba