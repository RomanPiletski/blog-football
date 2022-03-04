<table border="2">
<caption>Таблица пользователей</caption>
<tr>
    <th>Порядковый номер</th>
    <th>Имя</th>
    <th>Фамилия</th>
    <th>Электронная почта</th>
    <th>Номер телефона</th>
</tr>
<?php foreach ($usersList as $one_user): ?>
<tr>
    <td><?= $one_user['id'] ?></td>
    <td><?= $one_user['firstname'] ?></td>
    <td><?= $one_user['lastname'] ?></td>
    <td><?= $one_user['email'] ?></td>
    <td><?= $one_user['phone'] ?></td>
</tr>
<? endforeach ?>

</table>


