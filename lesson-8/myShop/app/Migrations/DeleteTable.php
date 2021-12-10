<?php


namespace App\Migrations;


use App\Components\Migration;

class DeleteTable extends Migration
{
    public static function deleteAllTables()
    {
        $paramsPath =  './config/db_params.php';
        $params = include($paramsPath);

        $instance = new self();
        $instance->con->query("DROP DATABASE {$params['dbname']}; CREATE DATABASE {$params['dbname']}; USE {$params['dbname']};");
    }

    public static function deleteTable($name)
    {
        $instance = new self();
        $instance->con->query("DROP TABLE $name");

        if ($instance->tableExist($name))
        {
            echo "Table still exists" . "<br>";
        }
        else
        {
            echo "Table deleted successfully" . "<br>";
        }
    }
}