<?php

/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 25/02/17
 * Time: 14:41
 */
class Vehicle
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
}