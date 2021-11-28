<?php
// task 1
echo '<b> task 1 </b>'.'<br>';

$k = -10;
$z = 2;
$x = null;
if ($k < 1) {
    $x = $k * pow($z, 3);
} else if ($k >= 1) {
    $x = $z * ($z + 1);
}
$y = pow((log(1+pow($x, 2)) + cos($x +1)), exp($k*$x));
echo $y.'<br>';

// task 1
echo '<b> task 2 </b>'.'<br>';

$k = 1;
$z = 1;

if ($z > 0) {
    $x = 1/(pow($z, 2) + 2*$z);
} else if ($z <= 0) {
    $x = 1 - pow($z, 3);
}
// echo $x;

$y = (2*pow(M_E, (-3*$x))) - (4*pow($x, 2)) /  (log(abs($x)) + $x);
echo $y.'<br>';
