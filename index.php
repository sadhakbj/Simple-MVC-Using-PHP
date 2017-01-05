<?php
use Core\Request;
use Core\Router;

require 'vendor/autoload.php';
require 'core/bootstrap.php';


Router::load('app/routes.php')
    ->direct(Request::uri(), Request::method());
