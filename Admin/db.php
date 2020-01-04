<?php
    $mysql_hostname = "localhost";  
    $mysql_user = "root";         
    $mysql_password = "";           
    $mysql_database = "photo";   

    $con = new mysqli($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);
    //mysql_select_db($mysql_database, $bd) or die("Error on database connection");
      if($con->connect_errno > 0){
          die('Unable to connect to database [' . $con->connect_error . ']');
      }
?>
