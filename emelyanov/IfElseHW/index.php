<?php
echo "Задача 1 - В переменной \$min лежит число от 0 до 59. Определите в какую четверть часа попадает это число (в первую, вторую, третью или четвертую).<br>";
$min = 33;
if($min >= 0 && $min < 15) echo 'Первая четверть часа';
elseif($min >= 15 && $min < 30) echo 'Вторая четверть часа';
elseif($min >= 30 && $min < 40) echo 'Третья четверть часа';
elseif($min >= 40 && $min < 60) echo 'Четвертая четверть часа';
else echo $min;

echo "<br>Задача 4 - В переменной \$month лежит какое-то число из интервала от 1 до 12. Опредите в какую пору года попадает этот месяц (зима, лето, весна, осень).<br>";
$month = 5;
if($month > 0 && $month <=3) {
    echo 'zima';
} elseif($month > 3 && $month <=6) {
    echo 'vesna';
} elseif($month > 6 && $month <=9) {
    echo 'leto';
} elseif($month > 9 && $month <= 12) {
    echo 'osen';
} else {
    $month;
}