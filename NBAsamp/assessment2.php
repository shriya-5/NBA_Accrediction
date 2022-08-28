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
?>
<?php
$id=$_SESSION['username'];

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $conn=mysqli_connect("localhost","root","","nba");
    $id=$_SESSION['username'];
    $code=$_POST['course'];
    $q1=$_POST['max1'];
    $q2=$_POST['max2'];
    $q3=$_POST['max3'];
    $q4=$_POST['max4'];
    $q5=$_POST['max5'];
    $q6=$_POST['max6'];
    $q7=$_POST['max7'];
    $q8=$_POST['max8'];
    
    $sql1="insert into assess2 values('$id','$code',1,'0','0','0','0','0','0','$q1');";
    $res1=mysqli_query($conn,$sql1);
    $sql2="insert into assess2 values('$id','$code',2,'0','0','0','0','0','0','$q2');";
    $res2=mysqli_query($conn,$sql2);
    $sql3="insert into assess2 values('$id','$code',3,'0','0','0','0','0','0','$q3');";
    $res3=mysqli_query($conn,$sql3);
    $sql4="insert into assess2 values('$id','$code',4,'0','0','0','0','0','0','$q4');";
    $res4=mysqli_query($conn,$sql4);
    $sql5="insert into assess2 values('$id','$code',5,'0','0','0','0','0','0','$q5');";
    $res5=mysqli_query($conn,$sql5);
    $sql6="insert into assess2 values('$id','$code',6,'0','0','0','0','0','0','$q6');";
    $res6=mysqli_query($conn,$sql6);
    $sql7="insert into assess2 values('$id','$code',7,'0','0','0','0','0','0','$q7');";
    $res7=mysqli_query($conn,$sql7);
    $sql8="insert into assess2 values('$id','$code',8,'0','0','0','0','0','0','$q8');";
    $res8=mysqli_query($conn,$sql8);
      
    if(in_array('CO1', $_POST['ques1']))
    {
      $sql9="update assess2 set CO1=1 where staff_id='$id' and course_code='$code' and qno=1";
      $res9=mysqli_query($conn,$sql9);
    }
    if(in_array('CO2', $_POST['ques1']))
    {
      $sql10="update assess2 set CO2=1 where staff_id='$id' and course_code='$code' and qno=1";
      $res10=mysqli_query($conn,$sql10);
    }
    if(in_array('CO3', $_POST['ques1']))
    {
      $sql11="update assess2 set CO3=1 where staff_id='$id' and course_code='$code' and qno=1";
      $res11=mysqli_query($conn,$sql11);
    }
    if(in_array('CO4', $_POST['ques1']))
    {
      $sql12="update assess2 set CO4=1 where staff_id='$id' and course_code='$code' and qno=1";
      $res12=mysqli_query($conn,$sql12);
    }
    if(in_array('CO5', $_POST['ques1']))
    {
      $sql13="update assess2 set CO5=1 where staff_id='$id' and course_code='$code' and qno=1";
      $res13=mysqli_query($conn,$sql13);
    }
    if(in_array('CO6', $_POST['ques1']))
    {
      $sql14="update assess2 set CO6=1 where staff_id='$id' and course_code='$code' and qno=1";
      $res14=mysqli_query($conn,$sql14);
    }
    if(in_array('CO1', $_POST['ques2']))
    {
      $sql15="update assess2 set CO1=1 where staff_id='$id' and course_code='$code' and qno=2";
      $res15=mysqli_query($conn,$sql5);
    }
    if(in_array('CO2', $_POST['ques2']))
    {
      $sql16="update assess2 set CO2=1 where staff_id='$id' and course_code='$code' and qno=2";
      $res16=mysqli_query($conn,$sql16);
    }
    if(in_array('CO3', $_POST['ques2']))
    {
      $sql17="update assess2 set CO3=1 where staff_id='$id' and course_code='$code' and qno=2";
      $res17=mysqli_query($conn,$sql17);
    }
    if(in_array('CO4', $_POST['ques2']))
    {
      $sql18="update assess2 set CO4=1 where staff_id='$id' and course_code='$code' and qno=2";
      $res18=mysqli_query($conn,$sql18);
    }
    if(in_array('CO5', $_POST['ques2']))
    {
      $sql19="update assess2 set CO5=1 where staff_id='$id' and course_code='$code' and qno=2";
      $res19=mysqli_query($conn,$sql19);
    }
    if(in_array('CO6', $_POST['ques2']))
    {
      $sql20="update assess2 set CO6=1 where staff_id='$id' and course_code='$code' and qno=2";
      $res20=mysqli_query($conn,$sql20);
    }

if(in_array('CO1', $_POST['ques3']))
    {
      $sql21="update assess2 set CO1=1 where staff_id='$id' and course_code='$code' and qno=3";
      $res21=mysqli_query($conn,$sql21);
    }
    if(in_array('CO2', $_POST['ques3']))
    {
      $sql22="update assess2 set CO2=1 where staff_id='$id' and course_code='$code' and qno=3";
      $res22=mysqli_query($conn,$sql22);
    }
    if(in_array('CO3', $_POST['ques3']))
    {
      $sql23="update assess2 set CO3=1 where staff_id='$id' and course_code='$code' and qno=3";
      $res23=mysqli_query($conn,$sql23);
    }
    if(in_array('CO4', $_POST['ques3']))
    {
      $sql24="update assess2 set CO4=1 where staff_id='$id' and course_code='$code' and qno=3";
      $res24=mysqli_query($conn,$sql24);
    }
    if(in_array('CO5', $_POST['ques3']))
    {
      $sql25="update assess2 set CO5=1 where staff_id='$id' and course_code='$code' and qno=3";
      $res25=mysqli_query($conn,$sql25);
    }
    if(in_array('CO6', $_POST['ques3']))
    {
      $sql26="update assess2 set CO6=1 where staff_id='$id' and course_code='$code' and qno=3";
      $res26=mysqli_query($conn,$sql26);
    }
    
if(in_array('CO1', $_POST['ques4']))
    {
      $sql27="update assess2 set CO1=1 where staff_id='$id' and course_code='$code' and qno=4";
      $res27=mysqli_query($conn,$sql27);
    }
    if(in_array('CO2', $_POST['ques4']))
    {
      $sql28="update assess2 set CO2=1 where staff_id='$id' and course_code='$code' and qno=4";
      $res28=mysqli_query($conn,$sql28);
    }
    if(in_array('CO3', $_POST['ques4']))
    {
      $sql29="update assess2 set CO3=1 where staff_id='$id' and course_code='$code' and qno=4";
      $res29=mysqli_query($conn,$sql29);
    }
    if(in_array('CO4', $_POST['ques4']))
    {
      $sql30="update assess2 set CO4=1 where staff_id='$id' and course_code='$code' and qno=4";
      $res30=mysqli_query($conn,$sql30);
    }
    if(in_array('CO5', $_POST['ques4']))
    {
      $sql31="update assess2 set CO5=1 where staff_id='$id' and course_code='$code' and qno=4";
      $res31=mysqli_query($conn,$sql31);
    }
    if(in_array('CO6', $_POST['ques4']))
    {
      $sql32="update assess2 set CO6=1 where staff_id='$id' and course_code='$code' and qno=4";
      $res32=mysqli_query($conn,$sql32);
    }
if(in_array('CO1', $_POST['ques5']))
    {
      $sql33="update assess2 set CO1=1 where staff_id='$id' and course_code='$code' and qno=5";
      $res33=mysqli_query($conn,$sql33);
    }
    if(in_array('CO2', $_POST['ques5']))
    {
      $sql34="update assess2 set CO2=1 where staff_id='$id' and course_code='$code' and qno=5";
      $res34=mysqli_query($conn,$sql34);
    }
    if(in_array('CO3', $_POST['ques5']))
    {
      $sql35="update assess2 set CO3=1 where staff_id='$id' and course_code='$code' and qno=5";
      $res35=mysqli_query($conn,$sql35);
    }
    if(in_array('CO4', $_POST['ques5']))
    {
      $sql36="update assess2 set CO4=1 where staff_id='$id' and course_code='$code' and qno=5";
      $res36=mysqli_query($conn,$sql36);
    }
    if(in_array('CO5', $_POST['ques5']))
    {
      $sql37="update assess2 set CO5=1 where staff_id='$id' and course_code='$code' and qno=5";
      $res37=mysqli_query($conn,$sql37);
    }
    if(in_array('CO6', $_POST['ques5']))
    {
      $sql38="update assess2 set CO6=1 where staff_id='$id' and course_code='$code' and qno=5";
      $res38=mysqli_query($conn,$sql38);
    }
if(in_array('CO1', $_POST['ques6']))
    {
      $sql39="update assess2 set CO1=1 where staff_id='$id' and course_code='$code' and qno=6";
      $res39=mysqli_query($conn,$sql39);
    }
    if(in_array('CO2', $_POST['ques6']))
    {
      $sql40="update assess2 set CO2=1 where staff_id='$id' and course_code='$code' and qno=6";
      $res40=mysqli_query($conn,$sql40);
    }
    if(in_array('CO3', $_POST['ques6']))
    {
      $sql41="update assess2 set CO3=1 where staff_id='$id' and course_code='$code' and qno=6";
      $res41=mysqli_query($conn,$sql41);
    }
    if(in_array('CO4', $_POST['ques6']))
    {
      $sql42="update assess2 set CO4=1 where staff_id='$id' and course_code='$code' and qno=6";
      $res42=mysqli_query($conn,$sql42);
    }
    if(in_array('CO5', $_POST['ques6']))
    {
      $sql43="update assess2 set CO5=1 where staff_id='$id' and course_code='$code' and qno=6";
      $res43=mysqli_query($conn,$sql43);
    }
    if(in_array('CO6', $_POST['ques6']))
    {
      $sql44="update assess2 set CO6=1 where staff_id='$id' and course_code='$code' and qno=6";
      $res44=mysqli_query($conn,$sql44);
    }
if(in_array('CO1', $_POST['ques7']))
    {
      $sql45="update assess2 set CO1=1 where staff_id='$id' and course_code='$code' and qno=7";
      $res45=mysqli_query($conn,$sql45);
    }
    if(in_array('CO2', $_POST['ques7']))
    {
      $sql46="update assess2 set CO2=1 where staff_id='$id' and course_code='$code' and qno=7";
      $res46=mysqli_query($conn,$sql46);
    }
    if(in_array('CO3', $_POST['ques7']))
    {
      $sql47="update assess2 set CO3=1 where staff_id='$id' and course_code='$code' and qno=7";
      $res47=mysqli_query($conn,$sql47);
    }
    if(in_array('CO4', $_POST['ques7']))
    {
      $sql48="update assess2 set CO4=1 where staff_id='$id' and course_code='$code' and qno=7";
      $res48=mysqli_query($conn,$sql48);
    }
    if(in_array('CO5', $_POST['ques7']))
    {
      $sql49="update assess2 set CO5=1 where staff_id='$id' and course_code='$code' and qno=7";
      $res49=mysqli_query($conn,$sql49);
    }
    if(in_array('CO6', $_POST['ques7']))
    {
      $sql50="update assess2 set CO6=1 where staff_id='$id' and course_code='$code' and qno=7";
      $res50=mysqli_query($conn,$sql50);
    }

if(in_array('CO1', $_POST['ques8']))
    {
      $sql51="update assess2 set CO1=1 where staff_id='$id' and course_code='$code' and qno=8";
      $res51=mysqli_query($conn,$sql51);
    }
    if(in_array('CO2', $_POST['ques8']))
    {
      $sql52="update assess2 set CO2=1 where staff_id='$id' and course_code='$code' and qno=8";
      $res52=mysqli_query($conn,$sql52);
    }
    if(in_array('CO3', $_POST['ques8']))
    {
      $sql53="update assess2 set CO3=1 where staff_id='$id' and course_code='$code' and qno=8";
      $res53=mysqli_query($conn,$sql53);
    }
    if(in_array('CO4', $_POST['ques8']))
    {
      $sql54="update assess2 set CO4=1 where staff_id='$id' and course_code='$code' and qno=8";
      $res54=mysqli_query($conn,$sql54);
    }
    if(in_array('CO5', $_POST['ques8']))
    {
      $sql55="update assess2 set CO5=1 where staff_id='$id' and course_code='$code' and qno=8";
      $res55=mysqli_query($conn,$sql55);
    }
    if(in_array('CO6', $_POST['ques8']))
    {
      $sql56="update assess2 set CO6=1 where staff_id='$id' and course_code='$code' and qno=8";
      $res56=mysqli_query($conn,$sql56);
    }
        header("location: dashboard.php");
     
}

?>

<br>
<div class="heading">SET QP FOR ASSESSMENT 2</div><br><br>
        
        <div class="form-center">
<form action="#" name="signup" method="POST" style="font-size:160%;background-color:white;border:2px solid black;width:45%;height:60%;border-radius:20px;box-shadow: 0px 0px 10px 1px #000;padding:10px 0px 10px 40px;font-family:Georgia, serif;
    font-weight:bold;">

<?php

$id=$_SESSION['username'];
$conn=mysqli_connect("localhost","root","","nba");
      
$sql="Select course_code from course_details where staff_id='$id'";
$q=mysqli_query($conn,$sql);

echo "<label for='course'>COURSE : </label>";
echo    "<select name='course' id='course' style='width:45%;font-size:110%;background-color:#dde6f0;'>";
    
while($row = mysqli_fetch_assoc($q)) 
{        
echo "<option value='".$row['course_code']."'>".$row['course_code']."</option>"; 
}
echo  "</select>";
?>
<br>
<BR>
SET QUESTION<br><br>
Q1.<br>    
<input type="checkbox" id="CO1" name="ques1[]" value="CO1">
  <label for="CO1"> CO1</label>
  <input type="checkbox" id="CO2" name="ques1[]" value="CO2">
  <label for="CO2"> CO2</label>
  <input type="checkbox" id="CO3" name="ques1[]" value="CO3">
  <label for="CO3"> CO3</label>
  <input type="checkbox" id="CO4" name="ques1[]" value="CO4">
  <label for="CO4"> CO4</label>
  <input type="checkbox" id="CO5" name="ques1[]" value="CO5">
  <label for="CO5"> CO5</label>
  <input type="checkbox" id="CO6" name="ques1[]" value="CO6">
  <label for="CO6"> CO6</label><br><br>

Maximum Marks: <input type="number" name="max1" required placeholder="Max Mark" style="height:80%;width:45%;font-size:120%;background-color:#dde6f0;"><br><BR>

Q2.<br> 

<input type="checkbox" id="CO1" name="ques2[]" value="CO1">
  <label for="CO1"> CO1</label>
  <input type="checkbox" id="CO2" name="ques2[]" value="CO2">
  <label for="CO2"> CO2</label>
  <input type="checkbox" id="CO3" name="ques2[]" value="CO3">
  <label for="CO3"> CO3</label>
  <input type="checkbox" id="CO4" name="ques2[]" value="CO4">
  <label for="CO4"> CO4</label>
  <input type="checkbox" id="CO5" name="ques2[]" value="CO5">
  <label for="CO5"> CO5</label>
  <input type="checkbox" id="CO6" name="ques2[]" value="CO6">
  <label for="CO6"> CO6</label><br><br>

Maximum Marks: <input type="number" name="max2" required placeholder="Max Mark" style="height:80%;width:45%;font-size:120%;background-color:#dde6f0;"><br><br>

Q3.<br> 
    
<input type="checkbox" id="CO1" name="ques3[]" value="CO1">
  <label for="CO1"> CO1</label>
  <input type="checkbox" id="CO2" name="ques3[]" value="CO2">
  <label for="CO2"> CO2</label>
  <input type="checkbox" id="CO3" name="ques3[]" value="CO3">
  <label for="CO3"> CO3</label>
  <input type="checkbox" id="CO4" name="ques3[]" value="CO4">
  <label for="CO4"> CO4</label>
  <input type="checkbox" id="CO5" name="ques3[]" value="CO5">
  <label for="CO5"> CO5</label>
  <input type="checkbox" id="CO6" name="ques3[]" value="CO6">
  <label for="CO6"> CO6</label><br><br>

Maximum Marks: <input type="number" name="max3" required placeholder="Max Mark" style="height:80%;width:45%;font-size:120%;background-color:#dde6f0;"><br><br>

Q4.<br> 
    
<input type="checkbox" id="CO1" name="ques4[]" value="CO1">
  <label for="CO1"> CO1</label>
  <input type="checkbox" id="CO2" name="ques4[]" value="CO2">
  <label for="CO2"> CO2</label>
  <input type="checkbox" id="CO3" name="ques4[]" value="CO3">
  <label for="CO3"> CO3</label>
  <input type="checkbox" id="CO4" name="ques4[]" value="CO4">
  <label for="CO4"> CO4</label>
  <input type="checkbox" id="CO5" name="ques4[]" value="CO5">
  <label for="CO5"> CO5</label>
  <input type="checkbox" id="CO6" name="ques4[]" value="CO6">
  <label for="CO6"> CO6</label><br><br>

Maximum Marks: <input type="number" name="max4" required placeholder="Max Mark" style="height:80%;width:45%;font-size:120%;background-color:#dde6f0;"><br><br>

Q5.<br> 
    
<input type="checkbox" id="CO1" name="ques5[]" value="CO1">
  <label for="CO1"> CO1</label>
  <input type="checkbox" id="CO2" name="ques5[]" value="CO2">
  <label for="CO2"> CO2</label>
  <input type="checkbox" id="CO3" name="ques5[]" value="CO3">
  <label for="CO3"> CO3</label>
  <input type="checkbox" id="CO4" name="ques5[]" value="CO4">
  <label for="CO4"> CO4</label>
  <input type="checkbox" id="CO5" name="ques5[]" value="CO5">
  <label for="CO5"> CO5</label>
  <input type="checkbox" id="CO6" name="ques5[]" value="CO6">
  <label for="CO6"> CO6</label><br><br>

Maximum Marks: <input type="number" name="max5" required placeholder="Max Mark" style="height:80%;width:45%;font-size:120%;background-color:#dde6f0;"><br><br>

Q6. 
<br>     
<input type="checkbox" id="CO1" name="ques6[]" value="CO1">
  <label for="CO1"> CO1</label>
  <input type="checkbox" id="CO2" name="ques6[]" value="CO2">
  <label for="CO2"> CO2</label>
  <input type="checkbox" id="CO3" name="ques6[]" value="CO3">
  <label for="CO3"> CO3</label>
  <input type="checkbox" id="CO4" name="ques6[]" value="CO4">
  <label for="CO4"> CO4</label>
  <input type="checkbox" id="CO5" name="ques6[]" value="CO5">
  <label for="CO5"> CO5</label>
  <input type="checkbox" id="CO6" name="ques6[]" value="CO6">
  <label for="CO6"> CO6</label><br><br>

Maximum Marks: <input type="number" name="max6" required placeholder="Max Mark" style="height:80%;width:45%;font-size:120%;background-color:#dde6f0;"><br><br>

Q7. 
<br>    
<input type="checkbox" id="CO1" name="ques7[]" value="CO1">
  <label for="CO1"> CO1</label>
  <input type="checkbox" id="CO2" name="ques7[]" value="CO2">
  <label for="CO2"> CO2</label>
  <input type="checkbox" id="CO3" name="ques7[]" value="CO3">
  <label for="CO3"> CO3</label>
  <input type="checkbox" id="CO4" name="ques7[]" value="CO4">
  <label for="CO4"> CO4</label>
  <input type="checkbox" id="CO5" name="ques7[]" value="CO5">
  <label for="CO5"> CO5</label>
  <input type="checkbox" id="CO6" name="ques7[]" value="CO6">
  <label for="CO6"> CO6</label><br><br>

 Maximum Marks: <input type="number" name="max7" required placeholder="Max Mark" style="height:80%;width:45%;font-size:120%;background-color:#dde6f0;"><br><BR>

Q8. 
<br>     
<input type="checkbox" id="CO1" name="ques8[]" value="CO1">
  <label for="CO1"> CO1</label>
  <input type="checkbox" id="CO2" name="ques8[]" value="CO2">
  <label for="CO2"> CO2</label>
  <input type="checkbox" id="CO3" name="ques8[]" value="CO3">
  <label for="CO3"> CO3</label>
  <input type="checkbox" id="CO4" name="ques8[]" value="CO4">
  <label for="CO4"> CO4</label>
  <input type="checkbox" id="CO5" name="ques8[]" value="CO5">
  <label for="CO5"> CO5</label>
  <input type="checkbox" id="CO6" name="ques8[]" value="CO6">
  <label for="CO6"> CO6</label><br><br>

Maximum Marks: <input type="number" name="max8" required placeholder="Max Mark" style="height:80%;width:45%;font-size:120%;background-color:#dde6f0;"><br><br>

  <input type="submit" value="SUBMIT" style="font-family:Georgia, serif;font-size:150%;font-weight:bold;width:85%;height:80%;color:white;margin:30px 2px 15px 5px;border-radius:20px;background-color:black;"><br>
</form>
</div>
<br><br>
<div class="logout"><a href="dashboard.php">&#9654 HOME</a><br></div>
  
        

</body>
</html>