<?php

namespace App\Controllers;

use App\Components\Session;
use App\Models\User;

class UsersController
{

//    public function all()
//    {
//        $usersList = User::all();
//
//        require VIEW_ROOT . "users/list.php";
//    }

//    public function show($params)
//    {
//        $user = User::findById($params[0]);
//
//        var_dump($user);die;
//    }


    public function listAndSave()
    {
        $usersList = User::all();


        switch ($_SERVER['REQUEST_METHOD']) {
            case "POST" :
                {

                    User::create($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['password']);

                    header("location:" . SITE_URL . '/users');

                }
                break;

            case "GET" :
                {
                    require VIEW_ROOT . "users/list.php";
                }
                break;
        }

    }

}
