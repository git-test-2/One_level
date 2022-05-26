<?php

class Person //класс
{

    public $name; //свойства
    public $age;

    public function sayHello() //метод
    {
       return  'Hi I am ' . $this->name . ' and i am ' . $this->sayAge(); //внутри метода sayHello вызываем другой метод sayAge
    }
    //return возвращает результат работы метода, и уже 'echo' подхватытвает и выводит его echo $myPerson->sayHello();
    //иначе было бы NULL, если не поставили return


    public function setName($name) //заполняем свойство public $name;
    {
        $this->name = $name; // $this-> устанавливаем значение свойству (name) текущего объекта
        //$this будет использовать то свойство, в объекте которого он находится
        //$this - означает что используем тот объект на котором вызываем метод setName()
    }


    public function setAge($age)
    {
        $this->age = $age;
    }

    public function sayAge()
    {
       return $this->age; //без return ф-я ничего не выплёвывает, а значит не будет подставлять значение в $this->sayAge() (в методе sayHello)
    }

}

$myPerson = new Person();
//$myPerson2 = new Person();

$myPerson->setName('simba');
$myPerson->setAge(10);

echo $myPerson->sayHello();

//$myPerson2->setName('timon');
//$myPerson2->setAge(12);

//echo $myPerson->name;
//echo $myPerson->age;
//echo $myPerson2->age;



//создали объект (экземпляр класса поместили в переменную)
//$myPerson = new Person();
//$myPerson2 = new Person();


//$myPerson->sayHello('simba'); //вызываем метод
//$myPerson2->sayHello('timon');

//$myPerson->name = 'simba'; //вызвали свойство и записали в него
//echo $myPerson->name; //вывели значение свойства