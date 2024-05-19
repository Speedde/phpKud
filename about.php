<?php
require 'func.php';
$title = 'My Blog :: About';

$post = "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad amet aperiam autem commodi consectetur dolorem dolorum, eos esse fugit laborum mollitia natus nesciunt officiis porro rem repellat reprehenderit tempore?</p>";
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

require_once 'app/about.tpl.php';