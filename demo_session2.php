<?php session_start(); ?>
<html>
<body>
<?php 

$firstName = $_SESSION["firstname"];
$lastName = $_SESSION["lastname"];

echo "First Name: $firstName .<br>";
echo "Last Name: $lastName .<br>";

print_r($_SESSION);

session_unset();
?>

</body>
</html>
