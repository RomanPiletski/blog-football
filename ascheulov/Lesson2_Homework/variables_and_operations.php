<?php
mb_internal_encoding('UTF-8');
ini_set('display_errors', 'on');
error_reporting (E_ALL);

//Задача 1 количество секунд в сутках

$secondsInHour = 60*60;

$secondsInADay = $secondsInHour*24;

echo $secondsInADay.'<br>';

//Задача 2 количество секунд в 30 сутках

$secondsIn30Days = $secondsInADay*30;

echo '<br>'.$secondsIn30Days.'<br>';

//Задача 3 количество секунд в году

$secondsInAYear = $secondsInADay*365;

echo '<br>'.$secondsInAYear.'<br>';

//Задача 4 количество минут в сутках

$minutesInADay = 60*24;

echo '<br>'.$minutesInADay.'<br>';

//Задача 5 количество минут в году

$minutesInAYear = $minutesInADay*365;

echo '<br>'.$minutesInAYear.'<br>';

//Задача 6 количество количество байт в мегабайте

$bitesInMegaBite = 1024**2;

echo '<br>'.$bitesInMegaBite.'<br>';

//Задача 7 количество количество байт в гиагабайте

$bitesInGigaBite = 1024**3;

echo '<br>'.$bitesInGigaBite.'<br>';

//Задача 8 количество количество байт в 10 гиагабайтах

$bitesIn10GigaBite = $bitesInGigaBite*10;

echo '<br>'.$bitesIn10GigaBite.'<br>';

//Задача 9 количество количество байт в терабайте

$bitesInTeraBite = 1024**4;

echo '<br>'.$bitesInTeraBite.'<br>';

//Задача 10 количество количество килобайт в терабайте

$kiloBitesInTeraBite = 1024**3;

echo '<br>'.$kiloBitesInTeraBite.'<br>';

//Задача 11 площадь круга

$r = 6;

$s = M_PI*(6**2);

echo '<br>'.$s.'<br>';

//Задача 12 площадь квадрата

$a = 6;

$s2 = $a**2;

echo '<br>'.$s2.'<br>';

//Задача 13 площадь прямоугольника

$a1 = 5;

$b = 6;

$s3 = $a1*$b;

echo '<br>'.$s3.'<br>';

//Задача 14 периметр прямоугольника

$p = 2*($a1+$b);

echo '<br>'.$p.'<br>';

//Задача 15 цельсий в фаренгейт

$tc = 1;

$f = ($tc*9/5)+32;

echo '<br>'.$f.'<br>';

//Задача 16 фаренгейт в цельсий

$tf = 1;

$c = ($tf-32)*5/9;

echo '<br>'.$c.'<br>';
?>




