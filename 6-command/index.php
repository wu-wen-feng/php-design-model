<?php
define('BASEDIR', __DIR__);
include BASEDIR . '/Loader.php';
spl_autoload_register('Loader::autoload');

use device\Light;
use device\Stereo;

$light = new Light("Bedroom");
$stereo = new Stereo();
$ctl = new TraditionControl($light, $stereo);
$ctl->onButton(0);
$ctl->offButton(0);
$ctl->onButton(1);
$ctl->onButton(2);
$ctl->offButton(2);
$ctl->offButton(1);