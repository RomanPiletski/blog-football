<?php
echo "С помощью цикла заполните массив нечетными числами в промежутке от 1 до 99.<br>";

$arr = [];

for ($i = 1, $j = 0; $i <= 100; $i += 2, $j++) {
    array_push($arr, $i);
}
foreach ($arr as $value){
    echo $value." ";
}