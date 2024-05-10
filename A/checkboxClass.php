 <!--to enter the absent/present values into the mydb2 database-->
 
 <?php
 require_once './connectionClass.php';
 class checkboxClass extends connectionClass{
   public function addtoDatabase($date,$value) {
      $insert="INSERT INTO myguests (date, attendence)  VALUES ('$date','$value')";
      $result=$this->query($insert) or die('error');
      if($result) {
         return "<h2 class='text-success'>Updated</h2>";
      } else {
         return "<h2 class='text-danger'>Not updated</h2>";
      }
   }
 }
 ?>
 <!DOCTYPE html>
<html lang="en">

<head>
 <title>Student Attendence</title>
  <link rel="stylesheet" href="am.css">
</head>
</html>