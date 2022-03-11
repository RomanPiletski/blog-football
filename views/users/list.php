<form method="post">
    <input type="text" name="firstname" placeholder="firstname">
    <input type="text" name="lastname" placeholder="lastname">
    <input type="text" name="email" placeholder="email">
    <input type="password" name="password" placeholder="password">
    <input type="submit" value="Save">
</form>


<table border="2">
<caption>Таблица пользователей</caption>
<tr>
    <th>Порядковый номер</th>
    <th>Имя</th>
    <th>Фамилия</th>
    <th>Электронная почта</th>
</tr>
<?php foreach ($usersList as $one_user): ?>
<tr>
    <td><?= $one_user['id'] ?></td>
    <td><?= $one_user['firstname'] ?></td>
    <td><?= $one_user['lastname'] ?></td>
    <td><?= $one_user['email'] ?></td>

</tr>
<? endforeach ?>




</table>


