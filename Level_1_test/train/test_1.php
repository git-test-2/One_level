<?php
//error_reporting( E_ALL & ~E_NOTICE & ~E_DEPRECATED );
error_reporting(E_ALL );

function walk()
{
    echo "Поднять левую ногу <br/>";
    echo "Поднять правую ногу <br/>";
    echo "Оттолкнуться";
}

//walk();

function cook($ingredients, $meal) //аргументы
{ //тело ф-ции
    echo "Беру $ingredients <br/>";
    echo "Готовлю...";
    return "$meal готово";
}

$meal = cook("кетчуп, тесто, яйца, сыр", "Суп");
var_dump($meal);


echo ucfirst('hello'); //первую букву в заглавную
echo strrev('hello');
//phpinfo();

var_dump(['name'=>'dls']);