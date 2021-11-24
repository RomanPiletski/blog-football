<?php
// task 1
echo 'task 1'.'<br>';
$var = rand(0, 59);
if ($var < 15) {
    echo "число ".$var." попадает в первую четверть".'<br>';
} else if($var >= 15 && $var < 30){
    echo "число ".$var." попадает во вторую четверть".'<br>';
} else if( $var >= 30 && $var < 45){
    echo "число ".$var." попадает в третью четверть".'<br>';
} else if ($var >= 45 && $var <60) {
    echo "число ".$var." попадает в четвертую четверть".'<br>';
}

// task 2
echo '<br>'.'task 2'.'<br>';
echo 'Выполнится "-"'.'<br>';

// task 3
echo '<br>'.'task 3'.'<br>';
echo 'Выполнится "+"'.'<br>';

// task 4
echo '<br>'.'task 4'.'<br>';
$month = rand(1, 12);

switch (true) {
    case (($month>=1 && $month <=2) || $month === 12):
        echo "месяц — ".$month." попадает на зиму)".'<br>';
        break;
    case ($month>=3 && $month <=5):
        echo "месяц — ".$month." попадает на весну)".'<br>';
        break;
    case ($month>=6 && $month <=8):
        echo "месяц — ".$month." попадает на лето)".'<br>';
        break;
    case ($month>=9 && $month <=11):
        echo "месяц — ".$month." попадает на осень)".'<br>';
        break;
}