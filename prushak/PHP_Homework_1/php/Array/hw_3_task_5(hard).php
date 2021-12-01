<?php
//Создайте массив из n (рандомное количество) элементов - напишите алгоритм который
//бы переставил элементы массива в обратный порядок - т.е.первый элемент сдвинулся бы на последний,
//второй элемент сдвинулся бы на предпоследний и так далее.

function addElemInArr($count){
    for($start=0;$start<$count;$start++):
        $arr[$start] = random_int(1,99);
    endfor;
    return $arr;
}
function reversElemInArr($a){
    $arrReverse = [];
    for($i=count($a)-1;$i<count($a) and $i >= 0;$i--){
            array_push($arrReverse,$a[$i]);
    }
    return $arrReverse;

}
$a = addElemInArr(6);
var_dump($a);
echo "<br>";
var_dump(reversElemInArr($a));