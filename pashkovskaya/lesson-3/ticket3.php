<?php
$k=-10;
$z=2;
$x=0;
if(k<1){
    $x=$k*$z**3;
}else if(k>=1){
    $x=$z*($z+1);
}
$y=(log(1+$x**2)+cos($x+1))**M_E**($k*$x);
echo "First value $y";