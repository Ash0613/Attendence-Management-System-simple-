<!--loginpage-->

<?php
    
    $pic = "images/anime.jpg";
    $pic1 = "images/yuki.gif";
?>
<!DOCTYPE html>
<html>
   <head>
     <meta http-equiv='content-type' content='text/html;charset=utf-8' />
     <title>Login</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="style.css">
   </head>
   <style type="text/css">
body {
background-image: url('<?php echo $pic;?>');
}

</style>
<body>
  <p class="h">Attendance</p>
  <hr>
  <p class="h2"> Website</p>
<hr class="hr2">
  <div class="container">
    
    <?php
      if(isset($_POST['submit'])){
        $username = $_POST['username']; $password = $_POST['password'];
        if($username === 'Ash' && $password === '0613'){
          $_SESSION['login'] = true; header('LOCATION:student.php'); die();
        } {
          echo "<div class='alert alert-danger'>Username and Password do not match.</div>";
        }
        
      }
    ?>
    <form class="form1" action="" method="post">
    <h1 class="text-center">Login</h1>
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" name="password" required>
      </div>
      <button type="submit" name="submit" class="btn btn-default">Login</button>
    </form>
  </div>
     
</body>
</html>