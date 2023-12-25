<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<a href="Home.php" style="margin-left:1000px; margin-top:20px; text-decoration:none;fontsize:
20px;"><strong>HOME</strong></a>
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("hstel",$con);
$qry="select * from stu_insert";
$res=mysql_query($qry);
echo "<center><h1>STUDENT DETAIL</h1></center><br><br>";
echo "<center><table border='1' cellpadding='10'>";
echo "<tr>
<th><font color='Red'>ID</font></th>
<th><font color='Red'>FIRST NAME</font></th>
<th><font color='Red'>LAST NAME</font></th>
<th><font color='Red'>CONTACT</font></th>
<th><font color='Red'>ADDRESS</font></th>
<th><font color='Red'>GENDER</font></th>
<th><font color='Red'>ROOM NUMBER</font></th>
<th><font color='Red'>EDIT</font></th>
<th><font color='Red'>DELETE</font></th>
</tr>";
while($row=mysql_fetch_array($res))
{
echo "<tr>";
echo '<td><center><b><font color="#663300">' . $row['sid'] . '</font></b></center></td>';
echo '<td><center><b><font color="#663300">' . $row['Firstname'] .
'</font></b></center></td>';
echo '<td><center><b><font color="#663300">' . $row['Lastname'] .
'</font></b></center></td>';
echo '<td><center><b><font color="#663300">' . $row['Contact'] . '</font></b></center></td>';
echo '<td><center><b><font color="#663300">' . $row['Address'] . '</font></b></center></td>';
echo '<td><center><b><font color="#663300">' . $row['Gender'] . '</font></b></center></td>';
echo '<td><center><b><font color="#663300">' . $row['Roomno'] .
'</font></b></center></td>';
echo '<td><b><font color="#663300"><a href="Student_edit.php?id=' . $row['sid'] .
'">Edit</a></font></b></td>';
echo '<td><b><font color="#663300"><a href="Student_delete.php?id=' . $row['sid'] .
'">Delete</a></font></b></td>';
echo "</tr>";
}
echo "</table></center>";
?>
?>
</body>
</html>