<?php
	include("db.php");
    if(isset($_GET['r_id'])){
	$r_id = $_GET['r_id'];
	$query = mysqli_query($con,"DELETE FROM `rigistration` WHERE r_id='$r_id'") or die(mysqli_error($con));
	header("location:updatereg.php?deleted");
    }

else if(isset($_GET['f_id'])){
    $f_id = $_GET['f_id'];
	$query = mysqli_query($con,"DELETE FROM `feedbk` WHERE f_id='$f_id'") or die(mysqli_error($con));
	header("location:viewfeed.php?deleted");
}

// else if(isset($_GET['r_id'])){
//     $r_id = $_GET['r_id'];
// 	$query = mysqli_query($con,"DELETE FROM `recipe` WHERE r_id='$r_id'") or die(mysqli_error($con));
// 	header("location:shorec.php?deleted");
// }

?>