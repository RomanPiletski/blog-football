<?php
echo 'Задача - Создайте массив из n (рандомное количество) элементов - напишите алгоритм который бы переставил элементы массива в обратный порядок - т.е. первый элемент сдвинулся бы на последний, второй элемент сдвинулся бы на предпоследний и так далее.'.'<br>';

$randValue = mt_rand(0,101);

$arr = [];
for ($i = 0; $i <= $randValue; $i++){
    array_push($arr, mt_rand(0, $randValue));
};

echo '<br>'.'Был массив - '.implode("," , $arr).'<br>';

if ($randValue % 2 == 0) {
    for ($i = 0; $i <= $randValue/2; $i++) {
        $newValue = $arr[$i];
        $arr[$i] = $arr[$randValue - $i];
        $arr [$randValue - $i] = $newValue;
    }} else {
    for ($i = 0; $i <= ($randValue+1)/2; $i++) {
        $newValue = $arr[$i];
        $arr[$i] = $arr[$randValue - $i];
        $arr [$randValue - $i] = $newValue;
    }
};

echo '<br>'.'Стал массив - '.implode("," , $arr).'<br>';







?>