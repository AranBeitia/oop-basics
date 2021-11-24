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

$car = new Vehicle("M135 drive", "1600cc", "BMW", "black");
$motorbike = new Vehicle('CBR', '600cc', 'Honda', 'red');

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
echo $car->accelerate();
echo $car->brake();
//echo $motorbike->accelerate();

