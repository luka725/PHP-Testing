<?php
$dbname = "localdb";
$dbuser = "root";
$dbpass = "";
$host = "localhost";

$conn = new mysqli($host, $dbuser, $dbpass, $dbname);
$sql = "SELECT * FROM user_info";
$dbobject = $conn->query($sql);
$conn->close();

foreach($dbobject as $key => $value){
	foreach($value as $val){
		echo "$val<br>";
	}
}
?>
