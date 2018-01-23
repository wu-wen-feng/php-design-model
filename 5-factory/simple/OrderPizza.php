<?php

class OrderPizza
{
    public $simpleFactory;
    public $pizzaObj = null;

    public function __construct($simpleFactory, $type)
    {
        $this->simpleFactory = $simpleFactory;
        $this->pizzaObj = $this->setFactory($type);
        //这里不能返回pizza对象，只能返回工厂对象
    }

    private function setFactory($type)
    {
        $pizzaObj = $this->simpleFactory->createPizza($type); //工厂生产对象
        if (!empty($pizzaObj)) {
            $pizzaObj->prepare();
            $pizzaObj->bake();
            $pizzaObj->cut();
            $pizzaObj->box();
        }
        return $pizzaObj;
    }

    public function getPizza()
    {
        return $this->pizzaObj;
    }
}