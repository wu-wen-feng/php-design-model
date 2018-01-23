<?php
error_reporting(E_ALL);
define('BASEDIR', __DIR__);
include BASEDIR . '/Loader.php';
spl_autoload_register('Loader::autoload');

use Observer\WeatherData;
use Observer\CurrentConditions;

$weatherData = new WeatherData();
//var_dump($weatherData);
$currentCondition = new CurrentConditions();
//var_dump($currentCondition);
$weatherData->registerObserver($currentCondition);
//var_dump($weatherData);
$weatherData->setData(30, 60, 90);
$weatherData->removeObserver($currentCondition);
$weatherData->setData(50, 100, 150);