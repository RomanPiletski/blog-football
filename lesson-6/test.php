<!DOCTYPE html>
<html>
<head>
    <title>METANIT.COM</title>
    <meta charset="utf-8" />
</head>
<body>
<h3>Форма ввода данных</h3>
<h3>Форма ввода данных</h3>
<form method="POST">
    <p>Выберите курсы: <br>
        <select name="courses[]">
            <option value="ASP.NET">ASP.NET</option>
            <option value="PHP">PHP</option>
            <option value="Ruby">RUBY</option>
            <option value="Python">Python</option>
            <option value="Java">Java</option>
        </select></p>
    <input type="submit" value="Отправить">
</form>
</body>
</html>

<?php

var_dump($_POST);die;

$name = "не определено";
$age = "не определен";
if(isset($_POST["name"])){

    $name = $_POST["name"];
}
if(isset($_POST["age"])){
    $age = $_POST["age"];
}

echo '<pre>' . var_export($name, true) . '</pre>';
//echo "Имя: $name <br> Возраст: $age";
?>