<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("hstel",$con);
$qry="select * from stu_insert";
$res=mysql_query($qry);
$r=mysql_fetch_array($res);
$sid=$r['sid'];
$qry1="delete from stu_insert where sid='$sid'";
if(mysql_query($qry1))
{
header('Location:Student_view.php');
}
?>
</body>
</html>