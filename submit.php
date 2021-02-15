<?php
$dbname = "localdb";
$dbuser = "root";
$dbpass = "";
$host = "localhost";

$user_info_name = $_POST["name"];
$user_info_surname = $_POST["surname"];
$user_info_email = $_POST["email"];
$user_info_password = password_hash($_POST["password"], PASSWORD_DEFAULT);

$conn = new mysqli($host, $dbuser, $dbpass, $dbname ) or die ("Cannot connect database");
$sql = "INSERT INTO user_info (name, surname, email, password) 
	VALUES ('$user_info_name', '$user_info_surname', '$user_info_email', '$user_info_password')";

if ($conn->query($sql) === TRUE){
	echo "New record created successfully Well Done!";
} else{
	echo "Error: <br>" . $conn->error ;
}
$conn->close();
header("location: http://localhost/single.php");
exit();
?>
