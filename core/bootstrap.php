<?php

use App\Core\App;
use Core\Database\Connection;
use Core\Database\QueryBuilder;

App::bind('config', require 'config.php');
App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

function view($name, array $data = [])
{
    extract($data);

    return require "app/views/{$name}.view.php";
}

function redirect($location)
{
    header("Location: /{$location}");
}