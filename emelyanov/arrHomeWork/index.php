<?php
echo "// Найдите сумму ключей этого массива и поделите ее на сумму значений.<br>";
$arr = [1 => 6, 2 => 7, 3 => 8, 4 => 9, 5 => 10];
$sumKey = 0;
$sumValue = 0;
$summa = 0;
foreach ($arr as $key => $value) {
    $sumKey += $key;
    $sumValue += $value;
    $summa = $sumKey / $sumValue;
}
echo $summa;

echo "<br>";

echo "//Задача 2- Запишите ключи этого массива в один массив, а значения - в другой.<br>";
$arr2 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$arrKey = [];
$arrValue = [];
foreach ($arr2 as $key => $value) {
    array_push($arrKey, $key);
    array_push($arrValue, $value);
}

var_dump($arrKey);
echo "<br>";
var_dump($arrValue);

