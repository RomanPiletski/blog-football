<?php
echo 'Используя оператор if..else<br> 
посчитайте значение переменой y в зависимости от условного изменения значений k.<br>';
$k=-10;
$z=2;
$x=0;
if($k<1){
    $x=$k*$z**3;
}else if($k>=1){
    $x=$z*($z+1);
}
$y=intval(exp((log(1+$x**2)+cos($x+1)))**($k*$x));
echo "First value $y <br>";

$k=1;
$z=1;
if($z>0){
    $x=1/($z**2+2*$z);
}else if($z<=0){
    $x=1-$z**3;
}
$y=intval((2*M_E**((-3)*$x)-4*$x**2)/(log(abs($x))+$x));
echo "Second value $y <br>";