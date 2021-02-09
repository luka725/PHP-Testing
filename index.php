<?php
include 'constants.php';
require_once('submit.php');
?>

<html>
<head>
<link rel="stylesheet" href="style.css">
</head>

<div class="form-div">
<form action=""; method="get">
<label>Name:
<input type="text" placeholder="name" name="firstname"></input>
<label>Surname:
<input type="text" placeholder="Surname" name="surname"></input>
<input type="submit" value="Enter" name="button"></input> 
</form>
</div>
<div><?php print_r($CFG); ?></div> 
</html>





<?
//render the form
//read from the db and echo as ul and li
//require_once ('constants.php');
//require_once ('db.php');
//global $CFG;
//$db = new DB;
?>