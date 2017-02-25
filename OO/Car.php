<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 25/02/17
 * Time: 13:51
 */
class Car
{
    public $brand;
    public $color;
    public $engine;

    public function getEngine($type = "horsepower")
    {
        return $this->engine . " {$type}";
    }

}