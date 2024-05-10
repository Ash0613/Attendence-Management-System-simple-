<!--to create mydb1 and then sttable table in mydb1 for storing students name ,phoneno,...-->

<?php

$servername = "localhost:3308";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=mydb1", $username, $password); //to create mydb1 remove-"dbname=mydb1" this line
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection secured";   

    //creating database
    $sql = "CREATE DATABASE IF NOT EXISTS mydb1";
    $conn->exec($sql);
    echo "<br>";
    echo "Database created succesfully <br>";

    //Creating a table
    $sql1 = "CREATE TABLE IF NOT EXISTS sttable (
        id int(10) AUTO_INCREMENT PRIMARY KEY,
        stName varchar(50),
        phNumber double,
        city varchar(50),
        rollno varchar(10))";

        $conn->exec($sql1);
        echo "tabel creted succesfully <br>";

        //Adding values for table
    // $sql2 = "INSERT INTO sttable (id, stName, phNumber, city, rollno) VALUES ('3', 'Park', '917284629', 'Karkala', '3', '')";
    // $conn->exec($sql2);
    //echo "Enterd succsfully";
}

catch(PDOException $e) {
    echo "Connection is not secured : " . $e->getMessage();
}


?>