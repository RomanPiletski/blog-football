<?php if (!is_null($errors)): ?>
    <ul>
        <?php foreach ($errors as $error): ?>
            <li><?= $error ?></li>
        <? endforeach ?>
    </ul>
<?php endif ?>



<p><b>Форма регистрации на сайте</b></p>
<form action='' method="POST">
    <p>
        Введите имя:
        <input type="text" name="firstname" placeholder="Ваше имя">
    </p>
    <p>
        Введите фамилию:
        <input type="text" name="lastname" placeholder="Ваша фамилия">
    </p>
    <p>
        Введите адрес электронной почты:
        <input type="text" name="email" placeholder="Ваша электронная почта">
    </p>
        <p>
        Введите телефон:
        <input type="text" name="phone">
    </p>
    <p>
        Введите пароль:
        <input type="password" name="password">
    </p>
    <p>
        Подтверждение пароля:
        <input type="password" name="confirm_password">
    </p>
    <input type="submit" name="submit">
    <p>
        У Вас уже есть аккаунт? <a href="login"> Авторизироваться</a>
    </p>
    <br>
</form>

