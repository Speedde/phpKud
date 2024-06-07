<?php
$id = $_GET['id'];
$db = \myfrm\App::getApp()->getService('\myfrm\Db');

$post = $db->query("SELECT * FROM test.TEST WHERE id = :id LIMIT 1", [':id' => $id])->findOrReturn();
$recent_post = $db->query("SELECT * FROM test.TEST WHERE id = :id LIMIT 1", [':id' => $id])->findOrReturn();
$title = "MY post :: POST";

require VIEWS . "/post.tpl.php";