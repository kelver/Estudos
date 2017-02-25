<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 25/02/17
 * Time: 14:47
 */
require_once ("Vehicle.php");

class Motorcycle extends Vehicle
{
    public function __construct($brand = null, $color = null)
    {
        parent::__construct($brand, strtoupper($color));
    }

    public function getBrand()
    {
        return $this->brand;
    }

}