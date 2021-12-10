<?php


namespace App\Controllers;

use App\Components\Session;
use App\Models\Auth;
use App\Models\User;

class AuthController
{
    /**
     * This is a function for registering a new user
     */
    public function register()
    {
        if (isset($_POST['submit'])) {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirm_password = $_POST['confirm_password'];
            $phone = $_POST['phone'];

            $errors = null;//создаю пустой массив, где будут хранится ошибки при вводе некорректных данных в поля регистрации
            if (!User::checkName($firstname)) $errors[] = "Имя введено некорректно";
            if (!User::checkName($lastname)) $errors[] = "Фамилия введена некорректно";
            if (!User::checkEmail($email)) $errors[] = "Электронная почта введена некорректно";
            if (!User::checkPassword($password)) $errors[] = "Пароль введен некорректно";
            if (!($password === $confirm_password)) $errors[] = "Введенные пароли не совпадают";
            if (!User::checkPhone($phone)) $errors[] = "Телефон введен некорректно";
        }

        if (empty($errors)) {
            if (User::create($firstname, $lastname, $email, $password, $phone))
            {
                $user = User::selectByEmail($email);//выбираю данные по email (поле unique)
                Session::set('email', $user['email']);
                header('Location: profile');//сразу перенаправляю в созданный профиль
            }
        }

        require VIEW_ROOT . "users/register.php";
    }




    /**
     * This is the function to log in a previously registered user
     */

    public function login()
    {
        Session::delete('email');//для того, если ранее авторизованный пользователь перейдет на страницу логин, то сессия автоматически удалится и входить в профиль придется заново

        $email = $_POST['email'];//принимаем данные из формы (email,пароль)
        $password = $_POST['password'];

        if ($user = User::login($email, $password))
        {
            Session::set('email', $user['email']);//создаем сессию авторизованному пользователю
            header('Location: profile');
        }
        else if (!empty($_POST)){//нужно чтобы если поля еще не заполнены ничем - не выводилась ошибка, что неправильный логин/пароль
            echo "Вы ввели неправильный логин или пароль!";
        }

        require VIEW_ROOT . "users/login.php";
    }




    /**
     * This is a function to log out of a previously authorized user
     */

    public function logout()
    {
        Auth::logout();
    }
}