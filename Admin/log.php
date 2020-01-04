<?php
   include("db.php");
   session_start();
    $error=''; 
   
      
      if(isset($_POST['login'])){
      $uname = $_POST['uname'];
      $upass = mysqli_real_escape_string($con,$_POST['upass']); 

      // $upass = md5('upass');
      $sql = "SELECT * FROM `admin` WHERE  `username` = '$uname' AND  `password` = '$upass'";
      $result = mysqli_query($con,$sql) or die("Error: ".mysqli_error($con));
       
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
        
      if($count == 1) {
           session_start();
          $_SESSION['uname'] = $uname;
          header("location:adhome.php");
       }
       else
       {
         echo "<script>alert('Enter valid username and password'); window.location='log.html';</script>";
       }
 }
 else {

   echo "<script>alert('Please Login'); window.location='log.html';</script>";
 }

?>

