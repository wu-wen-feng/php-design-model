<?php

class Loader
{
    static function autoload($class)
    {
        $classFile = BASEDIR . '/' . str_replace('\\', '/', $class) . '.php';
        require $classFile;
    }
}