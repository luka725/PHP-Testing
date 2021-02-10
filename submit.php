<?php
    include 'constants.php';
    include 'db.php';
    global $CFG;
    $db = new DB();
    $db2 = new DB();

    
    if ( isset( $_POST['submit'] ) ) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['surname'];
    }
    

    $db->tablename = 'user_info';
    $db->dbhost = $CFG->host;
    $db->dbuser = $CFG->db_user;
    $db->dbpass = $CFG->db_pass;
    $db->db = $CFG->db_name;
    $db->name = $firstname;
    $db->surname = $lastname;
    $db->write();
    
    $db2->tablename = 'information';
    $db2->dbhost = 'localhost';
    $db2->dbuser = 'cfg';
    $db2->db = 'db_test';
    $db2->dbpass = '12345678';
    $db2->name = $firstname;
    $db2->surname = $lastname;
    $db2->write2();

    header("Location: http://localhost/");
    exit();
?>

