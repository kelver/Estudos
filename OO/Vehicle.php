<?php

/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 25/02/17
 * Time: 14:41
 */
require_once ("InterfaceVehicle.php");

abstract  class Vehicle implements InterfaceVehicle
{
    public $brand;
    public $color;
    public $engine;

    public function __construct($brand = null, $color = null)
    {
        $this->brand = $brand;
        $this->color = $color;
    }

    public function getEngine($type = "horsepower")
    {
        return $this->engine . " {$type}";
    }

    abstract public function getBrand();

    public function getColor()
    {
        return $this->color;
    }
}