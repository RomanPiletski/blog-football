<?php
// Найдите сумму ключей этого массива и поделите ее на сумму значений.
/*
$arr = [1 => 6, 2 => 7, 3 => 8, 4 => 9, 5 => 10];
$a=array_sum($arr)/array_sum(array_keys($arr));
var_dump($a);
*/

//Запишите ключи этого массива в один массив, а значения - в другой.
$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$a=array_values($arr);
$b=array_values(array_flip($arr));
var_dump($b);