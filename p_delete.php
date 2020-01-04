<?php
	include("conn.php");
    if(isset($_GET['p_id'])){
	$p_id = $_GET['p_id'];
	$query = mysqli_query($con,"DELETE FROM `prodct` WHERE p_id='$p_id'") or die(mysqli_error($con));
	header("location:showp.php?deleted");
    }

else if(isset($_GET['o_id'])){
    $o_id = $_GET['o_id'];
	$query = mysqli_query($con,"DELETE FROM `othprod` WHERE o_id='$o_id'") or die(mysqli_error($con));
	header("location:showp.php?deleted");
}

else if(isset($_GET['r_id'])){
    $r_id = $_GET['r_id'];
	$query = mysqli_query($con,"DELETE FROM `recipe` WHERE r_id='$r_id'") or die(mysqli_error($con));
	header("location:shorec.php?deleted");
}

?>