<?php

/**
 * File: TraditionControl.php.
 * User: Wafer
 * Date: 2018/1/3
 * Time: 20:29
 */
class TraditionControl implements Control
{
    public $light;
    public $stereo;

    public function __construct($light, $stereo)
    {
        $this->light = $light;
        $this->stereo = $stereo;
    }

    public function onButton($slot)
    {
        // TODO: Implement onButton() method.
        switch ($slot) {
            case  0:
                $this->light->on();
                break;
            case 1:
                $this->stereo->on();
                break;
            case 2:
                $vol = $this->stereo->getVol();
                if ($vol < 11) {
                    $this->stereo->setVol(++$vol);
                }
                break;
        }
    }

    public function offButton($slot)
    {
        // TODO: Implement offButton() method.
        switch ($slot) {
            case  0:
                $this->light->off();
                break;
            case 1:
                $this->stereo->off();
                break;
            case 2:
                $vol = $this->stereo->getVol();
                if ($vol < 11) {
                    $this->stereo->setVol(--$vol);
                }
                break;
        }
    }

    public function undoButton()
    {
        //TODO: Implement undoButton() method.
    }
}