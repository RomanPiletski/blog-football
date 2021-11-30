<?php
/*Найдите сумму ключей этого массива и поделите ее на сумму значений.*/
echo  "Задача 1" . "<br>";
$arr = [1 => 6, 2 => 7, 3 => 8, 4 => 9, 5 => 10];

$arr_keys = array_keys($arr);
$arr_values = array_values($arr);

var_dump($arr);

echo "<br>" . "Сумма ключей массива, деленная на сумму значений равна " . array_sum($arr_keys)/array_sum($arr_values);

echo  "<br>" . "Задача 2" . "<br>";
/*Запишите ключи этого массива в один массив, а значения - в другой.*/

$arr1 = [1 => 6, 2 => 7, 3 => 8, 4 => 9, 5 => 10];

$arr_keys = array_keys($arr1);
$arr_values = array_values($arr1);

echo  "Начальный массив: " ;
var_dump($arr1);
echo "<br>" . "Массив ключей: " ;
var_dump($arr_keys);
echo "<br>" . "Массив значений: " ;
var_dump($arr_values);