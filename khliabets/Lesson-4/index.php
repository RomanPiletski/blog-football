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
    <p><b>Введите ваши данные</b></p>

    <?php

    if (array_key_exists('send',$_POST))
    {
        foreach ($_POST as $key=>$el)
            if ( empty($el)  ){
                echo "<p>Введите данные $key</p>"  ;
            }
    }
    ?>

    <p><input type="input" name="firstname">Имя<Br>
    <p><input type="input" name="lastname">Фамилия<Br>
    <p><input name="send" type="submit"></p>
</form>

</body>
</html>

