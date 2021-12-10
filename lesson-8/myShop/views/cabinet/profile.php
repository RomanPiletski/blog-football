
<?php include ROOT . '/views/layouts/header.php'; ?>










<table border="1">
    <caption>Данные пользователя</caption>
    <tr>
        <th>Порядковый номер</th>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>Электронная почта</th>
        <th>Номер телефона</th>
    </tr>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['firstname'] ?></td>
            <td><?= $user['lastname'] ?></td>
            <td><?= $user['email'] ?></td>
            <td><?= $user['phone'] ?></td>
        </tr>
</table>
<p>
    <a href="logout">Выход</a>
</p>









<?php include ROOT . '/views/layouts/footer.php'; ?>
