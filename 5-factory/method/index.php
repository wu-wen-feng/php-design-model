<?php
define('BASEDIR', __DIR__);
include BASEDIR . '/Loader.php';
spl_autoload_register('Loader::autoload');

$factory = new NYOrderPizza("cheese");
$pizza = $factory->getPizza();
$pizza->prepare();
$pizza->bake();
$pizza->cut();
$pizza->box();