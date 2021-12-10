<?php

namespace App\Components;

use Exception;


class Migration
{
    protected $con;

    public function __construct()
    {
        $this->con = (new Db)->getConnection();
    }


    public function tableExist($name)
    {
        $results = $this->con->query("SHOW TABLES LIKE '$name'");
        return $results->rowCount() > 0 ? true : false;
    }

}
