<?php
//Конструктор - опеределённый
//установить значение по умолчанию

class Person
{
    public $name;
    public $age;
    const ID = 10; //константа

    // Int, String, bool
    public function __construct($name,Int $age) //метод вызывается автоматически и выполняет всё что в нём написано, когда мы создаём объект
    {
        //$name = $name;
        $this->name = $name; //$this по отношению к тому объекту где вызывается свойство или метод
        $this->age = $age; //$this - означает на объекте (именно на определённом объекте, у каждого экземпляра свой $this)
        //echo 'я конструктор и вызываюсь автоматически';
    }

    public static function saySomething() { //статичный(static) метод, можно вызывать без объекта. Как обычную глобальную ф-ю
        echo 'bla-bla';
    }
    //Статичная ф-я это обособленная ф-я от объекта, она используется Person::saySomething(); - чтобы было удобно читать код
    //В статичном методе не используется $this->, статичная ф-я не использует свойсва, методы класса где находится.
    //Стат-я ф-я как иннородное тело в классе. Потому что Стат. ф-я не является частью объекта.
}

$myPerson = new Person('simba','14');
$myPerson2 = new Person('tim','21');

//echo $myPerson->name;
//echo $myPerson->age;

//echo $myPerson2->name;
//echo $myPerson2->age;

//echo $myPerson::ID; //вот так обращаются к константе

//Person::saySomething(); //Класс :: имя статичного метода. Так вызывается статичный метод класса. Создавать объект не нужно.

class Student
{
    public $name = 'I am student';
}
                                                        //Тип класса. Каждый класс является собственным типом.
class University
{
    public $students;

    public function addStudent(Person $students) // Указали тип класса. метод ждёт класс Person (другой клас если передадим будет ошибка)
    {
        echo $students->name;
    }

}

$univer = new University;

$person = new Person('Serg','33');
$students = new Student();


$univer->addStudent($person); //Объект $univer ожидает для приёма объект класса Person, и никакой другой не примет.





