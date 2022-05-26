<?php
//Для начала нам нужен сам пароль, обычно при регистрации мы получаем его с формы
//Пропускаем пароль через функцию password_hash(), вторым параметром передавая ей константу PASSWORD_DEFAULT
//Полученную в конечном итоге строку можно сохранять в базу данных

//PASSWORD_DEFAULT - используется алгоритм bcrypt (по умолчанию с PHP 5.5.0)
$pass = 123;


echo $pass_user = password_hash($pass,PASSWORD_DEFAULT);
echo '<br>';
//Чтобы проверить, верно ли пользователь ввёл пароль, используют специальную функцию password_verify().1
echo password_verify(123,$pass_user);

echo '<br>';


class One
{
    public $name;
    public $age;
    const G = 100;
    public $b;

    public function __construct()
    {
        return $b = 'я авто конструктор'.'<br/>';
    }

    public function setName($name)
    {
        $this->name = $name;
    }
        public function setAge($age)
    {
        $this->age = $age;
    }

    public function All($name,$age)
    {
        echo $name. ' ' . $age;
    }

}


$a = new One();

$a->All('simba','33');

echo $a->b;
echo One::G * 2;

