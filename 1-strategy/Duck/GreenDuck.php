<?php
/**
 * File: GreeDuck.php.
 * User: Wafer
 * Date: 2017/12/16
 * Time: 16:53
 */

namespace Duck;

use Fly\GoodFlyBehavior;
use Quack\GaQuackBehavior;

class GreenDuck extends Duck
{
    public function __construct()
    {
        $this->FlyBehavior = new GoodFlyBehavior();
        $this->QuackBehavior = new GaQuackBehavior();
    }

    public function display()
    {
        echo "**GreenHead**<br>";
    }
}