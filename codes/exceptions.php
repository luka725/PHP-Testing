<?php
function divide( $arg1, $arg2 ) {
	if( $arg1 == 0 or $arg2 == 0 ) {
		throw new Exception("Division by zero");
	}
	return $arg1 / $arg2;
}
try{	
	echo divide(10, 5);
	echo divide(0 , 1);
}catch(Exception $ex) {
	$code = $ex -> getCode();
	$message = $ex -> getMessage();
	$file = $ex -> getFile();
	$line = $ex -> getLine();
	echo "Exception thrown in $file on line $line: [Code $code] $message";
}finally{
	echo "Process complete.\n";
}

?>
