<?php
////////////////////////////////////////////////////////////////
echo 'Используя каждый из циклов (while, foreach, for) - напишите функционал по расчету факториала числа:'.'<br>';
echo 'цикл for:'.'<br>';
$var = range(1, 5);
print_r($var);
echo '<br>';
$result = 1;
for ($i=1; $i < count($var); $i++) { 
    $result *= $var[$i];
}
echo $result.'<br>';
////////////////////////////////////////////////////////////////
echo 'цикл foreach:'.'<br>';
$var = range(1, 5);
print_r($var);
echo '<br>';
$result = 1;
foreach ($var as $elem) {
    $result *= $elem;
}
echo $result.'<br>';
///////////////////////////////////////////////////////////////////
echo 'цикл while:'.'<br>';
$var = range(1, 5);
print_r($var);
echo '<br>';
$result = 1;
$count = 1;
while ($count < end($var)) {
    $result *= ($count+1);
    $count++;
}
echo $result.'<br>';
// done)


