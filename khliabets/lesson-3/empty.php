<?php

$test = '';
if (empty($test)) {
    echo '+' . "<br>";
 } else {
     echo '-' . "<br>";
}


$test = '';
if (!empty($test)) {
     echo '+' . "<br>";
 } else {
   echo '-' . "<br>";
}


$test = 0;
 if (empty($test)) {
     echo '+' . "<br>";
 } else {
     echo '-';
}


$test = -1;

if (empty($test)) {
   echo '+';
} else {
    echo '-' . "<br>";
 }

$test = '';
if (!empty($test)) {
     echo '+';
 } else {
 echo '-' . "<br>";
 }

$test = -1;

 if (empty($test)) {
   echo '+';
} else {
    echo '-'. "<br>";
 }

$test = '0';

 if (!empty($test)) {
    echo '+';
} else {
    echo '-'. "<br>";
}


$test = -1;

 if (!empty($test)) {
   echo '+' . "<br>";
} else {
    echo '-';
 }

$test = null;

if (empty($test)) {
    echo '+'. "<br>";
} else {
    echo '-';
}


$test = false;

 if (!empty($test)) {
    echo '+';
} else {
    echo '-' . "<br>";
 }

$test = true;
if (!empty($test)) {
     echo '+'. "<br>";
} else {
    echo '-';
 }

$test = 'false'; //это же строка!!!
if (!empty($test)) {
     echo '+' . "<br>";
} else {
    echo '-';
}

$test = 'null';

if (!empty($test)) {
     echo '+'. "<br>";
} else {
    echo '-';
 }

$test = 0;
 if (isset($test)) {
    echo '+' . "<br>";
 } else {
   echo '-';
}

$test = null;
 if (isset($test)) {
    echo '+';
} else {
     echo '-'. "<br>";
}

$test = false;

if (isset($test)) {
    echo '+'. "<br>";
 } else {
     echo '-';
 }


?>
