<?php

require dirname(__DIR__) . '/config/config.php';

require CORE . '/func.php';
require CORE . '/classes/Db.php';
$db_config = require CONFIG . '/db.php';
$db = ((Db::getInstance())->getConnect($db_config));
require CORE . '/router.php';

