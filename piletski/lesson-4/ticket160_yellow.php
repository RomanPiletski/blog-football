<?php
    echo "Используя каждый из циклов (while, foreach, for) - напишите функционал по расчету факториала числа: ";
    $n = mt_rand(1,15);
    echo ($n . "<br><br>");

    $result = 1;
    for ($i = 1; $i <= $n; $i++) {
        $result = $result * $i;
    };
    echo "Через цикл for " . $result . "<br>";

    $result = 1;
    foreach (range(1,$n) as $elem) {
        $result = $result * $elem;
    }
    echo "Через цикл foreach " . $result . "<br>";

    $result = 1;
    $i = 1;
    while ($i <= $n) :
        $result = $result * $i;
        $i++;
        endwhile;
    echo "Через цикл while " . $result . "<br>";