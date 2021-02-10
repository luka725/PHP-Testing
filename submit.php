<?php
/**
 * Index Form on action="submit.php"  
 */
    include 'constants.php';
    include 'db.php';
    global $CFG;
    //importing class and asigning into the variable
    $db = new DB();
    $db2 = new DB();

    //getting values from index.php Form and storing them in variable
    if ( isset( $_POST['submit'] ) ) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['surname'];
    }
    
    //assigning database info to the class properties 
    $db->tablename = 'user_info';
    $db->dbhost = $CFG->host;
    $db->dbuser = $CFG->db_user;
    $db->dbpass = $CFG->db_pass;
    $db->db = $CFG->db_name;
    $db->name = $firstname;
    $db->surname = $lastname;
    //calling function
    $db->write();
    
    //assigning another database info with using flow method
    $db2->tablename = 'information';
    $db2->dbhost = 'localhost';
    $db2->dbuser = 'cfg';
    $db2->db = 'db_test';
    $db2->dbpass = '12345678';
    $db2->name = $firstname;
    $db2->surname = $lastname;
    $db2->write2();

    //returning previous page with built in header() function
    header("Location: http://localhost/");
    //exiting from page with built in exit() function
    exit();
?>

