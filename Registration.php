<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("hstel",$con);
if(isset($_POST['submit']))
{
$Firstname=$_POST['fname'];
$Lastname=$_POST['lname'];
$Username=$_POST['uname'];
$Passward=$_POST['pwd'];
$qry="insert into
register(Firstname,Lastname,Username,Passward)values('$Firstname','$L
astname','$Username','$Passward')";
$res=mysql_query($qry);
if($res)
{
header('Location:login.php');
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
<form method="post">
<center><h1>REGISTRATION</h1></center>
<center><table cellpadding="4" cellspacing="4" style="font-size:18px">
<tr>
<td>First Name:</td>
<td><input type="text" name="fname" id="fname"></td>
</tr>
<tr>
<td>Last Name:</td>
<td><input type="text" name="lname" id="lname"></td>
</tr>
<tr>
<td>Username:</td>
<td><input type="text" name="uname" id="uname"></td>
</tr>
<tr>
<td>Passward:</td>
<td><input type="password" name="pwd" id="pwd"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="submit" value="Register"></td>
</tr>
</table></center>
</form>
</body>
</html>