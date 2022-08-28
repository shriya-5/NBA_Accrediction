<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <style>
 body{
font-family:Georgia, serif;
background-color:#dde6f0;}

  ::placeholder {font-weight:normal;
font-family:Georgia, serif;color:black;
  text-align:center;
}
.heading
  {
    font-family:Georgia, serif;
    font-weight:1000;
    font-size: 40px;
    text-align: center;
    color: white;
background-color:#006994;  }

.regform 
{
    margin: 70px 450px;
    padding: 10px 10px;
    line-height: 1.6;
    background: #006994 ;
  box-shadow: 0px 0px 10px 4px #000;
  font-weight: bolder;
  text-align:center;
  color:white;
}

.form-center {
	display:flex;
	justify-content: center;
}
.regform text{
  font-family: Bradley Hand ITC;
  font-weight: bolder;
  text-align: center;
  font-size: 350%;
}


        </style>
        
       </head>
<body>

<?php

session_start();

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $id=$_SESSION['username'];
    $dep=$_POST['deptname'];
    $code=$_POST['code'];
    $cname=$_POST['cname'];
    $sem=$_POST['sem'];
    $yr=$_POST['year'];

      $conn=mysqli_connect("localhost","root","","nba");
      $sql="insert into course_details values('$id','$code','$cname','$dep','$sem','$yr');";
      $res=mysqli_query($conn,$sql);
      if(!$res)
      {
        echo "Error: ".mysqli_error($conn);
      }
      else
      {
        //header("location: dashboard.php");
        
      }
    

}

?>

<br>
<div class="heading" style="font-size:300%;">ADD COURSE</div><br><br>

        <div class="form-center">
<form action="#" name="signup" method="POST" style="font-family:Georgia, serif;background-color:white;border:2px solid black;width:45%;height:60%;border-radius:20px;box-shadow: 0px 0px 10px 1px #000;padding:10px 0px 10px 40px;">

<p style="font-size:165%;color:black;margin:10px 10px 3px 10px;font-weight:bold;">         Department Name: </p><br>

<input type="text" name="deptname" placeholder="Department name" class="text" style="font-size:150%;font-weight:bold;width:80%;height:80%;padding:10px 10px 10px 10px;
border:2px solid black;color:black;border-radius:30px;background-color:#dde6f0;"><br>

<p style="font-size:165%;color:black;margin:10px 10px 3px 10px;font-weight:bold;">     Course Code:</p><br> 

<input type="text" name="code" placeholder="Course Code" class="text" style="font-size:150%;font-weight:bold;width:80%;height:80%;padding:10px 10px 10px 10px;
border:2px solid black;color:black;border-radius:30px;background-color:#dde6f0;"><br>    

<p style="font-size:165%;color:black;margin:10px 10px 3px 10px;font-weight:bold;">     Course Name: </p><br>

<input type="text" name="cname" placeholder="Course Name" class="text" style="font-size:150%;font-weight:bold;width:80%;height:80%;padding:10px 10px 10px 10px;
border:2px solid black;color:black;border-radius:30px;background-color:#dde6f0;"><br>

<p style="font-size:165%;color:black;margin:10px 10px 3px 10px;font-weight:bold;">         Semester: </p><br>

<input type="text" name="sem" placeholder="Sem" class="text" style="font-size:150%;font-weight:bold;width:80%;height:80%;padding:10px 10px 10px 10px;
border:2px solid black;color:black;border-radius:30px;background-color:#dde6f0;"><br>

<p style="font-size:165%;color:black;margin:10px 10px 3px 10px;font-weight:bold;">       Year: </p><br>

<input type="text" name="year" placeholder="Year" class="text" style="font-size:150%;font-weight:bold;width:80%;height:80%;padding:10px 10px 10px 10px;
border:2px solid black;color:black;border-radius:30px;background-color:#dde6f0;"><br>

  <input type="submit" value="SUBMIT" style="font-family:Georgia, serif;font-size:200%;font-weight:bold;width:85%;height:80%;color:white;margin:30px 2px 15px 5px;border-radius:20px;background-color:black;"><br>
</form>
</div>
<br><br>
<div class="logout"><a href="dashboard.php">&#9654 HOME</a><br></div>
  

</body>
</html>