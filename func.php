<?php

function dump($data) {
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}

function dd($data)
{
    data($data);
    die;
}