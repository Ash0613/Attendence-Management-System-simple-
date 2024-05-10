<!--to create database and table for storing attendence-->

<?php

$servername = "localhost:3308";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=mydb1", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection secured";   

    //creating database
    $sql = "CREATE DATABASE IF NOT EXISTS mydb2";
    $conn->exec($sql);
    echo "<br>";
    echo "Database created succesfully <br>";
}

/*after creating mydb2, comment the section..line 9-19 and uncomment the other..the other halfcreates myguests in mydb2*/

/*
try {
    $conn = new PDO("mysql:host=$servername;dbname=mydb2", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection secured";  


    //Creating a table
    $sql1 = "CREATE TABLE IF NOT EXISTS myguests (
        id int(10) AUTO_INCREMENT PRIMARY KEY,
        date date,
        attendence varchar(100))";

        $conn->exec($sql1);
        echo "tabel created succesfully <br>";

         
}
*/

catch(PDOException $e) {
    echo "Connection is not secured : " . $e->getMessage();
}

?>