<?php
/**
 * File: StereoAddVolumCommand.php.
 * User: Wafer
 * Date: 2018/1/3
 * Time: 19:31
 */

namespace command;


class StereoAddVolCommand implements Command
{
    public $stereo;

    public function __construct($stereo)
    {
        $this->stereo = $stereo;
    }

    public function execute()
    {
        // TODO: Implement execute() method.
        $vol = $this->stereo->getVol();
        if ($vol < 11) {
            $this->stereo->setVol(++$vol);
        }
    }

    public function undo()
    {
        $vol = $this->stereo->getVol();
        if ($vol > 0) {
            $this->stereo->setVol(--$vol);
        }
    }
}