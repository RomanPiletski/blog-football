<?php
// #Task 3.1
    $k = -10;$z=2;
    if($k<1):
        $x = $k*$z**3;
        echo "x = ".$x."<br>";
    else:
        $x = $z*($z+1);
        echo "x = ".$x."<br>";
    endif;
    $y = pow(log(1+$x**2)+cos($x+1),exp($k*$x));
    echo "y = ".$y;
?>
