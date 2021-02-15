<?php
class pi{
	public static $value = 3.14159;
	public function staticValue() {
		return self::$value . "\n";
	}
}
class x extends pi {
	public function xStatic() {
		return parent::$value . "\n";
	}
}

$pi = new pi();
echo $pi->staticvalue();
echo x::$value;
$x = new x();
$x->xStatic();

?>
