<?php
$title = 'My Blog :: Home';
$posts = $db->query("SELECT * FROM test.TEST")->findAll();
$recent_post = $db->query("SELECT * FROM test.TEST")->findAll();
//$recent_post = [
//        1 => [
//                'title' => 'An item',
//                'slug' => lcfirst(str_replace(' ', '-', 'An item')),
//        ],
//        2 => [
//            'title' => 'An second item',
//            'slug' => lcfirst(str_replace(' ', '-', 'An second item')),
//        ],
//        3 => [
//            'title' => 'An third item',
//            'slug' => lcfirst(str_replace(' ', '-', 'An third item')),
//        ],
//        4 => [
//            'title' => 'An fourth item',
//            'slug' => lcfirst(str_replace(' ', '-', 'An fourth item')),
//        ],
//        5 => [
//            'title' => 'An fifth item',
//            'slug' => lcfirst(str_replace(' ', '-', 'An fifth item')),
//        ]
//
//];

require_once VIEWS .'/index.tpl.php';

