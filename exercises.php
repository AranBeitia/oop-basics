<?php

class Vehicle {
	public $motor;
	public $brand;
	public $color;
}

$car = new Vehicle();
$motorbike = new Vehicle();

$car-> motor = "1600cc";
$car-> brand = "BMW";
$car-> color = "black";

$motorbike-> motor = "600cc";
$motorbike-> brand = "Honda";
$motorbike-> color = "red";


var_dump($car);
var_dump($motorbike);

