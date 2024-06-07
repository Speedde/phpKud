<?php

$container = new \myfrm\ServiceContainer();
$container->setService('\myfrm\Db', function()
{
    $db_config = require CONFIG . '/db.php';
    return ((\myfrm\Db::getInstance())->getConnect($db_config));
});
\myfrm\App::setApp($container);
