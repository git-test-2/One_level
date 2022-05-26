<?php
session_start();



                                                            //моё решение
//$click = $_POST['submit'];
//if (isset($click)){
//    $_SESSION['count'] = ++$_SESSION['count'];
//} else {
//    $_SESSION['count'] = 1;
//}


//++$a	Префиксный инкремент	Увеличивает $a на единицу, затем возвращает значение $a.
//$a++	Постфиксный инкремент	Возвращает значение $a, затем увеличивает $a на единицу.


//var_dump($click);
//exit();

//(int) - привели к типу. Чтобы выводило 0, если нету нажатий
$_SESSION['count'] = (int) $_SESSION['count'] + 1;

header("Location: task_15.php");

