<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("hstel",$con);
if(isset($_POST['submit']))
{
$Firstname=$_POST['fname'];
$Lastname=$_POST['lname'];
$Contact=$_POST['contact'];
$Address=$_POST['address'];
$Gender=$_POST['gender'];
$Roomno=$_POST['rno'];
$qry="insert into stu_insert
(Firstname,Lastname,Contact,Address,Gender,Roomno)values('$Firstname','$La
stname','$Contact','$Address','$Gender','$Roomno')";
$res=mysql_query($qry) or mysql_error();
if($res)
{
header('Location:Home.php');
}
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body bgcolor="#FFCCFF">
<form method="post"s>
<center><h1>STUDENT REGISTRATION</h1></center>
<center><table cellpadding="5" cellspacing="5" style="font-size:18px">
<tr>
<td>First Name:</td>
<td><input type="text" name="fname" id="fname"></td>
</tr>
<tr>
<td>Last Name:</td>
<td><input type="text" name="lname" id="lname"></td>
</tr>
<tr>
<td>Contact:</td>
<td><input type="text" name="contact" id="contact"></td>
</tr>
<tr>
<td>Address:</td>
<td><input type="text" name="address" id="address"></td>
</tr>
<tr>
<td>Gender:</td>
<td><input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="female">Female</td>
</tr>
<tr>
<td>Room Number:</td>
<td><input type="text" name="rno" id="rno"></td>
</tr>
<tr>
<td></td>
<td><center><input type="submit" name="submit" value="Add" style="height:30px;
width:100px;font-size:20px;"></center></td>
</tr>
</table></center>
</form>
</body>
</html>