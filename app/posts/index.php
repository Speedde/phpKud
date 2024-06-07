<?php
/** @var \myfrm\Db $db */
$db = \myfrm\App::getApp()->getService('\myfrm\Db');
$title = 'My Blog :: Home';
$recent_post = $db->query("SELECT * FROM test.TEST ORDER BY id DESC LIMIT 4")->findAll();


$current_page = (int) $_GET['page'];
$total = $db->query("SELECT COUNT(*) FROM test.TEST ORDER BY id")->getColumn();
$post = new \myfrm\Pagination(3, $total, $current_page);
$num_post = $post->pages;
$uri = $post->uri;
$posts= $post->getPosts($db);
$pagination = $post->renderHtml();







require_once VIEWS .'/index.tpl.php';

