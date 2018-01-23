<?php
namespace Duck;


use Fly\GoodFlyBehavior;
use Fly\BadFlyBehavior;
use Quack\GaQuackBehavior;

class Duck
{
    public $FlyBehavior;
    public $QuackBehavior;

    public function __construct()
    {
        $this->FlyBehavior = new BadFlyBehavior();
        $this->QuackBehavior = new GaQuackBehavior();
    }

    public function display()
    {
        echo "Duck<br>";
    }

    public function fly()
    {
        $this->FlyBehavior->fly();
    }

    public function quack()
    {
        $this->QuackBehavior->quack();
    }

    public function swim()
    {
        echo "~~im swim~~<br>";
    }

    public function setFlyBehavior($fb)
    {
        $this->FlyBehavior = $fb;
    }

    public function setQuackBehavior($qb)
    {
        $this->QuackBehavior = $qb;
    }
}