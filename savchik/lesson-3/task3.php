<?php

$k=-10;
$z=2;

if ($k<1) {
    $x=$k*$z**3;
    $y=(log(1+$x**2)+cos($x+1))**M_E**($k*$x);
    echo $y;
} else {
    $x=$z*($z+1);
    $y=(log(1+$x**2)+cos($x+1))**M_E**($k*$x);
    echo $y;
}
/*
$k=1;
$z=1;
if ($z>0) {
    $x=1/($z**2+2*$z);
    $y=(2*M_E**(-3*$x)-4*$x**2)/(log(abs($x))+$x);
    echo $y;
} else {
    $x=1-$z**3;
    $y=(2*M_E**(-3*$x)-4*$x**2)/(log(abs($x))+$x);
    echo $y;
}
*/
?>