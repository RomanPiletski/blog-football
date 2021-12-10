<?php

namespace App\Controllers;

use App\Models\User;

class ServerController
{

    public function accessDenied()
    {

        require VIEW_ROOT . "errors/401.php";
    }


}
