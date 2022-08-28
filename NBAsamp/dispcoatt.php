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
<div class="heading"  style="font-family:Georgia, serif;font-weight:bold;">
CO Attaintment %</div>
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
$sql = "select * from assess1co where course_code='$course' and staff_id='$id'";
$res = mysqli_query($conn,$sql);
$a= mysqli_num_rows($res);

$sql1="select round(AVG(CO1),2) AS co1_avg FROM assess1co";
$result = mysqli_query($conn, $sql1); 
$row1 = mysqli_fetch_assoc($result); 
$co1avg = $row1['co1_avg'];

$sql2="select round(AVG(CO2),2) AS co2_avg FROM assess1co";
$result2 = mysqli_query($conn, $sql2); 
$row2 = mysqli_fetch_assoc($result2); 
$co2avg = $row2['co2_avg'];

$sql3="select round(AVG(CO3),2) AS co3_avg FROM assess1co";
$result3 = mysqli_query($conn, $sql3); 
$row3 = mysqli_fetch_assoc($result3); 
$co3avg = $row3['co3_avg'];

$sql4="select round(AVG(CO4),2) AS co4_avg FROM assess1co";
$result4 = mysqli_query($conn, $sql4); 
$row4 = mysqli_fetch_assoc($result4); 
$co4avg = $row4['co4_avg'];

$sql5="select round(AVG(CO5),2) AS co5_avg FROM assess1co";
$result5 = mysqli_query($conn, $sql5); 
$row5 = mysqli_fetch_assoc($result5); 
$co5avg = $row5['co5_avg'];

$sql6="select round(AVG(CO6),2) AS co6_avg FROM assess1co";
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
    while($row=mysqli_fetch_assoc($res))
    {
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

$sql7 = "select * from assess2co where course_code='$course' and staff_id='$id'";
$res7 = mysqli_query($conn,$sql7);
$a1= mysqli_num_rows($res7);

$sql8="select round(AVG(CO1),2) AS co1_avg FROM assess2co";
$result8 = mysqli_query($conn, $sql8); 
$row8 = mysqli_fetch_assoc($result8); 
$co1avg1 = $row8['co1_avg'];

$sql9="select round(AVG(CO2),2) AS co2_avg FROM assess2co";
$result9 = mysqli_query($conn, $sql9); 
$row9 = mysqli_fetch_assoc($result9); 
$co2avg1 = $row9['co2_avg'];

$sql10="select round(AVG(CO3),2) AS co3_avg FROM assess2co";
$result10 = mysqli_query($conn, $sql10); 
$row10 = mysqli_fetch_assoc($result10); 
$co3avg1 = $row10['co3_avg'];

$sql11="select round(AVG(CO4),2) AS co4_avg FROM assess2co";
$result11 = mysqli_query($conn, $sql11); 
$row11 = mysqli_fetch_assoc($result11); 
$co4avg1 = $row11['co4_avg'];

$sql12="select round(AVG(CO5),2) AS co5_avg FROM assess2co";
$result12 = mysqli_query($conn, $sql12); 
$row12 = mysqli_fetch_assoc($result12); 
$co5avg1 = $row12['co5_avg'];

$sql3="select round(AVG(CO6),2) AS co6_avg FROM assess2co";
$result13 = mysqli_query($conn, $sql3); 
$row13 = mysqli_fetch_assoc($result13); 
$co6avg1 = $row13['co6_avg'];

$cnt8=0;
$cnt9=0;
$cnt10=0;
$cnt11=0;
$cnt12=0;
$cnt13=0;

if($a1>0)
{
    while($row=mysqli_fetch_assoc($res7))
    {
        if($row['CO1']>=$co1avg1)
        {
            $cnt8++;
        }
        if($row['CO2']>=$co2avg1)
        {
            $cnt9++;
        }
        if($row['CO3']>=$co3avg1)
        {
            $cnt10++;
        }
        if($row['CO4']>=$co4avg1)
        {
            $cnt11++;
        }
        if($row['CO5']>=$co5avg1)
        {
            $cnt12++;
        }
        if($row['CO6']>=$co6avg1)
        {
            $cnt13++;
        }

    }
}

if($co1avg1==0)
{
    $p8=0;
}
else
{
    $p8=round(($cnt8/$a1)*100,2);
}

if($co2avg1==0)
{
    $p9=0;
}
else
{
    $p9=round(($cnt9/$a1)*100,2);
}
if($co3avg1==0)
{
    $p10=0;
}
else
{
    $p10=round(($cnt10/$a1)*100,2);
}
if($co4avg1==0)
{
    $p11=0;
}
else
{
    $p11=round(($cnt11/$a1)*100,2);
}
if($co5avg1==0)
{
    $p12=0;
}
else
{
    $p12=round(($cnt12/$a1)*100,2);
}
if($co6avg1==0)
{
    $p13=0;
}
else
{
    $p13=round(($cnt13/$a)*100,2);
}

$sql14 = "select * from endsemco where course_code='$course' and staff_id='$id'";
$res14 = mysqli_query($conn,$sql14);
$a2= mysqli_num_rows($res14);

$sql15="select round(AVG(CO1),2) AS co1_avg FROM endsemco";
$result15 = mysqli_query($conn, $sql15); 
$row15 = mysqli_fetch_assoc($result15); 
$co1avg2 = $row15['co1_avg'];

$sql16="select round(AVG(CO2),2) AS co2_avg FROM endsemco";
$result16 = mysqli_query($conn, $sql16); 
$row16 = mysqli_fetch_assoc($result16); 
$co2avg2 = $row16['co2_avg'];

$sql17="select round(AVG(CO3),2) AS co3_avg FROM endsemco";
$result17 = mysqli_query($conn, $sql17); 
$row17 = mysqli_fetch_assoc($result17); 
$co3avg2 = $row17['co3_avg'];

$sql18="select round(AVG(CO4),2) AS co4_avg FROM endsemco";
$result41 = mysqli_query($conn, $sql18); 
$row18 = mysqli_fetch_assoc($result41); 
$co4avg2 = $row18['co4_avg'];

$sql19="select round(AVG(CO5),2) AS co5_avg FROM endsemco";
$result51 = mysqli_query($conn, $sql19); 
$row19 = mysqli_fetch_assoc($result51); 
$co5avg2 = $row19['co5_avg'];

$sql20="select round(AVG(CO6),2) AS co6_avg FROM endsemco";
$result61 = mysqli_query($conn, $sql20); 
$row20 = mysqli_fetch_assoc($result61); 
$co6avg2= $row20['co6_avg'];

$cnt14=0;
$cnt15=0;
$cnt16=0;
$cnt17=0;
$cnt18=0;
$cnt19=0;

if($a2>0)
{
    while($row=mysqli_fetch_assoc($res14))
    {
        if($row['CO1']>=$co1avg2)
        {
            $cnt14++;
        }
        if($row['CO2']>=$co2avg2)
        {
            $cnt15++;
        }
        if($row['CO3']>=$co3avg2)
        {
            $cnt16++;
        }
        if($row['CO4']>=$co4avg2)
        {
            $cnt17++;
        }
        if($row['CO5']>=$co5avg2)
        {
            $cnt18++;
        }
        if($row['CO6']>=$co6avg2)
        {
            $cnt19++;
        }
    }
}

if($co1avg2==0)
{
    $p14=0;
}
else
{
    $p14=round(($cnt14/$a2)*100,2);
}

if($co2avg2==0)
{
    $p15=0;
}
else
{
    $p15=round(($cnt15/$a2)*100,2);
}
if($co3avg2==0)
{
    $p16=0;
}
else
{
    $p16=round(($cnt16/$a2)*100,2);
}
if($co4avg2==0)
{
    $p17=0;
}
else
{
    $p17=round(($cnt17/$a2)*100,2);
}
if($co5avg2==0)
{
    $p18=0;
}
else
{
    $p18=round(($cnt18/$a2)*100,2);
}
if($co6avg2==0)
{
    $p19=0;
}
else
{
    $p19=round(($cnt19/$a2)*100,2);
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
    
echo "<tr><td>Assessment 1</td><td>".$p1."</td><td>".$p2."</td><td>".$p3."</td><td>".$p4."</td><td>".$p5."</td><td>".$p6."</td></tr>";
echo "<tr><td>Assessment 2</td><td>".$p8."</td><td>".$p9."</td><td>".$p10."</td><td>".$p11."</td><td>".$p12."</td><td>".$p13."</td></tr>";
echo "<tr><td>End Sem</td><td>".$p14."</td><td>".$p15."</td><td>".$p16."</td><td>".$p17."</td><td>".$p18."</td><td>".$p19."</td></tr>";
echo "</table>";

echo "<br><br><div class='heading' style='font-family:Georgia, serif;font-weight:bold;'>LEVELS OF DIRECT ATTAINTMENT %</div>";

if($p1>1 && $p1<60)
{
    $s1=1;
}
else if($p1>=60 && $p1<80)
{
    $s1=2;
}
else if($p1>=80 && $p1<=100)
{
    $s1=3;
}
else
{
    $s1=0;
}

if($p2>1 && $p2<60)
{
    $s2=1;
}
else if($p2>=60 && $p2<80)
{
    $s2=2;
}
else if($p2>=80 && $p2<=100)
{
    $s2=3;
}
else
{
    $s4=0;
}

if($p3>1 && $p3<60)
{
    $s3=1;
}
else if($p3>=60 && $p3<80)
{
    $s3=2;
}
else if($p3>=80 && $p3<=100)
{
    $s3=3;
}
else
{
    $s3=0;
}


if($p4>1 && $p4<60)
{
    $s4=1;
}
else if($p4>=60 && $p4<80)
{
    $s4=2;
}
else if($p4>=80 && $p4<=100)
{
    $s4=3;
}
else
{
    $s4=0;
}

if($p5>1 && $p5<60)
{
    $s5=1;
}
else if($p5>=60 && $p5<80)
{
    $s5=2;
}
else if($p5>=80 && $p5<=100)
{
    $s5=3;
}
else
{
    $s5=0;
}

if($p6>1 && $p6<60)
{
    $s6=1;
}
else if($p6>=60 && $p6<80)
{
    $s6=2;
}
else if($p6>=80 && $p6<=100)
{
   $s6=3;
}

else
{
    $s6=0;
}

if($p8>1 && $p8<60)
{
    $s8=1;
}
else if($p8>=60 && $p8<80)
{
    $s8=2;
}
else if($p8>=80 && $p8<=100)
{
    $s8=3;
}
else
{
    $s8=0;
}

if($p9>1 && $p9<60)
{
    $s9=1;
}
else if($p9>=60 && $p9<80)
{
    $s9=2;
}
else if($p9>=80 && $p9<=100)
{
    $s9=3;
}
else
{
    $s9=0;
}

if($p10>1 && $p10<60)
{
    $s10=1;
}
else if($p10>=60 && $p10<80)
{
    $s10=2;
}
else if($p10>=80 && $p10<=100)
{
    $s10=3;
}
else
{
    $s10=0;
}


if($p11>1 && $p11<60)
{
    $s11=1;
}
else if($p11>=60 && $p11<80)
{
    $s11=2;
}
else if($p1>=80 && $p1<=100)
{
    $s11=3;
}
else
{
    $s11=0;
}

if($p12>1 && $p12<60)
{
    $s12=1;
}
else if($p12>=60 && $p12<80)
{
    $s12=2;
}
else if($p12>=80 && $p12<=100)
{
    $s12=3;
}
else
{
    $s12=0;
}

if($p13>1 && $p13<60)
{
    $s13=1;
}
else if($p13>=60 && $p13<80)
{
    $s13=2;
}
else if($p13>=80 && $p13<=100)
{
    $s13=3;
}
else
{
    $s13=0;
}

if($p14>1 && $p14<60)
{
    $s14=1;
}
else if($p14>=60 && $p14<80)
{
    $s14=2;
}
else if($p14>=80 && $p14<=100)
{
    $s14=3;
}
else
{
    $s14=0;
}

if($p15>1 && $p15<60)
{
    $s15=1;
}
else if($p15>=60 && $p15<80)
{
    $s15=2;
}
else if($p15>=80 && $p15<=100)
{
    $s15=3;
}
else
{
    $s15=0;
}

if($p16>1 && $p16<60)
{
    $s16=1;
}
else if($p16>=60 && $p16<80)
{
    $s16=2;
}
else if($p16>=80 && $p16<=100)
{
    $s16=3;
}
else
{
    $s16=0;
}

if($p17>1 && $p17<60)
{
    $s17=1;
}
else if($p17>=60 && $p17<80)
{
    $s17=2;
}
else if($p17>=80 && $p17<=100)
{
    $s17=3;
}
else
{
    $s17=0;
}

if($p18>1 && $p18<60)
{
    $s18=1;
}
else if($p18>=60 && $p18<80)
{
    $s18=2;
}
else if($p18>=80 && $p18<=100)
{
    $s18=3;
}
else
{
    $s18=0;
}

if($p19>1 && $p19<60)
{
    $s19=1;
}
else if($p19>=60 && $p19<80)
{
    $s19=2;
}
else if($p19>=80 && $p19<=100)
{
    $s19=3;
}
else
{
    $s19=0;
}

echo "<br><br><table>
    <tr>
      <th></th>
      <th>CO1</th>
      <th>CO2</th>
      <th>CO3</th>
      <th>CO4</th>
      <th>CO5</th>
      <th>CO6</th>
    </tr>";
    
echo "<tr><td>Assessment 1</td><td>".$s1."</td><td>".$s2."</td><td>".$s3."</td><td>".$s4."</td><td>".$s5."</td><td>".$s6."</td></tr>";
echo "<tr><td>Assessment 2</td><td>".$s8."</td><td>".$s9."</td><td>".$s10."</td><td>".$s11."</td><td>".$s12."</td><td>".$s13."</td></tr>";
echo "<tr><td>End Sem</td><td>".$s14."</td><td>".$s15."</td><td>".$s16."</td><td>".$s17."</td><td>".$s18."</td><td>".$s19."</td></tr>";
echo "</table>";

echo "<br><br><br>";

$n1=$n2=$n3=$n4=$n5=$n6=0;

if($s1 != 0)
{
    $n1++;
}
if($s8 != 0)
{
    $n1++;
}

if($s2 != 0)
{
    $n2++;
}
if($s9 != 0)
{
    $n2++;
}

if($s3 != 0)
{
    $n3++;
}
if($s10 != 0)
{
    $n3++;
}

if($s4 != 0)
{
    $n4++;
}
if($s11 != 0)
{
    $n4++;
}

if($s5 != 0)
{
    $n5++;
}
if($s12 != 0)
{
    $n5++;
}

if($s6 != 0)
{
    $n6++;
}
if($s13 != 0)
{
    $n6++;
}

if($n1!=0)
{
    $k1=($s1+$s8)/$n1;
}
else
{
    $k1=0;
}

if($n2!=0)
{
    $k2=($s2+$s9)/$n2;
}
else
{
    $k2=0;
}

if($n3!=0)
{
    $k3=($s3+$s10)/$n3;
}
else
{
    $k3=0;
}

if($n4!=0)
{
    $k4=($s4+$s11)/$n4;
}
else
{
    $k4=0;
}

if($n5!=0)
{
    $k5=($s5+$s12)/$n5;
}
else
{
    $k5=0;
}

if($n6!=0)
{
    $k6=($s6+$s13)/$n6;
}
else
{
    $k6=0;
}

echo "<br><br><table>
    <tr>
      <th></th>
      <th>CO1</th>
      <th>CO2</th>
      <th>CO3</th>
      <th>CO4</th>
      <th>CO5</th>
      <th>CO6</th>
    </tr>";
    
echo "<tr><td>Internal Assessment 1</td><td>".$k1."</td><td>".$k2."</td><td>".$k3."</td><td>".$k4."</td><td>".$k5."</td><td>".$k6."</td></tr>";
echo "<tr><td>End Sem</td><td>".$s14."</td><td>".$s15."</td><td>".$s16."</td><td>".$s17."</td><td>".$s18."</td><td>".$s19."</td></tr>";
echo "</table>";

}
?>

<br><br>

<div class="logout"><a href="dashboard.php">&#9654 HOME</a><br></div>

</body>
</html>