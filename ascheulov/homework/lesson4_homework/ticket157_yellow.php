<?php

$fact = 1;
for ($i = 1; $i <=3 ; $i++) {
    $fact *= $i;
};
echo 'Факториал числа 3 через цикл For - '.$fact.'<br>';

$fact2 = 1;
$arr = [1,2,3];
foreach ($arr as $value)
    $fact2 *= $value;
echo '<br>'.'Факториал числа 3 через цикл Foreach - '.$fact2.'<br>';

$num = 3;
$fact3 = 1;
$i =1;
while ($i <= $num){
    $fact3 *= $i;
    $i++;

}
echo '<br>'.'Факториал числа 3 через цикл While - '.$fact3.'<br>';
?>