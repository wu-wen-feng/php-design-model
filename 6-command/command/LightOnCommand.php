<?php
/**
 * File: LightOnCommand.php.
 * User: Wafer
 * Date: 2018/1/3
 * Time: 19:20
 */

namespace command;


class LightOnCommand implements Command
{
    private $light;

    public function __construct($light)
    {
        $this->light = $light;
    }

    public function execute()
    {
        $this->light->on();
    }

    public function undo()
    {
        $this->light->off();
    }
}