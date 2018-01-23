<?php

class OrderPizza
{
    public $abstractFactory;
    public $pizza;

    public function __construct($abstractFactory, $type)
    {
        $this->abstractFactory = $abstractFactory;
        $this->setFactory($type);
    }

    private function setFactory($type)
    {
        $this->pizza = $this->abstractFactory->createPizza($type);
        $this->pizza->prepare();
        $this->pizza->bake();
        $this->pizza->cut();
        $this->pizza->box();
    }

    public function getPizza()
    {
        return $this->pizza;
    }
}
