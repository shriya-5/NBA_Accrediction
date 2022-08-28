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
<div class="heading" style="font-family:Georgia, serif;font-weight:bold;">
END SEM CO CALCULATION</div>
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
$sql = "select * from endsemco where course_code='$course' and staff_id='$id'";
$res = mysqli_query($conn,$sql);
$a= mysqli_num_rows($res);
$sql1="select round(AVG(CO1),2) AS co1_avg FROM endsemco";
$result = mysqli_query($conn, $sql1); 
$row1 = mysqli_fetch_assoc($result); 
$co1avg = $row1['co1_avg'];

$sql2="select round(AVG(CO2),2) AS co2_avg FROM endsemco";
$result2 = mysqli_query($conn, $sql2); 
$row2 = mysqli_fetch_assoc($result2); 
$co2avg = $row2['co2_avg'];

$sql3="select round(AVG(CO3),2) AS co3_avg FROM endsemco";
$result3 = mysqli_query($conn, $sql3); 
$row3 = mysqli_fetch_assoc($result3); 
$co3avg = $row3['co3_avg'];

$sql4="select round(AVG(CO4),2) AS co4_avg FROM endsemco";
$result4 = mysqli_query($conn, $sql4); 
$row4 = mysqli_fetch_assoc($result4); 
$co4avg = $row4['co4_avg'];

$sql5="select round(AVG(CO5),2) AS co5_avg FROM endsemco";
$result5 = mysqli_query($conn, $sql5); 
$row5 = mysqli_fetch_assoc($result5); 
$co5avg = $row5['co5_avg'];

$sql6="select round(AVG(CO6),2) AS co6_avg FROM endsemco";
$result6 = mysqli_query($conn, $sql6); 
$row6 = mysqli_fetch_assoc($result6); 
$co6avg = $row6['co6_avg'];

$cnt1=0;
$cnt2=0;
$cnt3=0;
$cnt4=0;
$cnt5=0;
$cnt6=0;

if($a>0)
{
    echo "<table>
    <tr>
      <th>Register No</th>
      <th>CO1</th>
      <th>CO2</th>
      <th>CO3</th>
      <th>CO4</th>
      <th>CO5</th>
      <th>CO6</th>
    </tr>";
    while($row=mysqli_fetch_assoc($res))
    {
        echo "
      <tr><td>".$row['rno']."</td>
        <td>".$row['CO1']."</td><td>".$row['CO2']."</td><td>".$row['CO3']."</td><td>".$row['CO4']."</td><td>".$row['CO5']."</td><td>".$row['CO6']."</td></tr>";
        if($row['CO1']>=$co1avg)
        {
            $cnt1++;
        }
        if($row['CO2']>=$co2avg)
        {
            $cnt2++;
        }
        if($row['CO3']>=$co3avg)
        {
            $cnt3++;
        }
        if($row['CO4']>=$co4avg)
        {
            $cnt4++;
        }
        if($row['CO5']>=$co5avg)
        {
            $cnt5++;
        }
        if($row['CO6']>=$co6avg)
        {
            $cnt6++;
        }
    }
    echo "</table>";
    
}
 
else
{
    echo "<script type='text/javascript'>alert('COURSE not found for COURSE CODE group:$course');</script>";
}
if($co1avg==0)
{
    $p1=0;
}
else
{
    $p1=round(($cnt1/$a)*100,2);
}

if($co2avg==0)
{
    $p2=0;
}
else
{
    $p2=round(($cnt2/$a)*100,2);
}
if($co3avg==0)
{
    $p3=0;
}
else
{
    $p3=round(($cnt3/$a)*100,2);
}
if($co4avg==0)
{
    $p4=0;
}
else
{
    $p4=round(($cnt4/$a)*100,2);
}
if($co5avg==0)
{
    $p5=0;
}
else
{
    $p5=round(($cnt5/$a)*100,2);
}
if($co6avg==0)
{
    $p6=0;
}
else
{
    $p6=round(($cnt6/$a)*100,2);
}
echo "<br><br><table>
    <tr>
      <th>Att</th>
      <th>CO1</th>
      <th>CO2</th>
      <th>CO3</th>
      <th>CO4</th>
      <th>CO5</th>
      <th>CO6</th>
    </tr>";
    
echo "<tr><td>CO AVG</td><td>".$co1avg."</td><td>".$co2avg."</td><td>".$co3avg."</td><td>".$co4avg."</td><td>".$co5avg."</td><td>".$co6avg."</td></tr>";
echo "<tr><td>CO Attaintment</td><td>".$p1."</td><td>".$p2."</td><td>".$p3."</td><td>".$p4."</td><td>".$p5."</td><td>".$p6."</td></tr>";
echo "</table>";
}

?>


<br><br>

<div class="logout"><a href="dashboard.php">&#9654 HOME</a><br></div>



</body>
</html>