<?php

abstract class Factory
{
    public $obj = null;

    public function __construct($type)
    {
        if (!empty($type)) {
            $obj = $this->createObj($type);
            $obj->prepare();
            $obj->step1();
            $obj->step2();
            $obj->finish();
            $this->obj = $obj;
        }
    }

    abstract function createObj($type);

    public function getObj()
    {
        return $this->obj;
    }

}