<?php

namespace App\Controllers;



/**
 * Class CabinetController
 * @package App\Controllers
 */
class HomeController
{

    public function __construct()
    {
        //Middlewares
        //UserMiddleware::isAuthorized('email');
    }


    /**
     * This is a function for working with a profile
     */
    public function index()
    {

        echo "Главная страница";
    }


}
