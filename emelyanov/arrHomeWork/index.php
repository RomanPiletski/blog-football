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

echo "<br><br>Создайте массив из n (рандомное количество) элементов - напишите алгоритм который бы переставил элементы 
массива в обратный порядок - т.е. первый элемент сдвинулся бы на последний, второй элемент сдвинулся бы на предпоследний и так далее.
PS>учитывайте что элементы в массиве могут быть как четное количество так и не четное, в случаи если их 
количество нечетное серединный элемент остается без изменений<br><br>";

function createArr() {
    $randomArr = [];
    for($i = 0; $i < mt_rand(6, 14); $i++) {
        array_push($randomArr, mt_rand(1, 50));
    }
    return $randomArr;
}
$arrHard = createArr();

echo implode(', ', $arrHard).' - изначальный массив<br>';
$arrReverse = [];
for ($i = count($arrHard) - 1; $i >= 0; $i--) {
    array_push($arrReverse, $arrHard[$i]);
}
$arrHard = $arrReverse;
echo implode(', ', $arrHard) . ' -  массив на выходе<br>';