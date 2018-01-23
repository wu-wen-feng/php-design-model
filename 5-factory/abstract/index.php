<?php
define('BASEDIR', __DIR__);
include BASEDIR . '/Loader.php';
spl_autoload_register('Loader::autoload');

$factory = new OrderPizza(new NYFactory(), "cheese");
$pizza = $factory->getPizza();
var_dump($pizza);