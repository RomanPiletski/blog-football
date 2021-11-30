<?php
//first task hard level
$k = -10;
$z = 2;
if ($k < 1) {
    $x = $k * pow($z,3);
} else {
    $x = $z * ($z+1);
}
$y = pow(log(1 + pow($x,2)) + cos($x + 1),pow(M_E, $k * $x));
echo "<i>y = <i>" .($y);
echo "<br>";

//second task hard level
$k = 1;
$z = 1;
if ($z > 0) {
    $x = 1 / (pow($z,2) + 2 * $z);
} else {
    $x = 1 - pow($z,3);
};
$y = (2*pow(M_E,-3 *$x) - 4 * $x) / (log(abs($x)) + $x);
echo "<i>y = <i>" .($y);
?>
