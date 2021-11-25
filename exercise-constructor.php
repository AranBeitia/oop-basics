<?php

class Vehicle {
	private $name;
	private $motor;
	private $brand;
	private $color;

	public function __construct($name, $motor, $brand, $color) {
		$this->name = $name;
		$this->motor = $motor;
		$this->brand = $brand;
		$this->color = $color;
	}

	public function getName () {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
	}

	public function getMotor() {
		return $this->motor;
	}

	public function setMotor($motor) {
		$this->motor = $motor;
	}

	public function getBrand() {
		return $this->brand;
	}

	public function setBrand($brand) {
		$this->brand = $brand;
	}

	public function getColor() {
		return $this->color;
	}

	public function setColor($color) {
		$this->color = $color;
	}

	function __destruct() {
		echo "The brand of " . $this->name . " is " . $this->brand . " and the color " . $this->color;
	}
}

$car = new Vehicle("M135 drive", "1600cc", "BMW", "blue");
$motorbike = new Vehicle('CBR', '600cc', 'Honda', 'red');

echo $car->setName('Cochesito');
echo $car->setColor('Pinky');

