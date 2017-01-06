<?php
use Core\Request;
use Core\Router;

require 'vendor/autoload.php';
require 'core/bootstrap.php';

$dotEnv = new \Dotenv\Dotenv(__DIR__);
if (file_exists(".env")) {
    $dotEnv->load();
}
require 'config/database.php';

Router::load('app/routes.php')
    ->direct(Request::uri(), Request::method());
