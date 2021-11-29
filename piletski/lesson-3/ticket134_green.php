<?php
    $min = 37;
    if ($min >= 0 && $min <= 14) {
        echo "$min" . " мин это 1 четверть" . "<br>";
        };
    if ($min >= 15 && $min <= 29) {
        echo "$min" . " мин это 2 четверть" . "<br>";
        };
    if ($min >= 30 && $min <= 44) {
        echo "$min" . " мин это 3 четверть" . "<br>";
        };
    if ($min >= 45 && $min <= 59) {
        echo "$min" . " мин это 4 четверть" . "<br>";
        };
    $month = 11;
    if ($month == 1 || $month == 2 || $month == 12) {
        echo "Месяц $month" . " это зима";
        };
    if ($month == 3 || $month == 4 || $month == 5) {
        echo "Месяц $month" . " это весна";
        };
    if ($month == 6 || $month == 7 || $month == 8) {
        echo "Месяц $month" . " это лето";
        };
    if ($month == 9 || $month == 10 || $month == 11) {
        echo "Месяц $month" . " это осень";
        };


