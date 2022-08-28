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
    $q9=$_POST['max9'];
    $q10=$_POST['max10'];
    $q11=$_POST['max11'];
    $q12=$_POST['max12'];
    $q13=$_POST['max13'];
    $q14=$_POST['max14'];
    $q15=$_POST['max15'];
    $q16=$_POST['max16'];
    
    $sql1="insert into endsem values('$id','$code',1,'0','0','0','0','0','0','$q1');";
    $res1=mysqli_query($conn,$sql1);
    $sql2="insert into endsem values('$id','$code',2,'0','0','0','0','0','0','$q2');";
    $res2=mysqli_query($conn,$sql2);
    $sql3="insert into endsem values('$id','$code',3,'0','0','0','0','0','0','$q3');";
    $res3=mysqli_query($conn,$sql3);
    $sql4="insert into endsem values('$id','$code',4,'0','0','0','0','0','0','$q4');";
    $res4=mysqli_query($conn,$sql4);
    $sql5="insert into endsem values('$id','$code',5,'0','0','0','0','0','0','$q5');";
    $res5=mysqli_query($conn,$sql5);
    $sql6="insert into endsem values('$id','$code',6,'0','0','0','0','0','0','$q6');";
    $res6=mysqli_query($conn,$sql6);
    $sql7="insert into endsem values('$id','$code',7,'0','0','0','0','0','0','$q7');";
    $res7=mysqli_query($conn,$sql7);
    $sql8="insert into endsem values('$id','$code',8,'0','0','0','0','0','0','$q8');";
    $res8=mysqli_query($conn,$sql8);
 
    $sql9="insert into endsem values('$id','$code',9,'0','0','0','0','0','0','$q9');";
    $res9=mysqli_query($conn,$sql9);
    $sql10="insert into endsem values('$id','$code',10,'0','0','0','0','0','0','$q10');";
    $res10=mysqli_query($conn,$sql10);
    $sql11="insert into endsem values('$id','$code',11,'0','0','0','0','0','0','$q11');";
    $res11=mysqli_query($conn,$sql11);
    $sql12="insert into endsem values('$id','$code',12,'0','0','0','0','0','0','$q12');";
    $res12=mysqli_query($conn,$sql12);
    $sql13="insert into endsem values('$id','$code',13,'0','0','0','0','0','0','$q13');";
    $res13=mysqli_query($conn,$sql13);
    $sql14="insert into endsem values('$id','$code',14,'0','0','0','0','0','0','$q14');";
    $res14=mysqli_query($conn,$sql14);
    $sql15="insert into endsem values('$id','$code',15,'0','0','0','0','0','0','$q15');";
    $res15=mysqli_query($conn,$sql15);
    $sql16="insert into endsem values('$id','$code',16,'0','0','0','0','0','0','$q16');";
    $res16=mysqli_query($conn,$sql16);
      
    if(in_array('CO1', $_POST['ques1']))
    {
      $sql9="update endsem set CO1=1 where staff_id='$id' and course_code='$code' and qno=1";
      $res9=mysqli_query($conn,$sql9);
    }
    if(in_array('CO2', $_POST['ques1']))
    {
      $sql10="update endsem set CO2=1 where staff_id='$id' and course_code='$code' and qno=1";
      $res10=mysqli_query($conn,$sql10);
    }
    if(in_array('CO3', $_POST['ques1']))
    {
      $sql11="update endsem set CO3=1 where staff_id='$id' and course_code='$code' and qno=1";
      $res11=mysqli_query($conn,$sql11);
    }
    if(in_array('CO4', $_POST['ques1']))
    {
      $sql12="update endsem set CO4=1 where staff_id='$id' and course_code='$code' and qno=1";
      $res12=mysqli_query($conn,$sql12);
    }
    if(in_array('CO5', $_POST['ques1']))
    {
      $sql13="update endsem set CO5=1 where staff_id='$id' and course_code='$code' and qno=1";
      $res13=mysqli_query($conn,$sql13);
    }
    if(in_array('CO6', $_POST['ques1']))
    {
      $sql14="update endsem set CO6=1 where staff_id='$id' and course_code='$code' and qno=1";
      $res14=mysqli_query($conn,$sql14);
    }
    if(in_array('CO1', $_POST['ques2']))
    {
      $sql15="update endsem set CO1=1 where staff_id='$id' and course_code='$code' and qno=2";
      $res15=mysqli_query($conn,$sql5);
    }
    if(in_array('CO2', $_POST['ques2']))
    {
      $sql16="update endsem set CO2=1 where staff_id='$id' and course_code='$code' and qno=2";
      $res16=mysqli_query($conn,$sql16);
    }
    if(in_array('CO3', $_POST['ques2']))
    {
      $sql17="update endsem set CO3=1 where staff_id='$id' and course_code='$code' and qno=2";
      $res17=mysqli_query($conn,$sql17);
    }
    if(in_array('CO4', $_POST['ques2']))
    {
      $sql18="update endsem set CO4=1 where staff_id='$id' and course_code='$code' and qno=2";
      $res18=mysqli_query($conn,$sql18);
    }
    if(in_array('CO5', $_POST['ques2']))
    {
      $sql19="update endsem set CO5=1 where staff_id='$id' and course_code='$code' and qno=2";
      $res19=mysqli_query($conn,$sql19);
    }
    if(in_array('CO6', $_POST['ques2']))
    {
      $sql20="update endsem set CO6=1 where staff_id='$id' and course_code='$code' and qno=2";
      $res20=mysqli_query($conn,$sql20);
    }

if(in_array('CO1', $_POST['ques3']))
    {
      $sql21="update endsem set CO1=1 where staff_id='$id' and course_code='$code' and qno=3";
      $res21=mysqli_query($conn,$sql21);
    }
    if(in_array('CO2', $_POST['ques3']))
    {
      $sql22="update endsem set CO2=1 where staff_id='$id' and course_code='$code' and qno=3";
      $res22=mysqli_query($conn,$sql22);
    }
    if(in_array('CO3', $_POST['ques3']))
    {
      $sql23="update endsem set CO3=1 where staff_id='$id' and course_code='$code' and qno=3";
      $res23=mysqli_query($conn,$sql23);
    }
    if(in_array('CO4', $_POST['ques3']))
    {
      $sql24="update endsem set CO4=1 where staff_id='$id' and course_code='$code' and qno=3";
      $res24=mysqli_query($conn,$sql24);
    }
    if(in_array('CO5', $_POST['ques3']))
    {
      $sql25="update endsem set CO5=1 where staff_id='$id' and course_code='$code' and qno=3";
      $res25=mysqli_query($conn,$sql25);
    }
    if(in_array('CO6', $_POST['ques3']))
    {
      $sql26="update endsem set CO6=1 where staff_id='$id' and course_code='$code' and qno=3";
      $res26=mysqli_query($conn,$sql26);
    }
    
if(in_array('CO1', $_POST['ques4']))
    {
      $sql27="update endsem set CO1=1 where staff_id='$id' and course_code='$code' and qno=4";
      $res27=mysqli_query($conn,$sql27);
    }
    if(in_array('CO2', $_POST['ques4']))
    {
      $sql28="update endsem set CO2=1 where staff_id='$id' and course_code='$code' and qno=4";
      $res28=mysqli_query($conn,$sql28);
    }
    if(in_array('CO3', $_POST['ques4']))
    {
      $sql29="update endsem set CO3=1 where staff_id='$id' and course_code='$code' and qno=4";
      $res29=mysqli_query($conn,$sql29);
    }
    if(in_array('CO4', $_POST['ques4']))
    {
      $sql30="update endsem set CO4=1 where staff_id='$id' and course_code='$code' and qno=4";
      $res30=mysqli_query($conn,$sql30);
    }
    if(in_array('CO5', $_POST['ques4']))
    {
      $sql31="update endsem set CO5=1 where staff_id='$id' and course_code='$code' and qno=4";
      $res31=mysqli_query($conn,$sql31);
    }
    if(in_array('CO6', $_POST['ques4']))
    {
      $sql32="update endsem set CO6=1 where staff_id='$id' and course_code='$code' and qno=4";
      $res32=mysqli_query($conn,$sql32);
    }
if(in_array('CO1', $_POST['ques5']))
    {
      $sql33="update endsem set CO1=1 where staff_id='$id' and course_code='$code' and qno=5";
      $res33=mysqli_query($conn,$sql33);
    }
    if(in_array('CO2', $_POST['ques5']))
    {
      $sql34="update endsem set CO2=1 where staff_id='$id' and course_code='$code' and qno=5";
      $res34=mysqli_query($conn,$sql34);
    }
    if(in_array('CO3', $_POST['ques5']))
    {
      $sql35="update endsem set CO3=1 where staff_id='$id' and course_code='$code' and qno=5";
      $res35=mysqli_query($conn,$sql35);
    }
    if(in_array('CO4', $_POST['ques5']))
    {
      $sql36="update endsem set CO4=1 where staff_id='$id' and course_code='$code' and qno=5";
      $res36=mysqli_query($conn,$sql36);
    }
    if(in_array('CO5', $_POST['ques5']))
    {
      $sql37="update endsem set CO5=1 where staff_id='$id' and course_code='$code' and qno=5";
      $res37=mysqli_query($conn,$sql37);
    }
    if(in_array('CO6', $_POST['ques5']))
    {
      $sql38="update endsem set CO6=1 where staff_id='$id' and course_code='$code' and qno=5";
      $res38=mysqli_query($conn,$sql38);
    }
if(in_array('CO1', $_POST['ques6']))
    {
      $sql39="update endsem set CO1=1 where staff_id='$id' and course_code='$code' and qno=6";
      $res39=mysqli_query($conn,$sql39);
    }
    if(in_array('CO2', $_POST['ques6']))
    {
      $sql40="update endsem set CO2=1 where staff_id='$id' and course_code='$code' and qno=6";
      $res40=mysqli_query($conn,$sql40);
    }
    if(in_array('CO3', $_POST['ques6']))
    {
      $sql41="update endsem set CO3=1 where staff_id='$id' and course_code='$code' and qno=6";
      $res41=mysqli_query($conn,$sql41);
    }
    if(in_array('CO4', $_POST['ques6']))
    {
      $sql42="update endsem set CO4=1 where staff_id='$id' and course_code='$code' and qno=6";
      $res42=mysqli_query($conn,$sql42);
    }
    if(in_array('CO5', $_POST['ques6']))
    {
      $sql43="update endsem set CO5=1 where staff_id='$id' and course_code='$code' and qno=6";
      $res43=mysqli_query($conn,$sql43);
    }
    if(in_array('CO6', $_POST['ques6']))
    {
      $sql44="update endsem set CO6=1 where staff_id='$id' and course_code='$code' and qno=6";
      $res44=mysqli_query($conn,$sql44);
    }
if(in_array('CO1', $_POST['ques7']))
    {
      $sql45="update endsem set CO1=1 where staff_id='$id' and course_code='$code' and qno=7";
      $res45=mysqli_query($conn,$sql45);
    }
    if(in_array('CO2', $_POST['ques7']))
    {
      $sql46="update endsem set CO2=1 where staff_id='$id' and course_code='$code' and qno=7";
      $res46=mysqli_query($conn,$sql46);
    }
    if(in_array('CO3', $_POST['ques7']))
    {
      $sql47="update endsem set CO3=1 where staff_id='$id' and course_code='$code' and qno=7";
      $res47=mysqli_query($conn,$sql47);
    }
    if(in_array('CO4', $_POST['ques7']))
    {
      $sql48="update endsem set CO4=1 where staff_id='$id' and course_code='$code' and qno=7";
      $res48=mysqli_query($conn,$sql48);
    }
    if(in_array('CO5', $_POST['ques7']))
    {
      $sql49="update endsem set CO5=1 where staff_id='$id' and course_code='$code' and qno=7";
      $res49=mysqli_query($conn,$sql49);
    }
    if(in_array('CO6', $_POST['ques7']))
    {
      $sql50="update endsem set CO6=1 where staff_id='$id' and course_code='$code' and qno=7";
      $res50=mysqli_query($conn,$sql50);
    }

if(in_array('CO1', $_POST['ques8']))
    {
      $sql51="update endsem set CO1=1 where staff_id='$id' and course_code='$code' and qno=8";
      $res51=mysqli_query($conn,$sql51);
    }
    if(in_array('CO2', $_POST['ques8']))
    {
      $sql52="update endsem set CO2=1 where staff_id='$id' and course_code='$code' and qno=8";
      $res52=mysqli_query($conn,$sql52);
    }
    if(in_array('CO3', $_POST['ques8']))
    {
      $sql53="update endsem set CO3=1 where staff_id='$id' and course_code='$code' and qno=8";
      $res53=mysqli_query($conn,$sql53);
    }
    if(in_array('CO4', $_POST['ques8']))
    {
      $sql54="update endsem set CO4=1 where staff_id='$id' and course_code='$code' and qno=8";
      $res54=mysqli_query($conn,$sql54);
    }
    if(in_array('CO5', $_POST['ques8']))
    {
      $sql55="update endsem set CO5=1 where staff_id='$id' and course_code='$code' and qno=8";
      $res55=mysqli_query($conn,$sql55);
    }
    if(in_array('CO6', $_POST['ques8']))
    {
      $sql56="update endsem set CO6=1 where staff_id='$id' and course_code='$code' and qno=8";
      $res56=mysqli_query($conn,$sql56);
    }

if(in_array('CO1', $_POST['ques9']))
    {
      $sql57="update endsem set CO1=1 where staff_id='$id' and course_code='$code' and qno=9";
      $res57=mysqli_query($conn,$sql57);
    }
    if(in_array('CO2', $_POST['ques9']))
    {
      $sql58="update endsem set CO2=1 where staff_id='$id' and course_code='$code' and qno=9";
      $res58=mysqli_query($conn,$sql58);
    }
    if(in_array('CO3', $_POST['ques9']))
    {
      $sql59="update endsem set CO3=1 where staff_id='$id' and course_code='$code' and qno=9";
      $res59=mysqli_query($conn,$sql59);
    }
    if(in_array('CO4', $_POST['ques9']))
    {
      $sql60="update endsem set CO4=1 where staff_id='$id' and course_code='$code' and qno=9";
      $res60=mysqli_query($conn,$sql60);
    }
    if(in_array('CO5', $_POST['ques9']))
    {
      $sql61="update endsem set CO5=1 where staff_id='$id' and course_code='$code' and qno=9";
      $res61=mysqli_query($conn,$sql61);
    }
    if(in_array('CO6', $_POST['ques9']))
    {
      $sql62="update endsem set CO6=1 where staff_id='$id' and course_code='$code' and qno=9";
      $res62=mysqli_query($conn,$sql62);
    }
if(in_array('CO1', $_POST['ques10']))
    {
      $sql63="update endsem set CO1=1 where staff_id='$id' and course_code='$code' and qno=10";
      $res63=mysqli_query($conn,$sql63);
    }
    if(in_array('CO2', $_POST['ques10']))
    {
      $sql64="update endsem set CO2=1 where staff_id='$id' and course_code='$code' and qno=10";
      $res64=mysqli_query($conn,$sql64);
    }
    if(in_array('CO3', $_POST['ques10']))
    {
      $sql65="update endsem set CO3=1 where staff_id='$id' and course_code='$code' and qno=10";
      $res65=mysqli_query($conn,$sql65);
    }
    if(in_array('CO4', $_POST['ques10']))
    {
      $sql66="update endsem set CO4=1 where staff_id='$id' and course_code='$code' and qno=10";
      $res66=mysqli_query($conn,$sql66);
    }
    if(in_array('CO5', $_POST['ques10']))
    {
      $sql67="update endsem set CO5=1 where staff_id='$id' and course_code='$code' and qno=10";
      $res67=mysqli_query($conn,$sql67);
    }
    if(in_array('CO6', $_POST['ques10']))
    {
      $sql68="update endsem set CO6=1 where staff_id='$id' and course_code='$code' and qno=10";
      $res68=mysqli_query($conn,$sql68);
    }

if(in_array('CO1', $_POST['ques11']))
    {
      $sql69="update endsem set CO1=1 where staff_id='$id' and course_code='$code' and qno=11";
      $res69=mysqli_query($conn,$sql69);
    }
    if(in_array('CO2', $_POST['ques11']))
    {
      $sql70="update endsem set CO2=1 where staff_id='$id' and course_code='$code' and qno=11";
      $res70=mysqli_query($conn,$sql70);
    }
    if(in_array('CO3', $_POST['ques11']))
    {
      $sql71="update endsem set CO3=1 where staff_id='$id' and course_code='$code' and qno=11";
      $res71=mysqli_query($conn,$sql71);
    }
    if(in_array('CO4', $_POST['ques11']))
    {
      $sql72="update endsem set CO4=1 where staff_id='$id' and course_code='$code' and qno=11";
      $res72=mysqli_query($conn,$sql72);
    }
    if(in_array('CO5', $_POST['ques11']))
    {
      $sql73="update endsem set CO5=1 where staff_id='$id' and course_code='$code' and qno=11";
      $res73=mysqli_query($conn,$sql73);
    }
    if(in_array('CO6', $_POST['ques11']))
    {
      $sql74="update endsem set CO6=1 where staff_id='$id' and course_code='$code' and qno=11";
      $res74=mysqli_query($conn,$sql74);
    }
if(in_array('CO1', $_POST['ques12']))
    {
      $sql75="update endsem set CO1=1 where staff_id='$id' and course_code='$code' and qno=12";
      $res75=mysqli_query($conn,$sql75);
    }
    if(in_array('CO2', $_POST['ques11']))
    {
      $sql76="update endsem set CO2=1 where staff_id='$id' and course_code='$code' and qno=12";
      $res76=mysqli_query($conn,$sql76);
    }
    if(in_array('CO3', $_POST['ques12']))
    {
      $sql77="update endsem set CO3=1 where staff_id='$id' and course_code='$code' and qno=12";
      $res77=mysqli_query($conn,$sql77);
    }
    if(in_array('CO4', $_POST['ques12']))
    {
      $sql78="update endsem set CO4=1 where staff_id='$id' and course_code='$code' and qno=12";
      $res78=mysqli_query($conn,$sql78);
    }
    if(in_array('CO5', $_POST['ques12']))
    {
      $sql79="update endsem set CO5=1 where staff_id='$id' and course_code='$code' and qno=12";
      $res79=mysqli_query($conn,$sql79);
    }
    if(in_array('CO6', $_POST['ques12']))
    {
      $sql80="update endsem set CO6=1 where staff_id='$id' and course_code='$code' and qno=12";
      $res80=mysqli_query($conn,$sql80);
    }
if(in_array('CO1', $_POST['ques13']))
    {
      $sql81="update endsem set CO1=1 where staff_id='$id' and course_code='$code' and qno=13";
      $res81=mysqli_query($conn,$sql81);
    }
    if(in_array('CO2', $_POST['ques13']))
    {
      $sql82="update endsem set CO2=1 where staff_id='$id' and course_code='$code' and qno=13";
      $res82=mysqli_query($conn,$sql82);
    }
    if(in_array('CO3', $_POST['ques13']))
    {
      $sql83="update endsem set CO3=1 where staff_id='$id' and course_code='$code' and qno=13";
      $res83=mysqli_query($conn,$sql83);
    }
    if(in_array('CO4', $_POST['ques13']))
    {
      $sql84="update endsem set CO4=1 where staff_id='$id' and course_code='$code' and qno=13";
      $res84=mysqli_query($conn,$sql84);
    }
    if(in_array('CO5', $_POST['ques13']))
    {
      $sql85="update endsem set CO5=1 where staff_id='$id' and course_code='$code' and qno=13";
      $res85=mysqli_query($conn,$sql85);
    }
    if(in_array('CO6', $_POST['ques13']))
    {
      $sql86="update endsem set CO6=1 where staff_id='$id' and course_code='$code' and qno=13";
      $res86=mysqli_query($conn,$sql86);
    }

if(in_array('CO1', $_POST['ques14']))
    {
      $sql87="update endsem set CO1=1 where staff_id='$id' and course_code='$code' and qno=14";
      $res87=mysqli_query($conn,$sql87);
    }
    if(in_array('CO2', $_POST['ques14']))
    {
      $sql88="update endsem set CO2=1 where staff_id='$id' and course_code='$code' and qno=14";
      $res88=mysqli_query($conn,$sql88);
    }
    if(in_array('CO3', $_POST['ques14']))
    {
      $sql89="update endsem set CO3=1 where staff_id='$id' and course_code='$code' and qno=14";
      $res89=mysqli_query($conn,$sql89);
    }
    if(in_array('CO4', $_POST['ques14']))
    {
      $sql90="update endsem set CO4=1 where staff_id='$id' and course_code='$code' and qno=14";
      $res90=mysqli_query($conn,$sql90);
    }
    if(in_array('CO5', $_POST['ques14']))
    {
      $sql91="update endsem set CO5=1 where staff_id='$id' and course_code='$code' and qno=14";
      $res91=mysqli_query($conn,$sql91);
    }
    if(in_array('CO6', $_POST['ques14']))
    {
      $sql92="update endsem set CO6=1 where staff_id='$id' and course_code='$code' and qno=14";
      $res92=mysqli_query($conn,$sql92);
    }


if(in_array('CO1', $_POST['ques15']))
    {
      $sql93="update endsem set CO1=1 where staff_id='$id' and course_code='$code' and qno=15";
      $res93=mysqli_query($conn,$sql93);
    }
    if(in_array('CO2', $_POST['ques15']))
    {
      $sql94="update endsem set CO2=1 where staff_id='$id' and course_code='$code' and qno=15";
      $res94=mysqli_query($conn,$sql94);
    }
    if(in_array('CO3', $_POST['ques15']))
    {
      $sql95="update endsem set CO3=1 where staff_id='$id' and course_code='$code' and qno=15";
      $res95=mysqli_query($conn,$sql95);
    }
    if(in_array('CO4', $_POST['ques15']))
    {
      $sql96="update endsem set CO4=1 where staff_id='$id' and course_code='$code' and qno=15";
      $res96=mysqli_query($conn,$sql96);
    }
    if(in_array('CO5', $_POST['ques15']))
    {
      $sql97="update endsem set CO5=1 where staff_id='$id' and course_code='$code' and qno=15";
      $res97=mysqli_query($conn,$sql97);
    }
    if(in_array('CO6', $_POST['ques15']))
    {
      $sql98="update endsem set CO6=1 where staff_id='$id' and course_code='$code' and qno=15";
      $res98=mysqli_query($conn,$sql98);
    }

if(in_array('CO1', $_POST['ques16']))
    {
      $sql99="update endsem set CO1=1 where staff_id='$id' and course_code='$code' and qno=16";
      $res99=mysqli_query($conn,$sql99);
    }
    if(in_array('CO2', $_POST['ques16']))
    {
      $sql100="update endsem set CO2=1 where staff_id='$id' and course_code='$code' and qno=16";
      $res100=mysqli_query($conn,$sql100);
    }
    if(in_array('CO3', $_POST['ques16']))
    {
      $sql101="update endsem set CO3=1 where staff_id='$id' and course_code='$code' and qno=16";
      $res101=mysqli_query($conn,$sql101);
    }
    if(in_array('CO4', $_POST['ques16']))
    {
      $sql102="update endsem set CO4=1 where staff_id='$id' and course_code='$code' and qno=16";
      $res102=mysqli_query($conn,$sql102);
    }
    if(in_array('CO5', $_POST['ques16']))
    {
      $sql103="update endsem set CO5=1 where staff_id='$id' and course_code='$code' and qno=16";
      $res103=mysqli_query($conn,$sql103);
    }
    if(in_array('CO6', $_POST['ques16']))
    {
      $sql104="update endsem set CO6=1 where staff_id='$id' and course_code='$code' and qno=16";
      $res104=mysqli_query($conn,$sql104);
    }  
    header("location: dashboard.php");
     
}

?>

<br>
<div class="heading">SET QP FOR END SEM</div>
       <br><br>
        <div class="form-center">
<form action="#" name="signup" method="POST" style="font-size:160%;background-color:white;border:2px solid black;width:45%;height:60%;border-radius:20px;box-shadow: 0px 0px 10px 1px #000;padding:10px 0px 10px 40px;font-family:Georgia, serif;
    font-weight:bold;">

<?php

$id=$_SESSION['username'];
$conn=mysqli_connect("localhost","root","","nba");
      
$sql="Select course_code from course_details where staff_id='$id'";
$q=mysqli_query($conn,$sql);

echo "<label for='course'>Course :  </label>";
echo    "<select name='course' id='course' style='width:45%;font-size:110%;background-color:#dde6f0;'>";
    
while($row = mysqli_fetch_assoc($q)) 
{        
echo "<option value='".$row['course_code']."'>".$row['course_code']."</option>"; 
}
echo  "</select>";
?>
<br>
<br>
SET QUESTION<br><br>

Q1. <br>
    
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

Maximum Marks: <input type="number" name="max1" required placeholder="Max Mark" style="height:80%;width:45%;font-size:120%;background-color:#dde6f0;"><br><br>

Q2. 
<br>   
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

Q3. 
<br>     
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

Q4. 
<br>   
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

Q5. 
<br>    
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

Maximum Marks: <input type="number" name="max6" required placeholder="Max Mark" style="height:80%;width:45%;font-size:120%;background-color:#dde6f0;"><br><BR>

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

Maximum Marks: <input type="number" name="max7" required placeholder="Max Mark" style="height:80%;width:45%;font-size:120%;background-color:#dde6f0;"><br><br>

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

Q9. 
<br>   
<input type="checkbox" id="CO1" name="ques9[]" value="CO1">
  <label for="CO1"> CO1</label>
  <input type="checkbox" id="CO2" name="ques9[]" value="CO2">
  <label for="CO2"> CO2</label>
  <input type="checkbox" id="CO3" name="ques9[]" value="CO3">
  <label for="CO3"> CO3</label>
  <input type="checkbox" id="CO4" name="ques9[]" value="CO4">
  <label for="CO4"> CO4</label>
  <input type="checkbox" id="CO5" name="ques9[]" value="CO5">
  <label for="CO5"> CO5</label>
  <input type="checkbox" id="CO6" name="ques9[]" value="CO6">
  <label for="CO6"> CO6</label><br><br>

Maximum Marks: <input type="number" name="max9" required placeholder="Max Mark" style="height:80%;width:45%;font-size:120%;background-color:#dde6f0;"><br><br>

Q10. 
<br>   
<input type="checkbox" id="CO1" name="ques10[]" value="CO1">
  <label for="CO1"> CO1</label>
  <input type="checkbox" id="CO2" name="ques10[]" value="CO2">
  <label for="CO2"> CO2</label>
  <input type="checkbox" id="CO3" name="ques10[]" value="CO3">
  <label for="CO3"> CO3</label>
  <input type="checkbox" id="CO4" name="ques10[]" value="CO4">
  <label for="CO4"> CO4</label>
  <input type="checkbox" id="CO5" name="ques10[]" value="CO5">
  <label for="CO5"> CO5</label>
  <input type="checkbox" id="CO6" name="ques10[]" value="CO6">
  <label for="CO6"> CO6</label><br><br>

Maximum Marks: <input type="number" name="max10" required placeholder="Max Mark" style="height:80%;width:45%;font-size:120%;background-color:#dde6f0;"><br><br>

 Q11. 
<br>    
<input type="checkbox" id="CO1" name="ques11[]" value="CO1">
  <label for="CO1"> CO1</label>
  <input type="checkbox" id="CO2" name="ques11[]" value="CO2">
  <label for="CO2"> CO2</label>
  <input type="checkbox" id="CO3" name="ques11[]" value="CO3">
  <label for="CO3"> CO3</label>
  <input type="checkbox" id="CO4" name="ques11[]" value="CO4">
  <label for="CO4"> CO4</label>
  <input type="checkbox" id="CO5" name="ques11[]" value="CO5">
  <label for="CO5"> CO5</label>
  <input type="checkbox" id="CO6" name="ques11[]" value="CO6">
  <label for="CO6"> CO6</label><br><br>

Maximum Marks: <input type="number" name="max11" required placeholder="Max Mark" style="height:80%;width:45%;font-size:120%;background-color:#dde6f0;"><br><br>


 Q12. 
<br>   
<input type="checkbox" id="CO1" name="ques12[]" value="CO1">
  <label for="CO1"> CO1</label>
  <input type="checkbox" id="CO2" name="ques12[]" value="CO2">
  <label for="CO2"> CO2</label>
  <input type="checkbox" id="CO3" name="ques12[]" value="CO3">
  <label for="CO3"> CO3</label>
  <input type="checkbox" id="CO4" name="ques12[]" value="CO4">
  <label for="CO4"> CO4</label>
  <input type="checkbox" id="CO5" name="ques12[]" value="CO5">
  <label for="CO5"> CO5</label>
  <input type="checkbox" id="CO6" name="ques12[]" value="CO6">
  <label for="CO6"> CO6</label><br><br>

Maximum Marks: <input type="number" name="max12" required placeholder="Max Mark" style="height:80%;width:45%;font-size:120%;background-color:#dde6f0;"><br><br>

Q13. 
<br>    
<input type="checkbox" id="CO1" name="ques13[]" value="CO1">
  <label for="CO1"> CO1</label>
  <input type="checkbox" id="CO2" name="ques13[]" value="CO2">
  <label for="CO2"> CO2</label>
  <input type="checkbox" id="CO3" name="ques13[]" value="CO3">
  <label for="CO3"> CO3</label>
  <input type="checkbox" id="CO4" name="ques13[]" value="CO4">
  <label for="CO4"> CO4</label>
  <input type="checkbox" id="CO5" name="ques13[]" value="CO5">
  <label for="CO5"> CO5</label>
  <input type="checkbox" id="CO6" name="ques13[]" value="CO6">
  <label for="CO6"> CO6</label><br><br>

Maximum Marks: <input type="number" name="max13" required placeholder="Max Mark" style="height:80%;width:45%;font-size:120%;background-color:#dde6f0;"><br><br>

 Q14. 
<br>    
<input type="checkbox" id="CO1" name="ques14[]" value="CO1">
  <label for="CO1"> CO1</label>
  <input type="checkbox" id="CO2" name="ques14[]" value="CO2">
  <label for="CO2"> CO2</label>
  <input type="checkbox" id="CO3" name="ques14[]" value="CO3">
  <label for="CO3"> CO3</label>
  <input type="checkbox" id="CO4" name="ques14[]" value="CO4">
  <label for="CO4"> CO4</label>
  <input type="checkbox" id="CO5" name="ques14[]" value="CO5">
  <label for="CO5"> CO5</label>
  <input type="checkbox" id="CO6" name="ques14[]" value="CO6">
  <label for="CO6"> CO6</label><br><br>

Maximum Marks: <input type="number" name="max14" required placeholder="Max Mark" style="height:80%;width:45%;font-size:120%;background-color:#dde6f0;"><br><br>

 Q15. 
<br>    
<input type="checkbox" id="CO1" name="ques15[]" value="CO1">
  <label for="CO1"> CO1</label>
  <input type="checkbox" id="CO2" name="ques15[]" value="CO2">
  <label for="CO2"> CO2</label>
  <input type="checkbox" id="CO3" name="ques15[]" value="CO3">
  <label for="CO3"> CO3</label>
  <input type="checkbox" id="CO4" name="ques15[]" value="CO4">
  <label for="CO4"> CO4</label>
  <input type="checkbox" id="CO5" name="ques15[]" value="CO5">
  <label for="CO5"> CO5</label>
  <input type="checkbox" id="CO6" name="ques15[]" value="CO6">
  <label for="CO6"> CO6</label><br><br>

 Maximum Marks: <input type="number" name="max15" required placeholder="Max Mark" style="height:80%;width:45%;font-size:120%;background-color:#dde6f0;"><br><br>

 Q16. 
<br>   
<input type="checkbox" id="CO1" name="ques16[]" value="CO1">
  <label for="CO1"> CO1</label>
  <input type="checkbox" id="CO2" name="ques16[]" value="CO2">
  <label for="CO2"> CO2</label>
  <input type="checkbox" id="CO3" name="ques16[]" value="CO3">
  <label for="CO3"> CO3</label>
  <input type="checkbox" id="CO4" name="ques16[]" value="CO4">
  <label for="CO4"> CO4</label>
  <input type="checkbox" id="CO5" name="ques16[]" value="CO5">
  <label for="CO5"> CO5</label>
  <input type="checkbox" id="CO6" name="ques16[]" value="CO6">
  <label for="CO6"> CO6</label><br><br>

 Maximum Marks: <input type="number" name="max16" required placeholder="Max Mark" style="height:80%;width:45%;font-size:120%;background-color:#dde6f0;"><br><br>

  <input type="submit" value="SUBMIT" style="font-family:Georgia, serif;font-size:150%;font-weight:bold;width:85%;height:80%;color:white;margin:30px 2px 15px 5px;border-radius:20px;background-color:black;"><br>
</form>
</div>
<br><br>
<div class="logout"><a href="dashboard.php">&#9654 HOME</a><br></div>
 
        

</body>
</html>