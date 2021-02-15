<?php 
$text = "Hello World, I am back!";
echo "Hey " . $text . "Whats Going On Here\n";

function test() {
	static $x = 0;
	echo "$x\n";
	$x++;
}
test();
test();
test();

print "I am output by the print\n";

var_dump($text);

class Car {
	public $color;
	public $model;
	public function __construct( $color, $model ) {
		$this->color = $color;
		$this->model = $model;
	}
	public function message() {
		return "My car is a " . $this->color . " " . $this->model . "!\n";
	}
}

$myCar = new Car( "White", "BMW" );
echo $myCar -> message();
$myCar = new Car( "Black", "Mercedes" );
echo $myCar -> message();

$var = 0;

do {
	echo "Hello " . $var  . " times\n";
	$var++;
}while( $var <= 5 );

$colors = array( "white", "green", "black", "grey" );

foreach( $colors as $value ) {
	echo "$value\n";
}

$myArr = array(array(array("18!\n"), "My Name!\n"),"Xelloo!\n");
echo $myArr[1];
echo $myArr[0][1];
echo $myArr[0][0][0];



?>
