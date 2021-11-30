<?php
echo "Запишите ключи этого массива в один массив, а значения - в другой.<br>";
$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$arrKey = [];
$arrValue = [];
foreach($arr as $key => $value){
    array_push($arrKey, $key);
    array_push($arrValue, $value);
}
foreach($arrKey as $value){
    echo $value." ";
}
echo "<br>";
foreach($arrValue as $value){
    echo $value." ";
}
