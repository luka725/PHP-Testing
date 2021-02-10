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
    

    header("Location: http://localhost/");
    exit();
?>

