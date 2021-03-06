<?php
/**
 * 
 * index.php at default main page http://localhost or http://127.0.0.1
 * 
 */
include 'constants.php';
include 'db.php';
global $CFG;

//importing DB() class into the declared variables
$db = new DB();
$db2 = new DB();

//assigning database access information
$db->tablename = 'user_info';
$db->dbhost = $CFG->host;
$db->dbuser = $CFG->db_user;
$db->dbpass = $CFG->db_pass;
$db->db = $CFG->db_name;

//calling function read() and storing information in variable 
$result = $db->read();
?>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-div">
    <form action="submit.php"; method="post">
        <label>Name:
        <input type="text" placeholder="name" name="firstname"></input>
        <label>Surname:
        <input type="text" placeholder="Surname" name="surname"></input>
        <input type="submit" value="Enter" name="submit"></input> 
    </form>
</div>
<div>
<center>
<?php
//with foreach() loop parsing array as a key value
foreach($result as $key=>$value){
         //print_r($key);
         echo $value['name']." ".$value['surname'];
         echo '<br>'; 
}

?></center>
</div> 
</body>
</html>

<?
/**
 * 
 * pseudo code
 * 
 */
//render the form
//read from the db and echo as ul and li
//require_once ('constants.php');
//require_once ('db.php');
//global $CFG;
//$db = new DB;
?>