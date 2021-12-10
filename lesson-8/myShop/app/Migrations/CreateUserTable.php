<?php

namespace App\Migrations;

use App\Components\Migration;

use PDO;

class CreateUserTable extends Migration
{

    public static function up()
    {

        $instance = new self();

        // sql to create table
        $sql = "CREATE TABLE user (" .
            "id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY," .
            "firstname VARCHAR(30) NOT NULL," .
            "lastname VARCHAR(30) NOT NULL," .
            "email VARCHAR(50) NOT NULL UNIQUE," .
            "password VARCHAR(10) NOT NULL" .
            ")";

        if (!$instance->tableExist('user')) {

            if ($instance->con->query($sql)) {
                echo "Table user created successfully" . "<br>";
            } else {
                //Если запрос вернул false - Значит появилась ошибка, используя метод errorInfo который возращает нам массив, берем 3 ячейку массива где содержиться сообщение об ошибки и выводим ее
                echo $instance->con->errorInfo()[2] . "<br>";
            }

        } else {
            echo "Table user already exist" . "\n";
        }

   }



}
