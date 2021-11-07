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

$arr = [];
for ($j = 0; $j <= 10; $j++) {
    $arr[] = mt_rand(1, 10);
}
echo '<pre>';
print_r($arr);
echo '</pre>';
//3.Выведите все чётные и все нечётные элементы массива из задания 2
foreach ($arr as $key => $value) {
    if ($value % 2 != 0) {
        echo "$value <br>";
    }
}
    foreach ($arr as $k =>$v) {
        if ($v % 2 == 0) {
            echo  "$v <br>";
        }
    }
//4.Отсортируйте массив из задания 2 по ключу в обратном порядке
sort($arr);
    foreach ($arr as $key => $value)
    {
      echo  "$key = $value\n";
    }


//5.Отсортируйте массив из задания 3 по значению в обратном порядке
echo '<br>';
rsort($arr);
    foreach ( $arr as $key => $value)
    {
        echo "$key = $value\n";
    }

//6.Создайте индексированный массив произвольных имён (до 10 элементов).
// Поменяйте местами ключи и значения этого массива и выведите на экран

$someArr = ['Bob','Alfred','Lily','Maks','Bill','Mark'];
echo '<br>';
    $swap = array_flip($someArr);
    var_dump($swap);

//7.Создайте двумерный массив и переберите его циклами foreach, for и while
echo '<br>';
$ThirdArr = [1,[2,3],4];
function sumArr($ThirdArr) {
    $sum = 0;
    foreach($ThirdArr as $values) {
        if (is_array($values)) {
            $sum += sumArr($values);
        } else {
            $sum += $values;
        }
    }
    return $sum;
}
 echo sumArr($ThirdArr);
for ($f = 0; $f < count($ThirdArr); ++$f) {
    echo '<br>';
    echo $f;
}
$h = 0;
while ($h <= count($ThirdArr)){
    $h++;
    echo '<br>';
    echo $h;
}

