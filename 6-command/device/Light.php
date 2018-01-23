<?php

/**
 * File: Light.php.
 * User: Wafer
 * Date: 2018/1/3
 * Time: 20:07
 */
namespace device;

class Light
{
    public $location;

    public function __construct($location)
    {
        $this->location = $location;
    }

    public function on()
    {
        echo $this->location . "On<br>";
    }

    public function off()
    {
        echo $this->location . "Off<br>";
    }
}