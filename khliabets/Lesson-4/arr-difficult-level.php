<?php

//Создайте массив из n (рандомное количество) элементов - напишите алгоритм,
// который бы переставил элементы массива в обратный порядок - т.е. первый элемент сдвинулся бы на последний,
//второй элемент сдвинулся бы на предпоследний и так далее.

$kol_el = rand(1,6);

$arr = range(1 , $kol_el);

echo 'Начальный массив: ';
var_dump($arr);

$el_start = 0;
$el_end = $kol_el-1;

while ($el_start < $el_end ){
    $el_transit = $arr[$el_start];
    $arr[$el_start] = $arr[$el_end];
    $arr[$el_end] = $el_transit;
    $el_start ++;
    $el_end --;
}

echo "<br>" . 'Перевернутый массив: ';
var_dump($arr);