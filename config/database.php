<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();
$capsule->addConnection([
    'driver'   => getenv('driver'),
    'database' => getenv('database'),
    'username' => getenv('username'),
    'password' => getenv('password'),
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();