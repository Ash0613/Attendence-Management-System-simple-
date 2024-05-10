<!--to check the connection and enter values into mydb1 through code-->

<?php
$servername = "localhost:3308";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=mydb1", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
  $sql2 = "INSERT INTO sttable (id, stName, phNumber, city, rollno) VALUES ('1', 'Rin', '9172846293', 'Karkala', '1')";
     $conn->exec($sql2);
    echo "Enterd succsfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>

