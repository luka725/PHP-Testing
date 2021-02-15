<?php 

class Greetings{
	public static function welcome() {
		echo "Hello World!\n";
	}
	public function __construct() {
		self::welcome();
	}
}
class OtherClass{
	public function message() {
		Greetings::welcome();
	}

}
Greetings::welcome();
$obj = new Greetings();
$obj::welcome();
new Greetings();
$obj1 = new OtherClass();
$obj1->message();

?>
