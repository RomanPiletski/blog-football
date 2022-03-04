<?php

namespace App\Controllers;

use App\Components\Session;
use App\Models\User;

class UsersController
{

    public function all()
    {
        $usersList = User::all();

        require VIEW_ROOT . "users/list.php";
    }

    public function show($params)
    {
        $user = User::findById($params[0]);

        var_dump($user);die;
    }

//    public function list($userId, $storeId)
//    {
//        $usersList = User::all();
//        require VIEW_ROOT . "users/list.php";
//    }
}
