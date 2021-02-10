<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-div">
    <form method="post" name="form" action="" >
        <label>Name:
        <input type="text" placeholder="name" name="firstname"></input>
        <label>Surname:
        <input type="text" placeholder="Surname" name="surname"></input>
        <input type="submit" value="Enter" name="submit"></input> 
    </form>
</div>
</body>
</html>
<?php

$dbname = 'datastorage';
$dbuser = 'storager';
$dbpass = '12345678';
$host = 'localhost';
$tablename = 'usr_info';
$result = [];

    if ( isset( $_POST['submit'] ) ) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['surname'];

        $conn = new mysqli($host, $dbuser, $dbpass, $dbname) or die("Connect failed: %s\n". $conn -> error);
        $sql = "INSERT INTO usr_info (name, surname) VALUES ('$firstname', '$lastname')";

        $result =  $conn->query( 'SELECT * FROM '.$tablename );
        $conn -> query($sql);

        $conn -> close();
   }

   foreach($result as $key=>$value){

        echo $value['name']." ".$value['surname'];
        echo '<br>'; 
}
?>
