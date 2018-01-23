<?php
/**
 * File: Observer.php.
 * User: Wafer
 * Date: 2017/12/17
 * Time: 15:17
 */

namespace Observer;


interface Observer
{
    function update($temperature, $pressure, $humidity);
}