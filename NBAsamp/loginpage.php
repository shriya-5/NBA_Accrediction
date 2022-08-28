<!DOCTYPE html>
<html>
  <head>
   <link rel="stylesheet" href="style.css">
   <style>
body{
font-family:Georgia, serif;
background-color:#dde6f0;}
::placeholder {
  color: black;
  opacity: 0.9;
} 
 .login {
  border:2px solid black;
  border-radius:20px;
  align:center; 
  height: 355px;
  width: 405px;
  margin: 80px 409px;
  padding: 40px 95px 90px 55px;
  background: white;   
  background-size: cover;
  box-shadow: 0px 0px 10px 1px #000;
  font-family:Georgia, serif;

}

form {
  padding-top: 20px;
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

.login .text:focus {
  outline: ;
  border: 2px solid rgba(255, 255, 255, 0.5);
  border-radius: 20px;
  
font-family:Georgia, serif;
font-size:160%;

}

.login .text:focus + span {
  opacity: 0.6;
}

.login input[type="text"],
.login input[type="password"],
.login input[type="email"] {
  font-family:Georgia, serif;
  color: #fff;
font-family:Georgia, serif;

}


.login input {
  display: inline-block;
  padding-top: 20px;
  font-size: 14px;
font-family:Georgia, serif;

}

.regform input[type="submit"]
{
    background-color:red;
    color: #fff;
    width: 60%;
    padding: 10px 20px;
    display: block;
    height: 39px;
    border-radius: 20px;
    margin-top: 20px;
    margin-left: 80px;
    border: none;  
  font-family:Georgia, serif;
  
}



.header
{
  background-color:red;
  color: black;
  font-family:Georgia, serif;
  font-size: 250%;
  text-align: center;
  padding-top: 20px;
  padding-bottom: 20px;
  margin: -7px -7px ;
}
</style>
  </head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{

session_start();

$conn=mysqli_connect("localhost","root","","nba");

$un = $_POST['username'];
$p = $_POST['password'];

$sql = "select * from staff_details where username='$un' and Password_='$p'";
$res = mysqli_query($conn,$sql);
$a= mysqli_num_rows($res);

if($a>0)
{
    $_SESSION['username']=$un;
    header("location: dashboard.php");
}
else
{
    echo "<script type='text/javascript'>alert('Wrong Username/ Password');</script>";
}
}

?>
<br>
<div style="font-family:Georgia, serif;color:white;font-weight:1000;text-align:center;
font-size:300%;background-color:#006994;">
SIGN IN

</div>

<hr style="width:50%;text-align:center;background-color: black;">
        <br>

<div class="login">
  <form action="#" name="login" method="POST">  
    <input type="text" class="text" name="username" placeholder="Username" style="font-family:Georgia, serif;font-size:150%;font-weight:bold;width:100%;height:65%;border:2px solid black;color:black;background-color:#dde6f0;">
    <br>
    <br>
    <input type="password" class="text" name="password" placeholder="Password" style="font-family:Georgia, serif;font-size:150%;font-weight:bold;width:100%;height:65%;border:2px solid black;color:black;background-color:#dde6f0;">
    <br>
    <button class="signin" style="font-family:Georgia, serif;font-size:150%;font-weight:bold;width:110%;height:65%;color:white;margin:40px 2px 0px 5px;">
      SIGN IN
    </button>
    <hr>
    <a href="registration.php" style="font-family:Georgia, serif;font-size:125%;font-weight:bold;color:black;margin:-20px 0px 0px 30px;"><b>SIGN UP/REGISTER</b></a>
  </form>
</div>

<br>
</body>
</html>
