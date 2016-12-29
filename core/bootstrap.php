<?php
use core\Database\Connection;
use core\Database\QueryBuilder;

$app = [];

require 'core/Database/Connection.php';
require 'core/Database/QueryBuilder.php';
require 'core/Router.php';
require 'core/Request.php';
$app['config'] = require 'config.php';

$app['database'] = new QueryBuilder(Connection::make($app['config']['database']));