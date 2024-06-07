<?php
class DBConnection{

    private $host = 'localhost';
    private $username = 'root';
    private $password = 'root';
    private $database = 'event_db';
    
    public $conn;
    
    public function __construct(){

        if (!isset($this->conn)) {
            
            $this->conn = new mysqli('localhost', 'root', 'root', 'event_db');


            
            if (!$this->conn) {
                echo 'Cannot connect to database server';
                exit;
            }            
        }    
        
    }
    public function __destruct(){
        $this->conn->close();
    }
}
?>