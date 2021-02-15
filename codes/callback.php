<?php
function my_callback( $item ) { 
	return strlen( $item );
} 

$strings = ["apple", "orange", "banana", "coconut" ];
$lenghts = array_map( "my_callback", $strings );
print_r($lenghts);

function exclaim( $str ) { 
	return $str . "!\n";
}
function ask( $str ){
	return $str . "?\n";
}
function printFormatted( $str, $format ) {
	echo $format($str);
}


printFormatted("Hello world", "exclaim");
printFormatted("Hello world", "ask");
?>
