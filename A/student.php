<!--homepage-->


<?php
   
$server = "localhost:3308"; //IP of your database
$userName = "root"; //Username for database login
$userPass = ""; //Password associated with the username
$database = "mydb1"; //Your database name

$connectQuery = mysqli_connect($server,$userName,$userPass,$database);

if(mysqli_connect_errno()){
    echo mysqli_connect_error();
    exit();
}else{
    $selectQuery = "SELECT * FROM `sttable` ORDER BY `id` ASC";
    $result = mysqli_query($connectQuery,$selectQuery);
    if(mysqli_num_rows($result) > 0){
    }else{
        $msg = "No Record found";
    }
}

    $_SESSION['Name'] = "Attendance Management";
    
    
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
</style>
  

  <title>Student Attendence</title>
  <link rel="stylesheet" href="am.css">
</head>
<body>
  
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
  
  <main>
    <h1>
      <center> Student Attendence</center>
    </h1>
  </main>
  
  <p class= "cen">To add students:</p>
  <form   action="insert.php" method="post">
    <center >
    <input  type="text"  name="name" value="name" style=" box-shadow: 0 0 25px 0 black;"> 
    <input  type="int"   name="ph" value="phNo" style=" box-shadow: 0 0 25px 0 black;">
    <input   type="text"   name="city" value="city" style=" box-shadow: 0 0 25px 0 black;">
    <input  type="float"  name="roll" value="rollNo" style=" box-shadow: 0 0 25px 0 black;"></center><br>
    <center><button class="sub" type="submit" name="sub" >Submit</button></center><br>
    <hr><br><br>
    <hr class="hr3"><br>
  </form>
  <div class="container">
  <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
  <table border="1px" style="width:600px; line-height:40px;">
        <thead class="thead">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>PhNo</th>
                <th>City</th>
                <th>RollNo</th>
                <th>Attendence</th>
            </tr>
        </thead>
        
            <?php
                while($row = mysqli_fetch_assoc($result)){?>
                
                <tr class="tbod">
                    <td name = "id[]"><?php echo $row['id']; ?></td>
                    <td><?php echo $row['stName']; ?></td>
                    <td><?php echo $row['phNumber']; ?></td>
                    <td><?php echo $row['city']; ?></td>
                    <td><?php echo $row['rollno']; ?></td>
                    <td><input type = "checkbox" name = "ent[]" value = "present" onclick="increment()" />P
                        <input type = "checkbox" name = "ent[]" value = "absent" />A
                       </td>

                <tr>
                  
            <?php }?>
                
            <input class="date" type="date" id="d" name="date" required>
         

    </table>
    <input  class="subtn" type="submit" id="submit" name="submit" value="Submit Values"  > 
  </form>
  </div>
  <?php
  if(isset($_POST["submit"]))  {
  $entarr=$_POST["ent"];
  $date=$_POST["date"];
    
  $newvalues = implode(",",$entarr);
   
  include_once './checkboxClass.php';
  $checkboxClass=new checkboxClass();
  echo $checkboxClass->addtoDatabase($date,$newvalues);

}


?>

    
     
  <p>
    <center class="cen">
      The number of students present:
      <h3 class="count" id="count">0</h3>
    </center>
  </p><br><br><br><br><br>

  <script>
     
    
    let count = 0  
    let countEl = document.getElementById("count")


    function increment() {
      count += 1
      countEl.innerText = count;
        }





   
  </script>
  <footer>
    <p>&copy; 2023.<br>All rights reserved.</p>
</footer>

</body>

</html>