<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
    <meta charset="utf-8" />
</head>
<body>

<?php
if ($_FILES)
{
    echo '<pre>' . var_export($_FILES, true) . '</pre>';


    $name = $_FILES["filename"]["name"];

    move_uploaded_file($_FILES["filename"]["tmp_name"], "test/".$name);


    echo "Файл загружен";
}
?>

<h2>Загрузка файла</h2>
<form method="post" enctype="multipart/form-data">
    Выберите файл: <input type="file" name="filename" /><br /><br />
    <input type="submit" value="Загрузить" />
</form>
</body>
</html>