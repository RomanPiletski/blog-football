<?php

$test = null;
if ($test === null) {
   echo '+' . "<br>";
} else {
     echo '-' . "<br>" ;
 }



$test = null;
 if (isset($test)) {
     echo '+' . "<br>" ;
 } else {
     echo '-' . "<br>";
}

$test = null;
if (isset($test)) {
     echo $test . "<br>";
 } else {
    echo 'variable does not exist' . "<br>";
 }


$test = 0;
echo 'test=0 ';
if (isset($test)) {
     echo '+' . "<br>";
 } else {
     echo '-' . "<br>";
}


$test = null;
if (!isset($test)) {
     echo '+' . "<br>";
 } else {
     echo '-' . "<br>";
}

$test = null;
if (isset($test)) {
    echo '+' . "<br>";
 } else {
    echo '-' . "<br>";
}

if (!isset($test2)) {
    echo '+' . "<br>";
 } else {
     echo '-' . "<br>";
 }

$test = '';
 if (isset($test)) {
     echo '+' . "<br>";
 } else {
     echo '-' . "<br>";
 }

if (!isset($test1)) {
     echo '+' . "<br>";
 } else {
     echo '-' . "<br>";
}


$test = false;
 if (isset($test)) {
    echo '+' . "<br>";
 } else {
    echo '-' . "<br>";
 }


$arr = [1, 2, 3, 4, 5];
//if (isset($arr[])) {
    // echo '+';
 //} else {
 //   echo '-';
 //}



?>
