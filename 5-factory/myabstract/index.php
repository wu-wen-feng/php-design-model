<?php
define('BASEDIR', __DIR__);
include BASEDIR . '/Loader.php';
spl_autoload_register('Loader::autoload');

$factory = new Factory();
$obj = $factory->createObj(1);
var_dump($obj);