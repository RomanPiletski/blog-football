<?php
echo '<br>'.'Вариант 1'.'<br>';

for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= 3; $j++) {
        echo $i;
}
}

echo '<br>'.'Вариант 2'.'<br>';

for ($i = 10; $i <= 30; $i+=10) {
    for ($j=1; $j<=3; $j++){
        echo $i+$j . " ";
    }
}

?>