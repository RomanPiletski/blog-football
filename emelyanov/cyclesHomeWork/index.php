<?php
echo "//С помощью цикла заполните массив нечетными числами в промежутке от 1 до 99.<br>";
$arr1 = [];
for($i = 0; $i <= 99; $i++) {
    if($i % 2 != 0) {
        array_push($arr1, $i);
    }
}

var_dump($arr1);
echo "<br>С помощью готовой функции range заполните массив нечетными числами в промежутке от 1 до 99.<br>";
$arr2 = [];
foreach (range(1, 100, 2) as $value) {
    array_push($arr2, $value);
}
echo "<br>";
var_dump($arr2);

echo "<br>";

echo "//Используя каждый из циклов (while, foreach, for) - напишите функционал по расчету факториала числа:
//PS> Факториал - множество всех цифр в числе. Т.е. факториал числа 3 = 1*2*3, факториал числа 5=1*2*3*4*5";


$resultFor = 1;
$factorialFor = 5;

for($i = 1; $i <= $factorialFor; $i++) {
    $resultFor *= $i;
}

echo "<br> $resultFor";

$resultWhile = 1;
$factorialWhile = 5;
$i = 1;
while($i <= $factorialWhile) {
    $resultWhile = $i * $resultWhile;
    $i++;
}

echo "<br>$resultWhile";


echo "<br>С помощью двух вложенных циклов выведите на экран следующую строку:
1 вариант - 111222333444555666777888999
2 вариант - 11 12 13 21 22 23 31 32 33<br>";

for($i = 1; $i <= 9; $i++) {
    for($j = 0; $j < 3; $j++) {
        echo $i;
    }
}

echo '<br>';

for($i = 1; $i <= 3; $i++) {
    for($j = 1; $j <= 3; $j++) {
        echo $i.$j." ";
    }
}