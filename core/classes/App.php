<?php

namespace myfrm;

class App
{
    private static $container;

    public static function setApp($contain)
    {
        static::$container = $contain;
    }
    public static function getApp()
    {
        return static::$container;
    }
}