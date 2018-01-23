<?php

class Singleton
{
    static private $singleton;
    public $a;
    public $b;

    private function __construct()
    {

    }

    public static function getInstance()
    {
        if (empty(self::$singleton)) {
            self::$singleton = new Singleton();
        }
        return self::$singleton;
    }


}