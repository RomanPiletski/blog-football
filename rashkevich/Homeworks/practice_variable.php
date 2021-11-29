<?php
// task 1,2,3,4,5
$sec = 1;
$secInmin = $sec * 60;
$secInHour = $secInmin * 60;

echo 'количество секунд в сутках — '.($secInDay = $secInHour*24).'<br>';
echo 'количество секунд в 30 сутках — '.($secInMonth = $secInDay*30).'<br>';
echo 'количество секунд в году — '.($secInYear = $secInMonth*12).'<br>';
echo 'количество минут в сутках — '.($minInDay = $secInDay/$secInmin).'<br>';
echo 'количество минут в году — '.($minInYear = $secInDay/60*365).'<br>'.'<br>';

// task 6,7,8,9,10
$byte = 1 ;
$bytesInKB = 1024 * $byte;

echo 'количество байт в мегабайте — '.($bytesInMB = $bytesInKB * 1024).'<br>';
echo 'количество байт в гигобайте — '.($bytesInGB = $bytesInMB*1024).'<br>';
echo 'количество байт в 10 гигобайтaх — '.($bytesInGB*10).'<br>';
echo 'количество байт в терабайте — '.($bytesInTB=$bytesInGB*1024).'<br>';
echo 'количество килобайт в терабайте — '.($kbytesInTB= $bytesInTB/$bytesInKB).'<br>'.'<br>';

// task 11
$r = 5;
const PI = 3.14;
$s = PI*$r**2;
echo 'площадь  круга с радиусом '.$r.' = '.$s.'<br>';

//task 12
$a = 5;
$s =  $a*$a;
echo 'площадь  квадрата со стороной '.$a.' = '.$s.'<br>';

// task 13
$a = 3;
$b = 5;
$s = $a * $b;
echo 'площадь прямоугольника со сторонами '.$a.' и '.$b.' = '.$s.'<br>';

//task 14
$a = 5;
$b = 7;
$p = ($a + $b) * 2; 
echo 'периметр прямоугольника со сторонами '.$a.' и '.$b.' = '.$p.'<br>';

// task 15
$tc = 20;
$f = $tc * 1.8 + 32;
echo 'температура '.$tc.' градусов по Цельсию = '.$f.' градусов по Фаренгейту'.'<br>';

//task 16
$tf = 85;
$f = ($tf-32)/1.8;
echo 'температура '.$tf.' градусов по Фаренгейту = '.round($f, 2).' градусов по Цельсию'.'<br>';
