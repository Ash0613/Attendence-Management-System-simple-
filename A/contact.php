<!--contact page-->

<?php
$pic = "images/kiminonawa.jpg";
$gif = "catpeace.gif";
$pic1 = "E1.png";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="am.css">
    <title>Contact</title>

</head>
<main>
    
        <p class="cont1">CONTACT US</p>
        <hr>
        
</main>

<body id="b">
    <style type="text/css">
        body {
            background-image:url('<?php echo $pic;?>');
        }
    </style>
    <nav>
    <a class="navbar-brand" href="#school/cllglink">
      <div class="logo-image">
      <img src="images/<?php echo $pic1; ?>" alt="logo" class="img-fluid">
       </div>
    </a>
        <ul>
            <li><a class="active" href="student.php">Home</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">About</a>
                <div class="dropdown-content">
                    <a href="info.php">Info</a>
                </div>
            </li>
        </ul>
    </nav>
    <p><img  class="kooky" src="images/<?php echo $gif; ?>" alt="gif" style="width:250px;height:200px;
    margin-left:50px;float: left; bottom:0; margin-right: 300px; position:fixed; margin-bottom:47px">
    <ul class="list">
        <li>Mail: <a class="mail" href="mailto:someone@example.com">someone@example.com</a></li><br><br>
        <li>Phone: 89xxxxx264</li>
    </ul>
    

    </p>
    <hr class="hr2">
    <footer>
    <center><p>&copy; 2023.<br>All rights reserved.</p></center>
</footer>
</body>

</html>