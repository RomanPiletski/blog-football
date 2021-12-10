<?php


function redirectError($code)
{
    switch ($code) {
        case 401:
            {
                header("Location: login", true, 401);
            }
            break;
        case 301:
            {
                header("Location: login", true, $code);
            }
            break;
    }
}



//function redirect($url, $code)
//{
//   //TODO :: доделать локигу
//
//}