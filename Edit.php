<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("hstel",$con);
$qry="select * from stu_insert";
$res=mysql_query($qry);
$r=mysql_fetch_array($res);
$sid=$r['sid'];
$fname=$r['Firstname'];
$lname=$r['Lastname'];
$contact=$r['Contact'];
$address=$r['Address'];
$gender=$r['Gender'];
$Roomno=$r['Roomno'];
if(isset($_POST['submit']))
{
$fn=$_POST['fname'];
$ln=$_POST['lname'];
$co=$_POST['contact'];
$add=$_POST['address'];
$gen=$_POST['gender'];
$rnom=$_POST['rno'];
$qry1="update stu_insert set
Firstname='$fn',Lastname='$ln',Contact='$co',Address='$add',Gender='$gen',Ro
omno='$rnom' where sid='$sid'";
$result=mysql_query($qry1);
if($result)
{
header('Location:Student_view.php');
}
else
{
echo "error";
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
<center><h2>UPDATE DETAIL</h2></center>
<center><table cellpadding="5" cellspacing="5" style="font-size:18px">
<tr>
<td>First Name:</td>
<td>
<input type="text" name="fname" id="fname" value="<?php echo $fname;
?>"></td>
</tr>
<tr>
<td>Last Name:</td>
<td>
<input type="text" name="lname" id="lname" value="<?php echo $lname;?>">
</td>
</tr>
<tr>
<td>Contact:</td>
<td>
<input type="text" name="contact" id="contact" value="<?php echo $contact;?
>">
</td>
</tr>
<tr>
<td>Address:</td>
<td>
<input type="text" name="address" id="address" value="<?php echo $address;?
>">
</td>
</tr>
<tr>
<td>Gender:</td>
<td>
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="female">Female</td>
</tr>
<tr>
<td>Room Number:</td>
<td>
<input type="text" name="rno" id="rno" value="<?php echo $Roomno; ?>">
</td>
</tr>
<tr>
<td></td>
<td>
<center><input type="submit" name="submit" value="UPDATE"
style="height:30px; width:100px;font-size:20px;"></center>
</td>
</tr>
</table>
</center>
</form>
</body>
</html>