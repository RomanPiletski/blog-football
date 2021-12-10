<?php

$fd = fopen("file.txt", 'a') or die("не удалось открыть файл");

//Запсиь в файл
//fwrite($fd, "hello", 3);
//fputs($fd, "second");

echo fgets($fd, 2);


fclose($fd);