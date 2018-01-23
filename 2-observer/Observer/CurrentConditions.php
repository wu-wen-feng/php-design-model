<?php
/**
 * File: CurrentConditions.php.
 * User: Wafer
 * Date: 2017/12/17
 * Time: 15:26
 */

namespace Observer;

use  Observer\Observer;

class CurrentConditions implements Observer
{
    private $temperature;
    private $pressure;
    private $humidity;

    public function update($temperature, $pressure, $humidity)
    {
        // TODO: Implement update() method.
        $this->temperature = $temperature;
        $this->pressure = $pressure;
        $this->humidity = $humidity;
        $this->display();
    }

    public function display()
    {
        echo "***Today mTemperatrue:" . $this->temperature . "***<br>";
        echo "***Today mPressure:" . $this->pressure . "***<br>";
        echo "***Today mHumidity:" . $this->humidity . "***<br>";
    }
}