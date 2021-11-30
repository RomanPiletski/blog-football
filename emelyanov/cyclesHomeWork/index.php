<?php
//С помощью цикла заполните массив нечетными числами в промежутке от 1 до 99.
$arr1 = [];
for($i = 0; $i <= 99; $i++) {
    if($i % 2 != 0) {
        array_push($arr1, $i);
    }
}

var_dump($arr1);
//С помощью готовой функции range заполните массив нечетными числами в промежутке от 1 до 99.
$arr2 = [];
foreach (range(1, 100, 2) as $value) {
    array_push($arr2, $value);
}
echo "<br>";
var_dump($arr2);

echo "<br>";

//Используя каждый из циклов (while, foreach, for) - напишите функционал по расчету факториала числа:
//PS> Факториал - множество всех цифр в числе. Т.е. факториал числа 3 = 1*2*3, факториал числа 5=1*2*3*4*5

$n = 5;
$factorial = null;
$factorialWhile = 1;
for ($i = 1; $i <= $n; $i++) {
    $factorial = $i * $n;
}


echo $factorial;
echo "<br>";
echo $factorialWhile;