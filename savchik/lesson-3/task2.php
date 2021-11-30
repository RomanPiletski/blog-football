<?php


$x = 1;
$y = 3;
$z = 6;
if (min($x, $y) == 0) {
 echo 'error';
} else {
    $m = max($x, $y, $z) / min($x, $y) + 5;
    echo $m;
}

$x = 4;
$y = 4;
$z = 3;
if (min($x, $y) || min($y, $z)) {
    echo 'error';
} else {
    $m = min($y, $z) / max(min($x, $y), min($y, $z));
    echo $m;
}
