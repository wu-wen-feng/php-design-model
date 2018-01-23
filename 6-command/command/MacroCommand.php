<?php
/**
 * File: MacroCommand.php.
 * User: Wafer
 * Date: 2018/1/3
 * Time: 20:21
 */

namespace command;


class MacroCommand implements Command
{
    private $commands;

    public function __construct($commands)
    {
        $this->commands = $commands;
    }

    public function execute()
    {
        // TODO: Implement execute() method.
        if (!empty($this->commands)) {
            foreach ($this->commands as $command) {
                $command->execute();
            }
        }
    }

    public function undo()
    {
        // TODO: Implement undo() method.
        $len = count($this->commands);
        for ($i = 0; $i < $len; $i++) {
            $this->commands[$i]->undo();
        }
    }
}