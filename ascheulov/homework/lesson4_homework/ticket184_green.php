<?php
// Задача 1 - Найдите сумму ключей этого массива и поделите ее на сумму значений.

$arr1 = [1 => 6, 2 => 7, 3 => 8, 4 => 9, 5 => 10];

$arrValuesSum = array_sum($arr1);

$arrKeys = array_keys($arr1);
$arrKeysSum = array_sum($arrKeys);

$answer = $arrKeysSum/$arrValuesSum;
echo 'Задача 1'.'<br>'.'Сумма ключей массива деленная на сумму его значений равна - '.$answer.'<br>';

// Задача 2- Запишите ключи этого массива в один массив, а значения - в другой.

$arr2 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];

$arr2Values = array_values($arr2);

$arr2Keys = array_keys($arr2);

echo '<br>'.'Задача 2'.'<br>';

var_dump($arr2Keys);
var_dump($arr2Values);

?>