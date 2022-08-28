<?php

session_start();

?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css">
 <style> 
body{font-family:Georgia, serif;}
</style>   
 </head>
<body>
<body>
<br>
<div class="heading" style="font-family:Georgia, serif;">
    DASHBOARD
</div>
<hr style="background-color:black ; text-align: center; width: 40%; margin-top: -17px;">

<div class="content">
Welcome <?php echo $_SESSION['username']; ?>
</div>

<div class="box3">
<div class="a2"><br><a href="course.php">&#9654 ADD COURSE</a></div>
<div class="a3"><br><a href="qp.php">&#9654 SET QP</a></div>
<div class="a3"><br><a href="addmark.php">&#9654 ADD MARK</a></div>
<br>
<div class="a2"><br><a href="display.php">&#9654 DISPLAY STUDENT MARK</a><br><br></div>
<div class="a3"><br><a href="cocalc.php">&#9654 DISPLAY CO CALC</a><br><br></div>
<div class="a3"><br><a href="dispcoatt.php">&#9654 DISPLAY FINAL CO</a><br><br></div>
</div>
<br><br><br><br><br><br>
<div class="logout"><a href="logout.php">&#9654 LOGOUT</a><br></div>
</body>
</html>

