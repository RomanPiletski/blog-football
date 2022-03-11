<?php

namespace App\Models;

use App\Components\Db;
use PDO;


class User
{

    public static function all()
    {
        $results = Db::getConnection()->query("SELECT id, firstname, lastname, email FROM users");
        return $results->fetchAll(PDO::FETCH_ASSOC);
    }


    public static function checkEmail($email)
    {
        return preg_match('/.+@.+\..+/', $email);
    }

    /**
     * Метод по созданию пользователя в системе
     * @param $firstname
     * @param $lastname
     * @param $email
     * @param $password
     * @param $phone
     * @return mixed
     */
    public static function create($firstname, $lastname, $email, $password, $phone = null)
    {
        $connect = Db::getConnection();

        $sql = "INSERT INTO users (firstname, lastname, email, password) VALUES (:firstname, :lastname, :email, :password)";

        $result = $connect->prepare($sql);

        $result->bindParam(':firstname', $firstname, PDO::PARAM_STR);
        $result->bindParam(':lastname', $lastname, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->execute();

        return $result->fetch(PDO::FETCH_OBJ);
    }



    public static function update($firstname, $lastname, $email, $password, $phone)
    {
        $connect = Db::getConnection();

        $user = User::selectByEmail($email);

        $sql = 'UPDATE user SET firstname = :firstname, lastname = :lastname, email = :email, password = :password, phone = :phone WHERE id = :user_id;';
        $result = $connect->prepare($sql);
        $result->bindParam(':firstname', $firstname, PDO::PARAM_STR);
        $result->bindParam(':lastname', $lastname, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->bindParam(':phone', $phone, PDO::PARAM_STR);
        $result->bindParam(':user_id', $user['id'], PDO::PARAM_INT);

        return $result->execute();
    }

    /**
     * This is a function for displaying a user by email
     * @param $email
     * @return mixed
     */
    public static function selectByEmail($email)
    {
        $connect = Db::getConnection();

        $sql = 'SELECT * FROM user WHERE email = :email';
        $result = $connect->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();
        return $result->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * This is a function for displaying a user by email
     * @param $email
     * @return mixed
     */
    public static function findById($id)
    {
        $connect = Db::getConnection();

        $sql = 'SELECT * FROM users WHERE id = :id';
        $result = $connect->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();
        return $result->fetch(PDO::FETCH_ASSOC);
    }

    /**
     *
     * @param string $firstname
     * @param string $lastname
     * @param string $password
     * @return mixed
     */
    public static function login($email, $password)
    {
        $connect = Db::getConnection();
        $sql = "SELECT * FROM user WHERE email = :email AND password = :password";
        $result = $connect->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->execute();
        return $result->fetch(PDO::FETCH_ASSOC);
    }


}
