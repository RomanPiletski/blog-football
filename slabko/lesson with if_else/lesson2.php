<!--Задание 1 в if_else(easy level)-->
<?php
 $min = 45;

 if ($min >= 0 && $min <= 14) {
     echo '1 четверть';
 }

 if ($min >= 15 && $min <= 29) {
     echo '2 четверть';
 }

 if ($min >= 30 && $min <= 44) {
     echo '3 четверть';
 }

 if ($min >= 45 && $min <= 59) {
     echo '4 четверть';
 }
?>

<!--задание 4 if_else(easy level)-->
<?php
$month = 4;

if ($month == 12 or $month <= 2) {
    echo 'зима';
}

elseif ($month >= 3 or $month <= 5) {
    echo 'весна';
}

elseif ($month >= 6 or $month <= 8) {
    echo 'лето';
}

elseif ($month >= 9 or $month <= 11) {
    echo 'осень';

} else {
    echo "Вы выбрали неверный месяц";
}

?>
