<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 25/02/17
 * Time: 15:44
 */
interface InterfaceVehicle
{
    public function getEngine($type = null);

    public function getBrand();

    public function getColor();
}