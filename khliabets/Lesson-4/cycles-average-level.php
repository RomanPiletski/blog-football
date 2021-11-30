<?php

$number = rand(1 , 20);

$f_while=1;
$i = 1;

while ($i<=$number){
    $f_while *= $i;
    $i++;
}

$f=1;

for ($i=1 ; $i<=$number; $i++){
    $f *= $i;
}

$f_foreach = 1;
$arr = range(1,$number);
foreach ($arr as $el){
    $f_foreach *= $el;
}

if ($f===1 && $number!==1 || $f_while===1 && $number!==1 || $f_foreach===1 && $number!==1){
    echo "Произошла ошибка!";
}
else {
    echo "Факториал числа $number, вычисленный с помощью цикла while, равняется $f_while" . "<br>";
    echo "Факториал числа $number, вычисленный с помощью цикла for, равняется $f" . "<br>";
    echo "Факториал числа $number, вычисленный с помощью foreach, равняется $f_foreach" . "<br>";
}


$f_product = array_product($arr);
echo "Факториал числа $number, вычисленный с помощью array_product, равняется $f_product" . "<br>";