<!--to check connection of mydb2-->

<?php

$sname= "localhost:3308";

$unmae= "root";

$password = "";

$db_name = "mydb2";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}
?>