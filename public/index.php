<?php

define('ROOT', dirname(__DIR__));
define('PUBLIC', ROOT . '/public');
define('CORE', ROOT . '/core');
define('APP', ROOT . '/app');
define('CONTROLLERS', APP . '/controller');
define('VIEWS', APP . '/views');

require CORE . '/func.php';

require_once CONTROLLERS . '/index.php';
