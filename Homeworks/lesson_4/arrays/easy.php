<?php
// task 1
echo '<br>'.'Задача 1 - Найдите сумму ключей этого массива и поделите ее на сумму значений'.'<br>';
$arr = [1 => 6, 2 => 7, 3 => 8, 4 => 9, 5 => 10];
$result = 0;
foreach ($arr as $key => $value) {
    $result += $key;
}
echo $result.'<br>';
echo '<br>';


// task 2
echo '<br>'.'Задача 2- Запишите ключи этого массива в один массив, а значения - в другой.'.'<br>';

$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$keys = [];
$values = [];
foreach ($arr as $key => $value) {
    $keys[]=$key;
    $values[]=$value;
}
print_r($keys);
echo '<br>';
print_r($values);
echo '<br>';
