<!--info page-->

<?php
$pic = "images/kiminonawa.jpg";
$pic1 = "E1.png";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="am.css">
    <title>Info</title>

</head>
<main>
    <center class="info1">
        <p class="inf" > This website </p>
    </center>
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
            <li><a href="contact.php">Contact</a></li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">About</a>
                <div class="dropdown-content">
                    <a href="info.php">Info</a>
                </div>
            </li>
        </ul>
    </nav>

    <p class="info2">
        <b>
        The purpose of this website is to computerize the traditional way of taking attendance.
        You can click the checkbox either present or absent. At the end of the table it shows the
        number of students present based on times you've clicked on the checkbox indicating 'P'.
        This website is useful, when there are small number of students.</b>
    

    </p>
    <footer>
    <center><p>&copy; 2023.<br>All rights reserved.</p></center>
</footer>
</body>

</html>