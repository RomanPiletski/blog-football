<?php
// task 1
echo '<b>task 1</b>'.'<br>';
$x=1; 
$y=3; 
$z=6;

function getResultM($x, $y, $z){
    // находим максимальный числитель
    if($x>$y)
        $numer = $x;
      else 
        $numer = $y;
    
    if($numer<$z){
        $numer = $z;
    }

// находим минимальный знаменатель
    if ($x<$y) 
    $denum = $x;
    else 
    $denum = $y;

// проверка деления на 0 и решение
if($denum === 0)
    echo 'делить на ноль нельзя'.'<br>';
 else 
    $result = $numer / $denum + 5;

    echo 'x = '.$x.', y = '.$y.', z = '.$z.'<br>';
    echo 'M = '.$result.'<br>';
}
getResultM($x, $y, $z);

// task 2
echo '<b>task 2</b>'.'<br>';

$x=4; 
$y=4; 
$z=3;
function getResultU($x, $y, $z){
    // находим минимальный числитель
    if($x<$y)
        $numer = $x;
      else 
        $numer = $y;
    if($numer>$z)
        $numer = $z;

    // находим максимальный знаменатель
$denum = max(min($x, $y), min($y, $z));//не было времени расписывать вручную)
if($denum === 0){
    echo 'делить на ноль нельзя'.'<br>';
} else {
    $result = $numer / $denum;
}
    echo 'x = '.$x.', y = '.$y.', z = '.$z.'<br>';
    echo 'M = '.$result.'<br>';

}

getResultU($x, $y, $z);