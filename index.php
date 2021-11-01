<?php
//1.Рекурсивно выведите на экран ряд Фибоначчи до 10-го элемента
function Fib($number){
    // if and else if to generate first two numbers
    if ($number == 0)
        return 0;
    else if ($number == 1)
        return 1;
    // Recursive Call to get the upcoming numbers
    else
        return (Fib($number-1) + Fib($number-2));
}

$number = 10;
for ($i = 0; $i < $number; $i++){
    echo Fib($i),' ';
}
//2.Создайте в цикле (for либо while) одномерный массив из 10 элементов,
// где значение на каждой итерации - произвольное число от 1 до 10 (используйте функцию mt_rand)
function printArr(array $arr) {
    foreach ($arr as $value)
        echo $value . '<br/>';
}
$arr = [];
for ($j = 0; $j <= 10; $j++) {
    $value = mt_rand(1, 10);
    $arr[] = $value;
}
echo '<pre>';
print_r($arr);
echo '</pre>';
//3.Выведите все чётные и все нечётные элементы массива из задания 3
$arr1 = [1, 2, 3, 7, 31, 4, 1, 8, 6];
foreach ($arr1 as $key => $value) {
    if (($value + 1) % 2 == 0) {
        echo   $value . '<br>';
    }
    if (($value +1) % 2 !=0) {
        echo $value . '<br>';
    }
}
//4.Отсортируйте массив из задания 3 по ключу в обратном порядке
$firstArr = [

    'one' => 1,

    'two' => 2,

    'three' => 3,

    'foure' => 5,

    'five' => 12,

];

ksort($firstArr);
    foreach ($firstArr as $key => $value)
    {
      echo  "$key = $value\n";
    }


//5.Отсортируйте массив из задания 3 по значению в обратном порядке
echo '<br>';
rsort($firstArr);
    foreach ( $firstArr as $key => $value)
    {
        echo "$key = $value\n";
    }

//6.Создайте индексированный массив произвольных имён (до 10 элементов).
// Поменяйте местами ключи и значения этого массива и выведите на экран

$someArr = ['Bob','Alfred','Lily','Maks','Bill','Mark'];
echo '<br>';
    $key1 = array_flip($someArr);
    var_dump($key1);



//7.Создайте двумерный массив и переберите его циклами foreach, for и while
echo '<br>';
$ThirdArr = [

    'one' => 1,

    'two' => [

        'one' => 1,

        'seven' => 22,

        'three' => 32,
    ],

    '   three' => [

        'one' => 1,

        'two' => 2,

    ],

    'four' => 5,

    'five' => [

        'three' => 32,

        'four' => 5,

        'five' => 12,

    ],

];

for ($j = 0; $j <= count($ThirdArr); $j++);
echo $j;
echo '<br>';
foreach ($ThirdArr as $value)
{
    echo "{$value['five']}";
}
echo '<br>';
$g = 0;
while ($g <= count($ThirdArr)) {
    $g++;
    echo "{$g}\n";
}


