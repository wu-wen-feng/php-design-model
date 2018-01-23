<?php
error_reporting(E_ALL);
define('BASEDIR', __DIR__);
include BASEDIR . '/Loader.php';
spl_autoload_register('Loader::autoload');
use Duck\Duck;
use Duck\GreenDuck;
use Fly\BadFlyBehavior;
use Fly\GoodFlyBehavior;

$duck = new Duck();
$duck->Display();
$duck->Fly();
$duck->Quack();

$duck->setFlyBehavior(new GoodFlyBehavior());
$duck->Fly();