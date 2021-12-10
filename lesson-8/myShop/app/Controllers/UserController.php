<?php

namespace App\Controllers;

use App\Components\Session;
use App\Models\User;

class UserController
{

    public function list()
    {
        $usersList = User::all();
        require VIEW_ROOT . "users/list.php";
    }

}
