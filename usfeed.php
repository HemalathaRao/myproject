<?php
$username="root";
$password="";
$db="photo";
$server="localhost";
mysql_connect($server,$username,$password);
@mysql_select_db($db)
or die("Unable to select database");
$uname=$_POST['name'];
$uemail=$_POST['email'];
$umessage=$_POST['message'];
// $pnumber=$_POST['pnumber'];
// $email=$_POST['email'];
// $gender=$_POST['gender'];
// mail("rdriyan@gmail.com","Feedback from"+$uname,$umessage);
//inserting values to the database
 $query="INSERT INTO feedbk ( `name`,  `email`,  `msg` ) VALUES ( '$uname', '$uemail', '$umessage')";
$result=mysql_query($query);
if($result>0){
	echo "Feedback successfully Sent Thank You...visit Again";
	}
//selecting values and storing in result variable
$q1="select * from feedbk";
$result=mysql_query($q1);
// print "<table border=1 align=center><tr><th>First</th><th>Lastname</th><th>Address</th><th>Phone</th><th>Email</th><th>Gender</th></tr>";
// echo "<caption><h1>User_Details</h1></caption>";
while($row=mysql_fetch_array($result))
{
//Db table coulumnuser_name is stored in a variable $userName
$Name=$row['name'];
$Email=$row['email'];
$message=$row['msg'];
// $Phonenum=$row['dbpnum'];
// $Email=$row['dbemail'];
// $Gender=$row['dbgender'];
// echo "<tr>";
// //echo"<td><input type='radio' name='un' ></td>";
// echo "<td>$firstName</td><td>$lastName</td><td>$Address</td><td>$Phonenum</td><td>$Email</td><td>$Gnder</td>";
// echo "</tr>";
 }
// echo "</table>";
// echo "<center><h1><a href=registration.html>Back</a></h1></center>";