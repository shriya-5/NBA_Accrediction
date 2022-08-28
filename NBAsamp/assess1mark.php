<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <style>

body{font-family:Georgia, serif;font-weight:bold;}

  ::placeholder {font-weight:normal;
font-family:Georgia, serif;color:black;
  text-align:center;
}
.form-center {
	display:flex;
	justify-content: center;
}
.heading
  {
    font-family:Georgia, serif;
    font-weight:1000;
    font-size: 40px;
    text-align: center;
    color: white;
background-color:#006994;  }
  

        </style>
        
       </head>
<body>

<?php

session_start();

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $id=$_SESSION['username'];
    $course=$_POST['course'];
    $n=$_POST['rno'];
    $q1=$_POST['q1'];
    $q2=$_POST['q2'];
    $q3=$_POST['q3'];
    $q4=$_POST['q4'];
    $q5=$_POST['q5'];
    $q6=$_POST['q6'];
    $q7=$_POST['q7'];
    $q8=$_POST['q8'];
    $tot=$q1+$q2+$q3+$q4+$q5+$q6+$q7+$q8;
    
      $conn=mysqli_connect("localhost","root","","nba");
      $sql="insert into assess1mark values('$id','$course','$n','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$tot');";
      $res=mysqli_query($conn,$sql);
      if(!$res)
      {
        echo "Error: ".mysqli_error($conn);
      }
      else
      {
        //header("location: .php");
      }
      $sql11="Select * from assess1 where staff_id='$id' and course_code='$course'";
      $res11 = mysqli_query($conn,$sql11);
      $a= mysqli_num_rows($res11);

      $sum_co1=0;
$sum_co2=0;
$sum_co3=0;
$sum_co4=0;
$sum_co5=0;
$sum_co6=0;

if($a>0)
{
    while($row=mysqli_fetch_assoc($res11))
    {
        if($row['co1']==1)
        {
            if($row['qno']==1)
            {
                $sum_co1+=$q1;    
            }
            if($row['qno']==2)
            {
                $sum_co1+=$q2;    
            }
            if($row['qno']==3)
            {
                $sum_co1+=$q3;    
            }
            if($row['qno']==4)
            {
                $sum_co1+=$q4;    
            }if($row['qno']==5)
            {
                $sum_co1+=$q5;    
            }if($row['qno']==6)
            {
                $sum_co1+=$q6;    
            }
            if($row['qno']==7)
            {
                $sum_co1+=$q7;    
            }
            if($row['qno']==8)
            {
                $sum_co1+=$q8;    
            }
        }
        if($row['co2']==1)
        {
            if($row['qno']==1)
            {
                $sum_co2+=$q1;    
            }
            if($row['qno']==2)
            {
                $sum_co2+=$q2;    
            }
            if($row['qno']==3)
            {
                $sum_co2+=$q3;    
            }
            if($row['qno']==4)
            {
                $sum_co2+=$q4;    
            }if($row['qno']==5)
            {
                $sum_co2+=$q5;    
            }if($row['qno']==6)
            {
                $sum_co2+=$q6;    
            }
            if($row['qno']==7)
            {
                $sum_co2+=$q7;    
            }
            if($row['qno']==8)
            {
                $sum_co2+=$q8;    
            }
        }if($row['co3']==1)
        {
            if($row['qno']==1)
            {
                $sum_co3+=$q1;    
            }
            if($row['qno']==2)
            {
                $sum_co3+=$q2;    
            }
            if($row['qno']==3)
            {
                $sum_co3+=$q3;    
            }
            if($row['qno']==4)
            {
                $sum_co3+=$q4;    
            }if($row['qno']==5)
            {
                $sum_co3+=$q5;    
            }if($row['qno']==6)
            {
                $sum_co3+=$q6;    
            }
            if($row['qno']==7)
            {
                $sum_co3+=$q7;    
            }
            if($row['qno']==8)
            {
                $sum_co3+=$q8;    
            }
        }if($row['co4']==1)
        {
            if($row['qno']==1)
            {
                $sum_co4+=$q1;    
            }
            if($row['qno']==2)
            {
                $sum_co4+=$q2;    
            }
            if($row['qno']==3)
            {
                $sum_co4+=$q3;    
            }
            if($row['qno']==4)
            {
                $sum_co4+=$q4;    
            }if($row['qno']==5)
            {
                $sum_co4+=$q5;    
            }if($row['qno']==6)
            {
                $sum_co4+=$q6;    
            }
            if($row['qno']==7)
            {
                $sum_co4+=$q7;    
            }
            if($row['qno']==8)
            {
                $sum_co4+=$q8;    
            }
        }if($row['co5']==1)
        {
            if($row['qno']==1)
            {
                $sum_co5+=$q1;    
            }
            if($row['qno']==2)
            {
                $sum_co5+=$q2;    
            }
            if($row['qno']==3)
            {
                $sum_co5+=$q3;    
            }
            if($row['qno']==4)
            {
                $sum_co5+=$q4;    
            }if($row['qno']==5)
            {
                $sum_co5+=$q5;    
            }if($row['qno']==6)
            {
                $sum_co5+=$q6;    
            }
            if($row['qno']==7)
            {
                $sum_co5+=$q7;    
            }
            if($row['qno']==8)
            {
                $sum_co5+=$q8;    
            }
        }
        if($row['co6']==1)
        {            
            if($row['qno']==1)
            {
                $sum_co6+=$q1;    
            }
            if($row['qno']==2)
            {
                $sum_co6+=$q2;    
            }
            if($row['qno']==3)
            {
                $sum_co6+=$q3;    
            }
            if($row['qno']==4)
            {
                $sum_co6+=$q4;    
            }if($row['qno']==5)
            {
                $sum_co6+=$q5;    
            }if($row['qno']==6)
            {
                $sum_co6+=$q6;    
            }
            if($row['qno']==7)
            {
                $sum_co6+=$q7;    
            }
            if($row['qno']==8)
            {
                $sum_co6+=$q8;    
            }
        }
    }
    
}

$sql12="insert into assess1co values('$id','$course','$n','$sum_co1','$sum_co2','$sum_co3','$sum_co4','$sum_co5','$sum_co6');";
$res12 = mysqli_query($conn,$sql12);

    
}

?>

<br>
<div class="heading">ASSESSMENT 1 MARKS</div>
       <br><br>
        <div class="form-center">
<form action="#" name="signup" method="POST" style="font-size:160%;background-color:white;border:2px solid black;width:45%;height:60%;border-radius:20px;box-shadow: 0px 0px 10px 1px #000;padding:10px 0px 10px 40px;font-family:Georgia, serif;
    font-weight:bold;">

<?php

$id=$_SESSION['username'];
$conn=mysqli_connect("localhost","root","","nba");
      
$sql="Select course_code from course_details where staff_id='$id'";
$q=mysqli_query($conn,$sql);

echo "<label for='course'>COURSE :  </label>";
echo    "<select name='course' id='course' style='width:45%;font-size:110%;background-color:#dde6f0;'>";
    
while($row = mysqli_fetch_assoc($q)) 
{        
echo "<option value='".$row['course_code']."'>".$row['course_code']."</option>"; 
}
echo  "</select><br>";
?>
<br>

    Register No: <input type="number" name="rno" placeholder="Register No" class="text" style="height:80%;width:45%;font-size:120%;background-color:#dde6f0;"><br><br>
    Q1: <input type="text" name="q1" placeholder="Q1" class="text" style="height:80%;width:45%;font-size:120%;background-color:#dde6f0;"><br><br>
    Q2: <input type="text" name="q2" placeholder="Q2" class="text" style="height:80%;width:45%;font-size:120%;background-color:#dde6f0;"><br><br>
    Q3: <input type="text" name="q3" placeholder="Q3" class="text" style="height:80%;width:45%;font-size:120%;background-color:#dde6f0;"><br><br>
    Q4: <input type="text" name="q4" placeholder="Q4" class="text" style="height:80%;width:45%;font-size:120%;background-color:#dde6f0;"><br><br>
    Q5: <input type="text" name="q5" placeholder="Q5" class="text" style="height:80%;width:45%;font-size:120%;background-color:#dde6f0;"><br><br>
    Q6: <input type="text" name="q6" placeholder="Q6" class="text" style="height:80%;width:45%;font-size:120%;background-color:#dde6f0;"><br><br>
    Q7: <input type="text" name="q7" placeholder="Q7" class="text" style="height:80%;width:45%;font-size:120%;background-color:#dde6f0;"><br><br>
    Q8: <input type="text" name="q8" placeholder="Q8" class="text" style="height:80%;width:45%;font-size:120%;background-color:#dde6f0;"><br><br>
    
  <input type="submit" value="SUBMIT" style="font-family:Georgia, serif;font-size:150%;font-weight:bold;width:85%;height:80%;color:white;margin:30px 2px 15px 5px;border-radius:20px;background-color:black;"><br>
</form>
</div>
<br><br>
<div class="logout"><a href="dashboard.php">&#9654 HOME</a><br></div>

        

</body>
</html>