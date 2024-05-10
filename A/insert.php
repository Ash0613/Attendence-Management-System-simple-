<?php
 $server = "localhost:3308";
 $username = "root";
 $password = "";
 $dbname = "mydb1";
  $conn = mysqli_connect($server , $username, $password, $dbname);

  if(isset($_POST["sub"])){
   
   if(!empty($_POST['name']) && !empty($_POST['ph']) && !empty($_POST['city']) && !empty($_POST['roll'])) {
   $name=$_POST["name"];
  $ph=$_POST["ph"];
  $city=$_POST["city"];
  $roll=$_POST["roll"];

  $query = "INSERT into sttable (stName,phNumber,city,rollno) values('$name' , '$ph' , '$city' , '$roll')";

  $run=mysqli_query($conn,$query) or die('error');

  if($run){
   echo "Added";
  }
  else {
   echo "Failed to add" ;
  }
  }
  else {
   echo "all fields required";
  }
}
  


$pic =  "images/kiminonawa.jpg";
$pic1 = "E1.png";
  ?>
  <!DOCTYPE html>
<html lang="en">

<head>
<style type="text/css">
body {
background-image: url('<?php echo $pic;?>');
}

.bod {
   margin-top: 200px;
  
   color: aliceblue;
 margin-left: 45%;
}
</style>
  

  <title>Student Attendence</title>
  <link rel="stylesheet" href="am.css">
</head>

  
    <nav>
    <a class="navbar-brand" href="#school/cllglink">
      <div class="logo-image">
      <img src="images/<?php echo $pic1; ?>" alt="logo" class="img-fluid">
       </div>
    </a>

  <ul>
  <li><a  href="student.php">Home</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">About</a>
    <div class="dropdown-content">
      <a href="info.php">Info</a>
    </div>
  </li>
</ul>
    </nav>
  
  
  <footer>
    <p>&copy; 2023.<br>All rights reserved.</p>
</footer>
<body class="bod">

</body>


</html>