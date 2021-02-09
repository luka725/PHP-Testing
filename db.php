<?php
/**
 * Creating database connection class
 */
include 'constants.php';
include 'submit.php';

function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "1234";
 $db = "example";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   


class DB {
      
    function read() {
        print 'Inside `aMemberFunc()`';
    }

    function write() {
        print 'Inside `aMemberFunc()`';
    }
}


?>