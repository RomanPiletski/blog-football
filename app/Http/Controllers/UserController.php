<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($name)
    {
        $users = [
            'Anton' => 'Minsk',
            'Egor' => 'Vitebsk',
            'Igor' => 'Gomel',
            'Alex' => 'Slutsk',
            'Ivan' => 'Bobruisk',
        ];
        return view('user.show',['city'=> $users[$name]]);
    }
}
