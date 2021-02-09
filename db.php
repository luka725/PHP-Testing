<?php
/**
 * Creating database connection class
 */
include 'constants.php';

function OpenCon()
 {
 $dbhost = $CFG->host;
 $dbuser = $CFG->db_user;
 $dbpass = $CFG->db_pass;
 $db = $CGF->db_name;
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