<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 25/02/17
 * Time: 13:51
 */

require_once ("Vehicle.php");

class Car extends Vehicle
{
//    public $doors;
    private $doors;

    public function setDoors($doors)
    {
        $this->doors = $doors;
    }

    public function getDoors()
    {
        return $this->doors;
    }
}