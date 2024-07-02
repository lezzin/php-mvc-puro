<?php

$routes = [
    '/' => 'HomeController@index',

    '/user/create' => 'UserController@create',
    '/user/get/{id}' => 'UserController@get',
    '/user/delete/{id}' => 'UserController@delete',
];
