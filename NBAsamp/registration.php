<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <style>
 body{
font-family:Georgia, serif;
background-color:#dde6f0;

}
  ::placeholder {color:black;font-family:Georgia, serif;
  text-align:center;font-weight:normal;
}
.login .text {
  border: none;
  text-align: center;
  width: 80%;
  padding: 10px 20px;
  display: block;
  height: 15px;
  border-radius: 30px;
  background: white;

  border: 2px solid rgba(255, 255, 255, 0);
  overflow:hidden ;
  margin-top: 15px;
font-family:Georgia, serif;

}
.form-center {
	display:flex;
	justify-content: center;
}

        </style>
        
       </head>
<body>

<?php

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $n=$_POST['name'];
    $e=$_POST['email'];
    $un=$_POST['username'];
    $pwd=$_POST['password'];

    $txt="Registration Successful";
    
    if($txt=="Registration Successful")
    {
      $conn=mysqli_connect("localhost","root","","nba");
      $sql="insert into staff_details values('$n','$e','$un','$pwd');";
      $res=mysqli_query($conn,$sql);
      if(!$res)
      {
        echo "Error: ".mysqli_error($conn);
      }
      else
      {
        echo "<script type='text/javascript'>alert('$txt');</script>";
        header("location: loginpage.php");
        echo "<script type='text/javascript'>alert('$txt');</script>";
      }
    }
    
    echo "<script type='text/javascript'>alert('$txt');</script>";

}

?>

<br>
<div class="heading" style="font-family:Georgia, serif;color:white;font-weight:1000;text-align:center;
font-size:300%;background-color:#006994;">SIGN UP</div>

        <br>
        <br>
        <div class="form-center">
<form action="#" name="signup" method="POST" style="font-family:Georgia, serif;vertical-align:center;padding: 40px 10px 90px 60px;font-size: 100%;background-color:white;width:30%;border-radius:20px;box-shadow: 0px 0px 10px 1px #000;
border: 2px solid black;height:95%;">

<p style="font-size:165%;color:black;margin:10px 10px 3px 10px;font-weight:bold;">      User Name/Staff ID: </p> <br>

<input type="text" name="username" placeholder="Username" class="text" style="font-size:150%;font-weight:bold;width:80%;height:80%;padding:10px 10px 10px 10px;
border:2px solid black;color:black;border-radius:30px;background-color:#dde6f0;"><br>

<p style="font-size:165%;color:black;font-weight:bold;margin:10px 10px 5px 10px;">
    Name:</p> <br>

 <input type="text" name="name" placeholder="Name" class="text" style="font-size:150%;font-weight:bold;width:80%;height:80%;padding:10px 10px 10px 10px;
border:2px solid black;color:black;border-radius:30px;background-color:#dde6f0;"><br>

<p style="font-size:165%;color:black;font-weight:bold;margin:10px 10px 5px 10px;">
   Password: </p> <br>

<input type="password" name="password" placeholder="Password" class="text" style="font-size:150%;font-weight:bold;width:80%;height:80%;padding:10px 10px 10px 10px;
border:2px solid black;color:black;border-radius:30px;background-color:#dde6f0;""><br>

<p style="font-size:165%;color:black;font-weight:bold;margin:10px 10px 5px 10px;">
    E-mail: </p> <br>

<input type="email" name="email" required class="text" placeholder="Email" style="font-size:150%;font-weight:bold;width:80%;height:80%;padding:10px 10px 10px 10px;
border:2px solid black;color:black;border-radius:30px;background-color:#dde6f0;"><br>
  
  <input type="submit" value="SUBMIT" style="font-size:200%;font-weight:bold;width:85%;height:80%;color:white;margin:45px 2px -15px 5px;border-radius:20px;background-color:black;"><br>
</form>
</div>

        

</body>
</html>