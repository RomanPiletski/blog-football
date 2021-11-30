<?php
echo "Создайте массив из n (рандомное количество) элементов - напишите <br> алгоритм который бы переставил элементы массива в обратный порядок - т.е. первый элемент сдвинулся бы на последний, второй элемент <br> сдвинулся бы на предпоследний и так далее.<br>";
$arr=[1, 2, 3, 4, 5, 6, 7];
$count = count($arr);
$half = $count/2;
$firstPart = array_slice($arr, 0, $half);
$secondPart = array_slice($arr, $half);
$reverseSecondPart = [];
$reverseFirstPart = [];
for ($i = sizeof($secondPart) - 1; $i >= 0; $i--){
    array_push($reverseSecondPart, $secondPart[$i]);
}
for ($i = sizeof($firstPart) - 1; $i >= 0; $i--){
    array_push($reverseFirstPart, $firstPart[$i]);
}
$newArr = array_merge($reverseSecondPart, $reverseFirstPart);
echo "was<br>";
foreach($arr as $value){
    echo $value." ";
}
echo "<br>became<br>";
foreach($newArr as $value){
    echo $value." ";
}