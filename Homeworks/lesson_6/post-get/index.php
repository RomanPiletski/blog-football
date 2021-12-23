<?php session_start();
if ($_SESSION['login'] && $_SESSION['password']) {
    header('Location: account.php');
}
echo '<pre>';
var_dump($_COOKIE);
echo '</pre>';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles\style.css">
    <title>Авторизация</title>
</head>
<body>
    <div id="container">
<!--        <h1>Добро пожаловать!</h1>-->
        <div id='authorization'>
            <h2>Авторизация пользователя</h2>
            <form  method="post" >
                <h3>Введите логин</h3>
                    <input type="text" name="login" id="login" required><br>
            <h3>Введите пароль</h3>
                    <input type="password" name="password" id="password" required><br>
                    <input type="submit" value="отправить">
            </form>
            <p>
                Впервые у нас? - <a href="registration.php">зарегистрируйтесь</a>!
            </p>
    </div>
</div>
</body>
</html>
<?php
$log = $_POST['login'];
$pass = $_POST['password'];
if (($log==$_COOKIE['login']) && ($pass==$_COOKIE['password'])){
//    header('Location: account.php');
}
