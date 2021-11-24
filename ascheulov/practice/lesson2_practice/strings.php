<?php
$str  = 'hello';

echo "$str <br>";

$a = 'abc';

$b = 'def';

echo $a . $b . "<br>";

$str2 = 'world';

echo $str .' '. $str2 ."<br>";

$str3 = 'unknown string';

echo $str3 .' -'. strlen($str3) .' символов'.  "<br>";

$str4 = 'какая-нибудь строка';

echo $str4 .' -'. mb_strlen($str4). ' символов';

?>

