<?php

$str = 'abc';
echo '<br>'.  $str;
$str = "abc";
echo '<br>'.  $str . '<br>';
$str = 'abc' . 'def'; // складываем две строки
echo $str . '<br>';

$str1 = 'abc';
$str2 = 'def';
echo $str1 . $str2;

$str1 = 'abc';
$str2 = 'def';
echo '<br>'.$str1 . '!!!' . $str2; // выведет 'abc!!!def'

$str = "HELLO";
echo '<br>'.$str.'<br>';

$str1 = 'abc';
$str2 = 'def' ;
echo $str1 . $str2 .'<br>';

$str1 = 'hello';
$str2 = 'world';
echo $str1 . ' ' . $str2 . '<br>';

$name = "Kate K.";
echo strlen($name).'<br>';

$name = 'Катя';
echo strlen($name).'<br>';

?>
