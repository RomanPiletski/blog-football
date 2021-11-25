<?php
    $x = 1;
    $y = 3;
    $z = 6;
    function fmax2($a,$b) {
        ($a>= $b) ? $max2 = $a : $max2 = $b;
        return $max2;
    };
    function fmin2($a,$b) {
        ($a<= $b) ? $min2 = $a : $min2 = $b;
        return $min2;
    };
    function fmax3($x,$y,$z){
        if ($x >= $y && $x >= $z) {
            $max3 = $x;
        }
        if ($y >= $x && $y >= $z) {
            $max3 = $y;
        }
        if ($z >= $x && $z >= $y) {
            $max3 = $z;
        }
        return $max3;
    };
    function fmin3($x,$y,$z){
        if ($x <= $y && $x <= $z) {
            $min3 = $x;
        }
        if ($y <= $x && $y <= $z) {
            $min3 = $y;
        }
        if ($z <= $x && $z <= $y) {
            $min3 = $z;
        }
        return $min3;
    };
    if (fmin3($x,$y,$z) !== 0) {
        echo "Функция m = " . (fmax3($x,$y,$z) / fmin3($x,$y,$z) + 5);
        echo "<br>";
    } else {
        echo "На ноль делить нельзя";
    };
    $x = 4;
    $y = 4;
    $z = 3;
    $c = fmin2($x,$y);
    $d = fmin2($y,$z);
    if (fmax2($c,$d) !== 0) {
        echo "Функция u = " . (fmin3($x,$y,$z) / fmax2($c,$d));
    } else {
        echo "На ноль делить нельзя";
    };
