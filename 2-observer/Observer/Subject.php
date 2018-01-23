<?php
/**
 * File: Subject.php.
 * User: Wafer
 * Date: 2017/12/17
 * Time: 15:14
 */
namespace Observer;
interface Subject
{
    function registerObserver($observer);

    function removeObserver($observer);

    function notifyObserver();
}