<?php
use Core\Request;
use Core\Router;

$query = require 'core/bootstrap.php';


$router = new Router();

require Router::load('routes.php')
    ->direct(Request::uri(), Request::method());
