<?php

abstract class OrderPizza
{
    public $pizza = null;

    public function __construct($type)
    {
        if (!empty($type)) {
            $pizza = $this->createPizza($type);
            $pizza->prepare();
            $pizza->bake();
            $pizza->cut();
            $pizza->box();
            $this->pizza = $pizza;
        }
    }

    abstract function createPizza($type);

    public function getPizza()
    {
        return $this->pizza;
    }

}