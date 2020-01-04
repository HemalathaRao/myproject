<?php
$username="root";
$password="";
$db="photo";
$server="localhost";
mysql_connect($server,$username,$password);
@mysql_select_db($db)
or die("Unable to select database");
$name=$_POST['uname'];
$pass=$_POST['upass'];
//inserting values to the database
$query="insert into admin values('$name','$pass')";
mysql_query($query);
//selecting values and storing in result variable
$q1="select * from admin";
$result=mysql_query($q1);
// print "<table border=1 align=center><tr><th>Name</th><th>Age</th></tr>";
// echo "<caption><h1>User_Details</h1></caption>";
while($row=mysql_fetch_array($result))
{
//Db table coulumnuser_name is stored in a variable $userName
$userName=$row['username'];
$userPass=$row['password'];
}
// echo "<tr>";
// //echo"<td><input type='radio' name='un' ></td>";
// echo "<td>$userName</td><td>$userAge</td>";
// echo "</tr>";
// }
// echo "</table>";
// echo "<center><h1><a href=user.html>Back</a></h1></center>";