<?php


session_start();

if (!isset($_SESSION['counter']) && !isset($_SESSION['hh'])) {
    $_SESSION['counter'] = 1; // первый заход на страницу
    $_SESSION['hh'] = 10; // первый заход на страницу

} else {
    $_SESSION['counter']++;   // последующие заходы
    $_SESSION['hh']--;   // последующие заходы
}



echo $_SESSION['counter'] . "<br>";
echo $_SESSION['hh'] . "<br>";


