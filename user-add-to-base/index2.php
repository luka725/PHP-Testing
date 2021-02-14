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
// assigning database info to the variables
$dbname = 'datastorage';
$dbuser = 'storager';
$dbpass = '12345678';
$host = 'localhost';
$tablename = 'usr_info';
$result = [];

    // getting values from form and storing into variables 
    if ( isset( $_POST['submit'] ) ) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['surname'];

        //oppening connection to the database 
        $conn = new mysqli($host, $dbuser, $dbpass, $dbname) or die("Connect failed: %s\n". $conn -> error);
        // storing SQL query in the variable 
        $sql = "INSERT INTO usr_info (name, surname) VALUES ('$firstname', '$lastname')";
        // creating SQL command 
        $result =  $conn->query( 'SELECT * FROM '.$tablename );
        //calling function query() and giving it value 
        $conn -> query($sql);
        //closeing connection to the database
        $conn -> close();
   }
   //parsing table array ad key value format
   foreach($result as $key=>$value){
        //printing parsed array only values
        echo $value['name']." ".$value['surname'];
        echo '<br>'; 
}
?>
