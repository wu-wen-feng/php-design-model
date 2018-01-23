<?php

class Factory implements AbstractFactory
{
    public $obj;

    public function createObj($type)
    {
        $type = strtolower($type);
        if ($type == "1") {
            $product = new Product();
        } else if ($type == "2") {
            //$product = new Product();
        }
        $this->obj = $product;
        return $product;
    }
}