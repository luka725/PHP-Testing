<?php
// Parent class
abstract class Car {
	public $name;
	public function __construct( $name ){
		$this->name = $name;
	}
	abstract public function intro() : string;
}
// Child classes
class Audi extends Car {
	public function intro() : string {
		return "Choose German quality! I'm an $this->name!";
	}
}
class Volvo extends Car {
	public function intro() : string {
		return "Proud to be Swedish! I'm an $this->name!";
	}
}
class Citreon extends Car {
	public function intro() : string {
		return "French extravagance! I'm an $this->name!";
	}
}


$audi = new Audi("Audi");
echo $audi->intro();
echo "\n";
$volvo = new Volvo("Volvo");
echo $volvo->intro();
echo "\n";
$citreon = new Citreon("Citreon");
echo $citreon->intro();
echo "\n";

abstract class ParentClass {
	abstract proctected function prefixName( $name );
}
class ChildClass extends ParentClass{
	public function prefixName( $name ){
		if ( $name == "John Doe" ){
			$prefix = "Mr. ";
		}
		if ( $name ==Î "Jane Doe" ){
			$prefix = "Mrs. ";
		}
		else {
			$prefix = "";
		}
		return "{$prefix} {$name}\n";
	}
}

$class = new ChildClass;
echo $class->prefixName( "John Doe" );
echo $class->prefixName( "Jane Doe" );


?>
