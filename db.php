<?php
/**
 * Creating database connection class
 */

class DB {
    
    public $name;
    public $surname;
    public $tablename;
    public $dbhost;
    public $dbuser;
    public $dbpass;
    public $db;
    private $conn;

    private function OpenCon(){
        $this->conn = new mysqli($this->dbhost, $this->dbuser, $this->dbpass,$this->db) or die("Connect failed: %s\n". $conn -> error);
    }

    private function CloseCon(){
        $this->conn -> close();
    }
        
    public function read() {
        $this->OpenCon();
        $ret =  $this->conn->query( 'SELECT * FROM '.$this->tablename );
        $this->CloseCon();
        return $ret;
    }

    public function write() {
        $this->OpenCon();
        $sql = "INSERT INTO $this->tablename (names, surname) VALUES ('$this->name', '$this->surname')";
        //$sql = ' INSERT INTO '.$this->tablename.'(names, surname) VALUES ('.$this->name.', '.$this->surname.')';
        $this->conn -> query($sql);
        $this->CloseCon();
    }
}
?>