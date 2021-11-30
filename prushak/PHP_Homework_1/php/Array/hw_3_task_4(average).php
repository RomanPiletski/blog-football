<?php
//Используя каждый из циклов (while, foreach, for) - напишите функционал по расчету факториала числа:
//PS> Факториал - множество всех цифр в числе. Т.е. факториал числа 3 = 1*2*3, факториал числа 5=1*2*3*4*5

function factorWithWhile($num){
    $i = 1;
    $fact = null;
    while($i<=$num){
        $fac*=$i;
        $i++;
    }
    return $fact;
}

function factorWithFor($num){
    $fact = null;
    for($i=1;$i<=$num;$i++){
        $fact*=$i;
    }
    return $fact;
}

function factorWithForeach($num){
    $fact = null;
    $arr=[];
    $i = 1;
    while($i<=$num){
        array_push($arr,$i);
        $i++;
    }
    foreach ($arr as $index){
        $fact*=$index;
    }
    return $fact;
}
echo factorWithWhile(5).",".factorWithFor(5).",".factorWithForeach(5);


