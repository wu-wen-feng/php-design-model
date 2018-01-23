<?php
/**
 * File: Stereo.php.
 * User: Wafer
 * Date: 2018/1/3
 * Time: 20:10
 */

namespace device;


class Stereo
{
    public $volume = 0;

    public function on()
    {
        echo "Stereo On<br>";
    }

    public function off()
    {
        echo "Stereo Off<br>";
    }

    public function setCd()
    {
        echo "Stereo SetCd<br>";
    }

    public function setVol($vol)
    {
        $this->volume = $vol;
        echo "Stereo Volume=" . $this->volume . "<br>";
    }

    public function getVol()
    {
        return $this->volume;
    }

    public function start()
    {
        echo "Stereo Start<br>";
    }
}