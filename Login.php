<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("hstel",$con);
if(isset($_POST['submit']))
{
$Username=$_POST['uname'];
$Passward=$_POST['pwd'];
$q="select * from register where username='$Username'";
$d=mysql_query($q);
$r=mysql_fetch_object($d);
$n=$r->Username;
$p=$r->Passward;
if($n==$Username && $p==$Passward)
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
<form method="post">
<center><h1>LOGIN</h1></center>
<center><table cellpadding="4" cellspacing="4" style="font-size:18px">
<tr>
<td>Username:</td>
<td><input type="text" name="uname" id="uname"></td
</tr>
<tr>
<td>Passward:</td>
<td><input type="password" name="pwd" id="pwd"></td>
</tr>
<tr>
<td></td>
<td><center><input type="submit" name="submit" value="login"></center></td>
</tr>
</table></center><br>
<center><a href="Register.php" style="margin-left:100px; fontsize:
20px;">NewUser?Register</a></center>
</form>
</body>
</html>