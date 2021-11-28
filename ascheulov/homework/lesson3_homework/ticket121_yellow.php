<?php
// Задача 1
$x = 0; $y = 0; $z = 0;

function mini ($x, $y){
if ($x<=$y){
    $min= $x;
}else{$min = $y;
    }return $min;
};

function maxi ($x, $y, $z){
    if ($x>=$y and $x>=$z){
        $max= $x;
    }if($y>=$x and $y>=$z){
        $max = $y;
    }if($z>=$y and $z>=$x){
        $max = $z;
    }return $max;
};

if (mini(1,3) != 0){
    echo 'Задача 1 ответ: '.(maxi(1,3,6)/mini(1,3))+5;
}else{
    echo 'НА НОЛЬ ДЕЛИТЬ НЕЛЬЗЯ!!!!';
};

// Задача 2
$minyz = mini(4, 3);

$minxy = mini(4,4);

function maxi2 ($x, $y){
    if ($x>=$y){
        $max2= $x;
    }else{$max2 = $y;
    }return $max2;
};

if (maxi2($minxy,$minyz) != 0){
    echo '<br>'.'Задача 2 ответ: '.$minxy/maxi2($minxy,$minyz).'<br>';
}else{
    echo 'НА НОЛЬ ДЕЛИТЬ НЕЛЬЗЯ!!!!';
};

?>