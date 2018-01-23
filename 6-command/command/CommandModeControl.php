<?php
/**
 * File: CommandModeControl.php.
 * User: Wafer
 * Date: 2018/1/3
 * Time: 19:39
 */

namespace command;

use Control;

class CommandModeControl implements Control
{
    private $onCommands = [];
    private $offCommands = [];
    private $stack = [];

    public function __construct()
    {

    }

    public function setCommand($slot, $onCommand, $offCommand)
    {
        $this->onCommands[$slot] = $onCommand;
        $this->offCommands[$slot] = $offCommand;
    }

    public function onButton($slot)
    {
        $this->onCommands[$slot]->execute();
        array_push($this->stack, $this->onCommands[$slot]);
    }

    public function offButton($slot)
    {
        $this->offCommands[$slot]->execute();
        array_push($this->stack, $this->offCommands[$slot]);
    }

    public function undoButton()
    {
        array_pop($this->stack)->undo();
    }
}