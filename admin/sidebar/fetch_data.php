<?php
if(isset($_POST['get_option']))
{
include('../includes/connect.php');

 $kingdom = $_POST['get_option'];
 $kingdom = mysqli_real_escape_string($db, $kingdom);
 $find=mysqli_query($db,"select name from sub1 where kingdom='$kingdom' order by name");
  echo "<option>Choose Subsection1</option>";
 while($row=mysqli_fetch_assoc($find))
 {
  echo "<option value=".$row['name'].">".$row['name']."</option>";
 }
 exit;
}
if(isset($_POST['get_option1']))
{
include('../includes/connect.php');

 $sub1 = $_POST['get_option1'];
 $sub1 = mysqli_real_escape_string($db, $sub1);
 $find=mysqli_query($db,"select name from sub2 where sub1='$sub1' order by name");
  echo "<option>Choose Subsection2</option>";
 while($rows=mysqli_fetch_assoc($find))
 {
  echo "<option value=".$rows['name'].">".$rows['name']."</option>";
 }
 exit;
}
if(isset($_POST['get_option2']))
{
include('../includes/connect.php');

 $sub2 = $_POST['get_option2'];
 $sub2 = mysqli_real_escape_string($db, $sub2);
 $find=mysqli_query($db,"select name from sub25 where sub2='$sub2' order by name");
  echo "<option>Choose Subsection2.5</option>";
 while($rows=mysqli_fetch_assoc($find))
 {
  echo "<option value=".$rows['name'].">".$rows['name']."</option>";
 }
 exit;
}
if(isset($_POST['get_option25']))
{
include('../includes/connect.php');

 $sub25 = $_POST['get_option25'];
 $sub25 = mysqli_real_escape_string($db, $sub25);
 $find=mysqli_query($db,"select name from sub3 where sub25='$sub25' order by name");
  echo "<option>Choose Subsection3</option>";
 while($rows=mysqli_fetch_assoc($find))
 {
  echo "<option value=".$rows['name'].">".$rows['name']."</option>";
 }
 exit;
}
if(isset($_POST['get_option35']))
{
include('../includes/connect.php');

 $sub3 = $_POST['get_option35'];
 $sub3 = mysqli_real_escape_string($db, $sub3);
 $find=mysqli_query($db,"select name from sub35 where sub3='$sub3' order by name");
  echo "<option>Choose Subsection3.5</option>";
 while($rows=mysqli_fetch_assoc($find))
 {
  echo "<option value=".$rows['name'].">".$rows['name']."</option>";
 }
 exit;
}

if(isset($_POST['get_option3']))
{
include('../includes/connect.php');

 $cname = $_POST['get_option3'];
 $cname = mysqli_real_escape_string($db, $cname);

 $find=mysqli_query($db,"select sname from sub4name where cname='".$cname."'");

 while($rows=mysqli_fetch_assoc($find))
 {
  echo "<option>".$rows['sname']."</option>";
 }
 exit;
}

if(isset($_POST['get_option4']))
{
include('../includes/connect.php');

 $sname = $_POST['get_option4'];
 $sname = mysqli_real_escape_string($db, $sname);
 $find=mysqli_query($db,"select cname from sub4name where sname='$sname'");
 while($rows=mysqli_fetch_assoc($find))
 {
  echo "<option>".$rows['cname']."</option>";
 }
 exit;
}


?>