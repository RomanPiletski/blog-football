<?php


namespace App\Migrations;

use App\Components\Migration;

class UpdateUserTable extends Migration
{
    public static function addColumn()
    {
        $instance = new self();

        $sql = "ALTER TABLE user ADD phone varchar(13);";
        $result = $instance->con->query($sql);

        //проверка выполнения
        if ($result)
            {
            echo "Column created successfully" . "<br>";
            }
        else
            {
            echo "Column 'phone' has already been added"  . "<br>";
            }
    }

}