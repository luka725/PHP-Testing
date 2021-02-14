<?php
/**
 * Creating database connection class
 */

//creating class for database manipulation
class DB {
    
    //declaring variables to use in functions
    public $name;
    public $surname;
    public $tablename;
    public $dbhost;
    public $dbuser;
    public $dbpass;
    public $db;
    private $conn;

    //oppening connection to database with built in class mysqli(host, username, password, databasename)
    private function OpenCon(){
        $this->conn = new mysqli($this->dbhost, $this->dbuser, $this->dbpass,$this->db) or die("Connect failed: %s\n". $conn -> error);
    }

    //after database opened etc. OpenCon() has called it should be always closed CloseCon() is method for close database before database is opened.
    private function CloseCon(){
        $this->conn -> close();
    }
    //this function reads current table from database and returns as array    
    public function read() {
        $this->OpenCon();
        $ret =  $this->conn->query( 'SELECT * FROM '.$this->tablename );
        $this->CloseCon();
        return $ret;
    }

    //here is already declared SQL command "INSERT INTO <tablename> (column1, column2) VALUES ('value1', 'value2')"
    public function write() {
        $this->OpenCon();
        
        $sql = "INSERT INTO $this->tablename (name, surname) VALUES ('$this->name', '$this->surname')";
        //$sql = ' INSERT INTO '.$this->tablename.'(names, surname) VALUES ('.$this->name.', '.$this->surname.')';
        $this->conn -> query($sql);
        $this->CloseCon();
    }
    //fast move is always not correct but in this time sql command need to be created again for another db 
    public function write2() {
        $this->OpenCon();
        $sql = "INSERT INTO $this->tablename (first, second) VALUES ('$this->name', '$this->surname')";
        //$sql = ' INSERT INTO '.$this->tablename.'(names, surname) VALUES ('.$this->name.', '.$this->surname.')';
        $this->conn -> query($sql);
        $this->CloseCon();
    }
}
?>