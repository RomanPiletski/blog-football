<?php
session_start();

$firstname = $_POST['firstname'];
$lastname =  $_POST['lastname'];
$email= $_POST['e-mail'];
$login = $_POST['login'];
$password= $_POST['password'];
//$ava = $_FILES[]
if (!empty($firstname) && !empty($lastname) && !empty($email) && !empty($login) && !empty($password)){
    header('Location: account.php');
}