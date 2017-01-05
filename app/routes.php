<?php

$router->get('', 'PagesController@index');
$router->get('about', 'PagesController@about');
$router->get('users', 'UserController@index');
$router->post('users', 'UserController@store');