<?php
//Задача 1 - Найдите сумму ключей этого массива и поделите ее на сумму значений.
    $arr = [1 => 6, 2 => 7, 3 => 8, 4 => 9, 5 => 10];
    $sumKey = null;
    $sumValue = null;
    for($i=1;$i<=count($arr);$i++){
        $sumKey+=$i;
        $sumValue+=$arr[$i];
    }
    echo  $sumKey/$sumValue;

//Задача 2- Запишите ключи этого массива в один массив, а значения - в другой.
    $arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
    $arrKey = [];
    $arrValue=[];
    foreach ($arr as $key){
        array_push($arrValue,$key);
    }
    $arrKey = array_keys($arr);
    var_dump($arrValue);
    echo "<br>";
    var_dump($arrKey);
?>
