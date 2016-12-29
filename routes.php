<?php

$router->get('', 'controllers/index.php');
$router->get('about' , 'controllers/about.php');
$router->post('names' , 'controllers/add-name.php');