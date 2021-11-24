<?php

class Vehicle {
	public $name;
	public $motor;
	public $brand;
	public $color;

	public function __construct($name, $motor, $brand, $color) {
		$this->name = $name;
		$this->motor = $motor;
		$this->brand = $brand;
		$this->color = $color;
	}

	function __destruct() {
		echo "The brand of " . $this->name . " is " . $this->brand;
	}

	public function startEngine() {
		echo $this->name . ' has started ';
	}

	public function accelerate () {
		echo $this->name . ' has accelerated ';
	}

	public function brake () {
		echo $this->name . ' has braked ';
	}
}

class AirVehicle extends Vehicle {
	public $wings;

	public function __construct($name, $motor, $brand, $color, $wings) {
		parent::__construct($name, $motor, $brand, $color);
		$this->wings = $wings;
		$this->color = 'pink';
	}

	public function fly () {
		echo 'The ' . $this->name . ' can fly ';
	}

	public function brake () {
		echo 'This ' . $this->name . ' can not brake ';
	}
}

$car = new Vehicle("M135 drive", "1600cc", "BMW", "blue");
$motorbike = new Vehicle('CBR', '600cc', 'Honda', 'red');
$airplane = new AirVehicle('Hawker Hurricane', '1025hp', 'Rolls Royce', 'black', 2);

// $car-> name = "M135 drive";
// $car-> motor = "1600cc";
// $car-> brand = "BMW";
// $car-> color = "black";

// $motorbike = [
// 	'name' => 'CBR',
// 	'motor' => '600cc',
// 	'brand' => 'Honda',
// 	'color' => 'red'
// ];


var_dump($car);
var_dump($motorbike);

echo $car->startEngine();
echo "\n";
echo $car->accelerate();

echo $car->brake();

echo $motorbike->accelerate();

echo $airplane->fly();
echo "\n";
var_dump($airplane);

echo $airplane->brake();



