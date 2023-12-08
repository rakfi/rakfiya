<?php
class Database{
    private $hostname = "localhost";
    private $username ="root";
    private $password = "";
    private $database = "user";
    public $conn;


    public function __construct(){
        $this->conn = new mysqli($this->hostname, $this->username, $this->password, $this->database);
        return $this->conn;

    }
    
}

/*$obj = new Database;

if($obj->conn){
    echo "success";
}
else{
    echo "Error";
}*/  //for checking connection

?>