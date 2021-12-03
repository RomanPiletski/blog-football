<?php


session_start();

if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 1; // первый заход на страницу
} else {
    $_SESSION['counter']++;   // последующие заходы
}

echo $_SESSION['counter'];
