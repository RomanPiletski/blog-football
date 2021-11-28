<?php

/*
$a = rand(0, 59);
if ($a>=0 && $a<=14) {
    echo "Число $a находится в первой четверти";
} elseif ($a>=15 && $a<=29) {
    echo "Число $a находится в второй четверти";
} elseif ($a>=30 && $a<=44) {
    echo "Число $a находится в третьей четверти";
} elseif ($a>=45 && $a<=59) {
    echo "Число $a находится в четвертой четверти";
}
*/

$month = rand(1, 12);
if ($month >= 3 && $month <= 5) {
    echo "$month месяц - это весна";
} elseif ($month == 12 || $month <= 2) {
    echo "$month месяц - это зима";
} elseif ($month >= 6 && $month <= 8) {
    echo "$month месяц - это лето";
} else {
    echo "$month месяц - это осень";
}

