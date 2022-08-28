<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css">
   <style>
body{
font-family:Georgia, serif;
    font-weight:bold;}
</style>
</head>
<body>
<br>
<div class="heading" style="font-family:Georgia, serif;">
ASSESSMENT 1 MARKS</div>
<hr style="background-color:black ; text-align: center; width: 40%; margin-top: -17px;">

<div class="regform">
<form action="#" method="post" style="font-size: 150%;font-family:Georgia, serif;font-weight:bold;"> 
<?php

session_start();

$id=$_SESSION['username'];
$conn=mysqli_connect("localhost","root","","nba");
      
$sql="Select course_code from course_details where staff_id='$id'";
$q=mysqli_query($conn,$sql);

echo "<label for='course'>Course</label><br>";
echo    "<select name='course' id='course'>";
    
while($row = mysqli_fetch_assoc($q)) 
{        
echo "<option value='".$row['course_code']."'>".$row['course_code']."</option>"; 
}
echo  "</select>";
?>
<br>

<input type="submit" value="SEARCH" style="font-weight:bold;font-size:80%;font-family:Georgia, serif;">
</form>
</div>
<?php
$conn=mysqli_connect("localhost","root","","nba");

if($_SERVER['REQUEST_METHOD']=='POST')
{
$course=$_POST['course'];
$sql = "select * from assess1mark where course_code='$course' and staff_id='$id'";
$res = mysqli_query($conn,$sql);
$a= mysqli_num_rows($res);

if($a>0)
{
    echo "<table>
    <tr>
      <th>Register No</th>
      <th>Q1</th>
      <th>Q2</th>
      <th>Q3</th>
      <th>Q4</th>
      <th>Q5</th>
      <th>Q6</th>
      <th>Q7</th>
      <th>Q8</th>
      <th>Total Marks</th>
    </tr>";
    while($row=mysqli_fetch_assoc($res))
    {
        echo "
      <tr><td>".$row['register_no']."</td>
        <td>".$row['Q1']."</td><td>".$row['Q2']."</td><td>".$row['Q3']."</td><td>".$row['Q4']."</td><td>".$row['Q5']."</td><td>".$row['Q6']."</td><td>".$row['Q7']."</td><td>".$row['Q8']."</td><td>".$row['total_mark']."</td></tr>";       
    }
    echo "</table>";
    
}
 
else
{
    echo "<script type='text/javascript'>alert('COURSE not found for COURSE CODE group:$course');</script>";
}
}
?>


<br><br>

<div class="logout"><a href="dashboard.php">&#9654 HOME</a><br></div>



</body>
</html>