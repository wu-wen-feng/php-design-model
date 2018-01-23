<?php

/**
 * File: Control.php.
 * User: Wafer
 * Date: 2018/1/3
 * Time: 19:39
 */
interface Control
{
    public function onButton($slot);

    public function offButton($slot);

    public function undoButton();
}