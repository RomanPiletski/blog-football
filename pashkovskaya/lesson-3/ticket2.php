<?php
function max(...$values){
    for ($i = 0; $i < $values.sizeof(); $i++) {
        $max_value = $values[0];
        if($max_value<$values[i]){
            $max_value = $values[i];
        }
        return $max_value;
    }
}
function min(...$values){
    for ($i = 0; $i < $values.sizeof(); $i++) {
        $min_value = $values[0];
        if($min_value>$values[i]){
            $min_value = $values[i];
        }
        return $min_value;
    }
}
$x=1;
$y=3;
$z=6;
if(!min(x, y) === 0){
    $m = max(x, y, z)/min(x, y) + 5;
    echo $m;
}else{
    echo "Invalid input";
}
