<?php
define('BASEDIR', __DIR__);
include BASEDIR . '/Loader.php';
spl_autoload_register('Loader::autoload');

$factory = new SubFactory(1);
$pizza = $factory->getObj();
$pizza->prepare();
$pizza->step1();
$pizza->step2();
$pizza->finish();