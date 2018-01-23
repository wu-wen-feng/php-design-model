<?php

class SimpleFactory
{
    public $obj;

    public function __construct($type)
    {
        $type = strtolower($type);
        if ($type == "1") {
            $product = new Product();
        } elseif ($type == "2") {
            //$product = new GreekPizza();
        } elseif ($type == "3") {
            //$product = new PepperPizza();
        }
        $this->obj = $product;
    }

    public function getObj()
    {
        return $this->obj;
    }

}