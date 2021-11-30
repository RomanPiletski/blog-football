<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <p><b>Введите имя</b></p>
    <?php
        if (empty($_POST["firstname"])):?>
        <p>Ничего не введено<p>
    <?php endif?>
    <p><input type="input" name="firstname" placeholder="Укажите Имя"><Br>
    <p><input type="submit" value="send"></p>
</form>
<form action="send.php" method="post">
    <input type="text" name="fio" placeholder="Укажите ФИО" required>
    <input type="text" name="email" placeholder="Укажите e-mail" required>
    <input type="submit" value="Отправить">
</form>
</body>
</html>
<?php
//var_dump($_POST);
