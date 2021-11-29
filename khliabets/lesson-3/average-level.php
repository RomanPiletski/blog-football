<?php
//Составить программу для определения значения функции m. Самостоятельно определить исключительные ситуации
//и предусмотреть диагностические сообщения, если нормальное завершение программы невозможно
//(например, деление на ноль).

function max_number($a,$b){
    //($a>$b) ? return $a : return $b;
    if ($a>$b){
        return $a;
    }
    else {
        return $b;
    }
}

function min_number($a, $b){
   // $a<$b ? return $a : return $b;
    if ($a<$b) {
        return $a;
    } else{
        return $b;
    }
}
$x=1;
$y=3;
$z=6;

if (empty( max_number( min_number($x, $y), min_number ($y,$z) ) ))
    echo "Ошибка: на ноль делить нельзя" . "<br>";
else {
    echo "x=$x, y=$y, z=$z,  min(y,z)/(max( min(x,y), min(y,z))) = ";
    echo min_number ($y, $z)/(max_number(min_number($x, $y), min_number ($y,$z))) . "<br>";
}


$x=4;
$y=4;
$z=3;

if (empty(min_number($x, $y))){
    echo "Ошибка: на ноль делить нельзя" . "<br>";
}
else {
    echo "x=$x, y=$y, z=$z, max(x,y,z)/min(x,y) + 5= ";
    echo  max_number(max_number($x,$y) , $z)/min_number($x, $y) +5;
}




