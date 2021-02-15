<?php

class Goodbye {
	const LEAVING_MESSAGE = "Thank you for visiting.!\n";
	public function byebye() {
		echo self::LEAVING_MESSAGE;
	}
}


$goodbye = new Goodbye;
$goodbye -> byebye();
echo Goodbye::LEAVING_MESSAGE;



?>
