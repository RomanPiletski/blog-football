<?php
// task 1
$text = 'этот текст станет курсивом';
echo  '<i>'.$text.'</i><br>';

// task 2
for($i=1; $i<=9; $i++){
    echo $i.'<br>';
}

// task 3
$pathImg = 'pics/pix.jpg';
echo '<img src="'.$pathImg.'"><br>';

// task 4
$text = 'введите текст';
echo '<input placeholder = "'.$text.'"><br>';

// task 5
$text = 'введите некоторый текст, который может состоять из нескольких строк';
echo '<textarea placeholder = "'.$text.'">';