<?php
// Здача 1
$num = 46;

if($num>0 and $num<=15){
    echo 'первая четверть часа';
}else if($num>15 and $num<=30){
    echo 'вторая четверть часа';
}else if($num>30 and $num<=45){
    echo 'третья четверть часа';
}else if($num>45 and $num<=59){
    echo 'четвертая четверть часа';
}

// Задача 2
echo '<br>'.'-'.'<br>';

// Задача 3
echo '<br>'.'+'.'<br>';

// Здача 4
$month = 11;

if($month==1 or $month==2 or $month==12){
    echo 'зима'.'<br>';
}else if($month == 3 or $month == 4 or $month == 5){
    echo 'весна'.'<br>';;
}else if($month == 6 or $month == 7 or $month == 8){
    echo 'лето'.'<br>';;
}else if($month == 9 or $month == 10 or $month == 11){
    echo 'осень'.'<br>';;
}
?>
