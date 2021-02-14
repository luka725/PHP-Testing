<?php
$age = array( "John" => "20", "Jane" => "22", "Ben" => "18", "kaxa" => "bendukidze" );
$names = array( "John", "Jane", "Ben", "kaxa" );
echo json_encode( $names  ). "<br>";
echo json_encode( $age ). "<br>";

$jsonobj = '{ "Peter" : 35, "Ben" : 37, "Sara" : 43 } ';
var_dump(json_decode($jsonobj));
var_dump(json_decode($jsonobj, true));

$obj = json_decode( $jsonobj );

echo $obj->Peter ."\n";
echo $obj->Ben . "\n";
echo $obj->Sara . "\n";

foreach($obj as $key => $value ) {
	echo $key . " => " . $value . "\n";
}

$arr = json_decode( $jsonobj, true );

foreach($arr as $key => $value ) {
	echo $key . " => " . $value . "\n";
}

echo $arr["Peter"] . "\n";
echo $arr["Ben"] . "\n";
echo $arr["Sara"] . "\n";

?>
