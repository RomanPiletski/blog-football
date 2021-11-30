<?php
    $arr = [1 => 6, 2 => 7, 3 => 8, 4 => 9, 5 => 10];
    $result = array_sum(array_keys($arr)) / array_sum($arr);
    echo "1. Сумма ключей этого массива поделить на сумму значений = " . $result . "<br>";
    $arr2 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
    $arrkeys = array_keys($arr2);
    $arrelem = array_values($arr2);
    echo "2. Массив ключей [ " . implode(", ", $arrkeys) . "], а массив значений [ " . implode(", ", $arrelem) . "]";
?>
