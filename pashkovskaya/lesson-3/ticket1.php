<?php
echo 'Задача 1 - В переменной $min лежит число от 0 до 59. <br> Определите 
в какую четверть часа попадает это число <br>(в первую, вторую, третью или четвертую).';
$min = 5;
if ((0 < $min) && ($min <= 15)) {
    echo "First quarter";
} else if ((15 < $min) && ($min <= 30)) {
    echo "Second quarter";
} else if ((30 < $min) && ($min <= 45)) {
    echo "Third quarter";
} else if ((45 < $min) && ($min <= 60)) {
    echo "Fourth quarter";
}
echo 'В переменной $month лежит какое-то число из интервала от 1 до 12.<br>
Определите в какую пору года попадает этот месяц (зима, лето, весна, осень).';
$month = 5;
switch (true){
    case (($month===12) && (1<=$month) && ($month<=2)):
        echo "Winter";
        break;
    case ((3 <= $month) && ($month <= 5)):
        echo "Spring";
        break;
    case ((6 <= $month) && ($month <= 8)):
        echo "Summer";
        break;
    case ((9 <= $month) && ($month <= 11)):
        echo "Autumn";
        break;
    default: echo "Invalid input!";
}
