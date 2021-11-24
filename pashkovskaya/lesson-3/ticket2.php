<?php
function max(...$values){
    $max_value = $values[0];
    for ($i = 0; $i < sizeof($values); $i++) {
        if($max_value<$values[$i]){
            $max_value = $values[$i];
        }
    }
    return $max_value;
}
function min(...$values){
    $min_value = $values[0];
    for ($i = 0; $i < sizeof($values); $i++) {
        if($min_value>$values[$i]){
            $min_value = $values[$i];
        }
    }
    return $min_value;
}
$x=1;
$y=3;
$z=6;
if(!(min($x, $y) === 0)){
    $m = max($x, $y, $z)/min($x, $y) + 5;
    echo $m;
}else{
    echo "Invalid input";
}
