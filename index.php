<?php
require 'func.php';
$title = 'My Blog :: Home';
$posts = [
        1 => [
                'title' => "Title of post 1",
                'desc' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
                'slug' => 'title-1'
        ],
        2 => [
            'title' => "Title of post 2",
            'desc' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
            'slug' => 'title-2'
        ],
        3 => [
            'title' => "Title of post 3",
            'desc' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
            'slug' => 'title-3'
        ],
        4 => [
            'title' => "Title of post 4",
            'desc' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
            'slug' => 'title-4'
        ],
        5 => [
            'title' => "Title of post 5",
            'desc' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
            'slug' => 'title-5'
        ]
];
$recent_post = [
        1 => [
                'title' => 'An item',
                'slug' => lcfirst(str_replace(' ', '-', 'An item')),
        ],
        2 => [
            'title' => 'An second item',
            'slug' => lcfirst(str_replace(' ', '-', 'An second item')),
        ],
        3 => [
            'title' => 'An third item',
            'slug' => lcfirst(str_replace(' ', '-', 'An third item')),
        ],
        4 => [
            'title' => 'An fourth item',
            'slug' => lcfirst(str_replace(' ', '-', 'An fourth item')),
        ],
        5 => [
            'title' => 'An fifth item',
            'slug' => lcfirst(str_replace(' ', '-', 'An fifth item')),
        ]

];

require_once 'app/index.tpl.php';

