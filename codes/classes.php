<?php 
class Fruit {
	// Properties
	public $name;
	public $color;


	function set_name( $name ) {
		$this->name = $name;
	}
	function get_name() {
		return $this->name;
	}
	function set_color($color) {
		$this->color = $color;
	}
	function get_color() {
		return $this->color . "\n";
	}
}

class Fruit1 {
	public $name;
	public $color;

	public function __construct( $name, $color ){
		$this->name = $name;
		$this->color = $color;
	}
	public function intro() {
		echo "The fruit is {$this->name} and the color is {$this->color}.\n";
	}
}	
class Strawberry extends Fruit1 {
	public function message() {
		echo "Am I a fruit or a berry? \n";
	}
}


$apple = new Fruit();
$banana = new Fruit();
$apple -> set_name("Apple");
$banana -> set_name("Banana");
$apple -> set_color("Red");
$banana -> set_color("Yellow");
$orange = new Fruit1("Orange", "Orange");
$strawberry = new Strawberry ("Strawberry", "Red");
$strawberry -> message();
$strawberry -> intro();

echo "Name: " . $apple->get_name() . "\nColor: " . $apple -> get_color();
echo "\n";
echo "Name: " .  $banana->get_name() . "\nColor: " . $banana -> get_color(); 

?>
