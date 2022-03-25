<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index($name)
    {
        $cities = [
            'masha' => 'Minsk',
            'sasha' => 'Moscow',
            'oleg' => 'Kiev'
        ];


        return view("test.index",
            [
                "city" => $cities['sasha']
            ]);


//        if (array_key_exists($name, $cities)) {
//
//            return view("test.index",
//                [
//                    "city" => $cities[$name],
//                    "test" => "ЧТо-то",
//                    "test2" => "ЧТо-то2",
//                ]);
//
//        } else {
//
//            echo "Error 404";
//        }
    }
}
