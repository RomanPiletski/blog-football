<?php
session_start();
if (!$_SESSION['login'] && !$_SESSION['password']) {
    header('Location: /');
}

if (!isset($_SESSION['login']) && !isset($_SESSION['password'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['e-mail'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    //$ava = $_FILES[]

    $_SESSION['login'] = $login;
    $_SESSION['password'] = $password;
    setcookie("firstname", $firstname, time()+36000);
    setcookie("lastname", $lastname, time()+36000);
    setcookie("login", $login, time()+36000);
    setcookie("password", $password, time()+36000);
    setcookie("email", $email, time()+36000);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles\style.css">
    <title>Личный кабинет</title>
</head>
<body>
    <div id="wrap">
        <h3>Вы ввели:</h3><br>
        <h4>Фамилия:</h4> <p><?php if (isset($_COOKIE['firstname'])){
                echo $_COOKIE['firstname'];
            } echo $firstname;?></p>
        <h4>Имя:</h4> <p><?php if(isset($_COOKIE['lastname'])) {
                echo $_COOKIE['lastname'];
            }   echo $lastname ?></p>
        <h4>E-mail:</h4> <p><?php if(isset($_COOKIE['email'])) {
                echo $_COOKIE['email'];
            }   echo $email?></p>
        <h4>Логин:</h4><p> <?php if(isset($_COOKIE['login'])){
                echo $_COOKIE['login'];
            }   echo $login ?></p>
        <h4>Пароль:</h4> <p><?php if(isset($_COOKIE['password'])){
                echo $_COOKIE['password'];
            } echo $password?></p><br>
    </div>
<a href="logout.php" >ВЫХОД</a>
</body>
</html>
