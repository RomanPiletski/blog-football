<?php
// #Task 1.1
    $x = 1;$y=4;$z=6;
    $m = max($x,$y,$z)/min($x,$y) + 5;
    echo "m = ".$m."<br>";
// #Task 1.2
    $u = min($y,$z)/max(min($x,$y),min($y,$z));
    echo "u = ".$u;
?>
