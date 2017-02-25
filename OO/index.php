<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 25/02/17
 * Time: 13:51
 */
require_once ("Car.php");
require_once ("Motorcycle.php");

$ferrari = new Car("Ferrari", "Red");
$ferrari->engine = 488;
$ferrari->setDoors(2);

$mustang = new Car("Mustang", "Yellow");
$mustang->engine = 300;
$mustang->setDoors(4);

$m = new Motorcycle("Honda", "Blue");
$m->engine = 150;

echo $mustang->getBrand();