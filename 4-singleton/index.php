<?php
error_reporting(E_ALL);
define('BASEDIR', __DIR__);
include BASEDIR . '/Loader.php';
spl_autoload_register('Loader::autoload');

$objA = Singleton::getInstance();
$objB = Singleton::getInstance();

$objA->a = "1";
$objA->b = "2";

$objB->a = "3";
$objB->b = "4";

var_dump($objA);
var_dump($objB);