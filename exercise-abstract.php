<?php
// Abstract class
abstract class Animal {
	public $name;
	protected $type;

	public function __construct($name, $type) {
		$this->name = $name;
		$this->type = $type;
	}

	public function eats() {
		echo $this->name . ' is hungry ';
	}

	public function expression () {
		echo $this->name . ' says hi ';
	}
}

class Tiger extends Animal {
	public $fur;

	public function __construct($name, $type, $fur) {
		parent::__construct($name, $type);
		$this->fur = $fur;
	}
}

$tigritin = new Tiger('Tigritin', 'vertebrate', 'Orange and black');
var_dump($tigritin);

echo $tigritin->eats();

