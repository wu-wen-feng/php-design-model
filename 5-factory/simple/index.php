<?php
define('BASEDIR', __DIR__);
include BASEDIR . '/Loader.php';
spl_autoload_register('Loader::autoload');

$orderFactory = new OrderPizza(new SimpleFactory(), "Cheese");
$pizza = $orderFactory->getPizza();
var_dump($pizza);