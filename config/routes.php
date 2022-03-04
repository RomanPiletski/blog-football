<?php

return [

    //'login' => 'auth/login',
    //'logout' => 'auth/logout',
    //'register' => 'auth/register',
    //'profile' => 'cabinet/profile',

    //Если в строке браузера введена строка соответствующая первой части (регулярному выражению) - то в компоненте Routes.php происходит замена по маркерам
    //Например ссылка users/1/store/2 - по итогу получаем - 'user/list/2/1'
    'users/([0-9]+)/store/([0-9]+)' => 'user/list/$1/$2', //где user - имя контроллера, list - имя action, $1/$2 - Набор передаваемых параметров


   // '' => 'home/index',
];