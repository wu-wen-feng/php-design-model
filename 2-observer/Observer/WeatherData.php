<?php
/**
 * File: WeatherData.php.
 * User: Wafer
 * Date: 2017/12/17
 * Time: 15:36
 */

namespace Observer;


class WeatherData implements Subject
{
    private $temperature;
    private $pressure;
    private $humidity;
    private $observers = [];

    public function __construct()
    {

    }

    public function getTemperature()
    {
        return $this->temperature;
    }

    public function getPressure()
    {
        return $this->pressure;
    }

    public function getHumidity()
    {
        return $this->humidity;
    }

    public function dataChange()
    {
        $this->notifyObserver();
    }


    public function setData($temperature, $pressure, $humidity)
    {
        $this->temperature = $temperature;
        $this->pressure = $pressure;
        $this->humidity = $humidity;
        $this->dataChange();
    }


    public function registerObserver($observer)
    {
        // TODO: Implement registerObserver() method.
        $this->observers[] = $observer;
    }

    public function removeObserver($observer)
    {
        // TODO: Implement remoeveObserver() method.
        if (in_array($observer, $this->observers)) {
            $key = array_search($observer, $this->observers);
            if (!empty($this->observers[$key])) {
                unset($this->observers[$key]);
            }
        }
    }

    public function notifyObserver()
    {
        // TODO: Implement notifyObserver() method.
        if (!empty($this->observers)) {
            foreach ($this->observers as $observer) {
                $observer->update($this->getTemperature(), $this->getPressure(), $this->getHumidity());
            }
        }
    }

}