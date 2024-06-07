<?php

session_start();

require dirname(__DIR__) . '/vendor/autoload.php';
require dirname(__DIR__) . '/config/config.php';

require CORE . '/func.php';
require __DIR__ . '/bootstrap.php';

$router = new myfrm\Router();
require CONFIG . '/routes.php';

$router->matches();

