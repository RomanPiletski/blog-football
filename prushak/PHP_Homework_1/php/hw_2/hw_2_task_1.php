<?php
// #Task 1.1
    $x = 1;$y=4;$z=6;
    $arr = [];
    $min = $x;
    $max = $x;
    array_push($arr,$x,$y,$z);
    for($i=0;$i<count($arr);$i++){
        for($y=1;$y<count($arr);$y++){
            if($min>$arr[$y]) {
                $min = $arr[$y];
            }else $max = $arr[$y];
        }
    }
    $m = $max/$min + 5;
    echo "m = ".$m."<br>";
// #Task 1.2
    function min_1($y,$z){
        if($y<$z){ //search min for y,z
            $min=$y;
        }else $min=$z;
        return $min;
    }
    function max_1($a,$b){
        if($a>$b){ //search min for y,z
            $max=$a;
        }else $max=$b;
        return $max;
    }
    $a = min_1(4,6);
    $b = min_1(1,4);
    $max_11 = max_1($a,$b);
    echo $max_11;
?>
