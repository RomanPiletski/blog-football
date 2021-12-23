<?php session_start();
if ($_SESSION['login'] && $_SESSION['password']) {
    header('Location: account.php');
}
;?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles\style.css">
    <title>Регистрация</title>
</head>
<body>
    <div id="container">
        <div id='registration'>
            <h2>Регистрация пользователя</h2>
            <form action="account.php" method="post">
                <h4>Введите Вашу Фамилию</h4>
                <input type="text" name="firstname" required>
                <h4>Введите Ваше Имя</h4>
                <input type="text" name="lastname" required>
                <h4>Введите Ваш E-mail</h4>
                <input type="text" name="e-mail" required>
                <h4>Создайте логин</h4>
                <input type="text" name="login" required><br>
                <h4>Создайте пароль</h4>
                <input type="password" name="password" required><br>
                <h4>Загрузите Ваше фото:</h4>
<!--                <input type="file" name="filename" size="10"><br /><br />-->
<!--                <input type="submit" value="Загрузить" /><br /><br />-->
                <input type="submit" value="зарегестрироваться">
            </form>
                <a href="index.php">Вернуться на страницу Авторизации</a>!
        </div>
    </div>
</body>
</html>
