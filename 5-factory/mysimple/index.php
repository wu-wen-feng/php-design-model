<?php
define('BASEDIR', __DIR__);
include BASEDIR . '/Loader.php';
spl_autoload_register('Loader::autoload');

$factory = new SimpleFactory("1");
$pizza = $factory->getObj();
var_dump($pizza);