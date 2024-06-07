<?php


/**
 * @var \myfrm\Router $router;
 */

$router->get('phpStudy', 'posts/index.php');


$router->get('phpStudy/post/create', 'posts/post-create.php');
$router->post('phpStudy/post/create', 'posts/post-create.php');


$router->get('phpStudy/about', 'posts/about.php');
$router->get('phpStudy/post', 'posts/post.php');
//$routes = [
//        "phpStudy" => 'index.php',
//        "phpStudy/about" => 'about.php',
//        "phpStudy/post" => 'post.php',
//        "phpStudy/post/create" => "post-create.php",
//];