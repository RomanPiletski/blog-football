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
    <?php
if(array_key_exists("firstname", $_POST) && !empty($_POST["firstname"]))
    echo $_POST["firstname"];
else
    echo "Ничего не найдено";
    ?>

    <p><input type="input" name="firstname">Имя<Br>

    <p><input type="submit" name="send"></p>
</form>

</body>
</html>