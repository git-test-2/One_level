<?php

echo "Hello world";

$name = ' simba ';

echo $name;

$a = 1;
$b = 2;
echo $sum = $a + $b;

echo '<br/>';
$mounth = ['Май','Июнь','Июль','Август'];

echo $mounth[0].'<br/>';

$person = [
    'name'=>'John',
    'surname'=>'Doe',
    'age'=>27,
    'mounth' => ['Май','Июнь','Июль','Август']
];

echo $person['name'];
echo $person['surname'];
echo $person['age'];
echo $person['mounth'][3];

foreach ($mounth as $moun)
{
    echo $moun . PHP_EOL;
}

$numbers = ['one','two','three','four','five','six'];

for($i = 0; $i < 10; $i++){
    echo $i;
}
echo '<br>';

$i = 0;

do {
    $i++;
    echo $i;
} while ($i < 10);

$i = 1;
while ($i <= 10) {
    echo $i++;  /* выводиться будет значение переменной
                   $i перед её увеличением
                   (post-increment) */
}


foreach ($numbers as $number)
{
    if($number != 'five')
    {
        echo $number . PHP_EOL;
    }
}


