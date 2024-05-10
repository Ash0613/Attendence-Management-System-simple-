<!--to check connection of 2nd database i.e mydb2 and to connect-->

<?php
class connectionClass extends mysqli{

private $host="localhost:3308",$username="root",$password="", $dbName="mydb2";
public $con;
function __construct() {
     
     $this->con=   $this->connect($this->host, $this->username, $this->password, $this->dbName);
    
}
}
