<?php
error_reporting(E_ALL);
define('BASEDIR', __DIR__);
include BASEDIR . '/Loader.php';
spl_autoload_register('Loader::autoload');

use coffee\Decaf;
use coffee\Espresso;
use decorator\Chocolate;

$order = new  Decaf();
echo $order->cost();
echo "<br>";
echo $order->getDescription();
echo "<br>";

$order = new Espresso();
$order = new Chocolate($order);
echo $order->cost();
echo "<br>";
echo $order->getDescription();