<?php
echo "Найдите сумму ключей этого массива и поделите ее на сумму <br> значений.<br>";
$arr = [1 => 6, 2 => 7, 3 => 8, 4 => 9, 5 => 10];
$sumKey = 0;
$sumValue = 0;
foreach($arr as $key => $value){
    $sumKey += $key;
    $sumValue += $value;
    $result = $sumKey/$sumValue;
}
echo $result;