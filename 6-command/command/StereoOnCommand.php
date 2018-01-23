<?php
/**
 * File: StereoOnCommand.php.
 * User: Wafer
 * Date: 2018/1/3
 * Time: 19:26
 */

namespace command;


class StereoOnCommand implements Command
{
    private $stereo;

    public function __construct($stereo)
    {
        $this->stereo = $stereo;
    }

    public function execute()
    {
        // TODO: Implement execute() method.
        $this->stereo->on();
        $this->stereo->SetCd();
    }

    public function undo()
    {
        // TODO: Implement undo() method.
        $this->stereo->off();
    }

}