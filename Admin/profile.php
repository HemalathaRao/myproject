<?php //include("inc/session.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>

   <?php //include("inc/head.php"); ?>
   <title>LOGIN PAGE</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/local.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

    <!-- you need to include the shieldui css and js assets in order for the charts to work -->
    <link rel="stylesheet" type="text/css" href="https://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
    <script type="text/javascript" src="https://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
    <script type="text/javascript" src="https://www.prepbootstrap.com/Content/js/gridData.js"></script>



</head>

<body>

    <!-- Navigation -->
	<?php //include("inc/menu.php"); ?>
	<div class="general-subhead fonts"style="background-color: lavender  ">
       <h1><center><b>Profile<b></center></h1>
   </div>
   <center>
   	
		<div class=" form-group ">
		<?php
				include("db.php");
				
				$query=mysqli_query($con,"SELECT * FROM `admin` ");
				$row = mysqli_fetch_array($query);
		?>
		
		 
	<!--   <?php
	
	//	$sql= mysqli_query($con,"SELECT * FROM `admin` WHERE username = '$username'") or die(mysqli_error($con));
		$pro = mysqli_fetch_array($sql);
	  
	  ?> -->
		

			<!-- <div class="col-md-6">
			<a href="#" data-toggle="modal" data-target="#myModal">
			<div class="well form">
				<img src="" class="img-responsive">
			</div>
			</a>
			</div> -->
			
			<div class="col-md-3 ">
			</div>

			<div class="col-md-6">
			<div class="well form">
				
				<form method="post" action="" enctype="multipart/form-data" align="center">
				<div class="form-group">
					<label>User Name : </label>
					<input type="text" name="uname"  class="form-control"  value="<?php echo $row['username']; ?>" multiple="multiple" >
				</div>
				<div class="form-group">
					<label>Contact Number : </label>
					<input type="text" name="cnum"  placeholder="Enter your phone number" class="form-control" value="<?php echo $row['contact']; ?>" multiple="multiple"  >
				</div>
				
				<div class="form-group">
					<label>Email : </label>
					<input type="email" name="email" class="form-control" value="<?php echo $row['email']; ?>" multiple="multiple" >
				</div>
			
			</form>
			</div>
			
		
		
			</div>
					</div>
				
					</center>

		<!-- <div class="row">
			<div class="col-md-12 col-md-offset-5">
				<div class="btn-group" >
					<a href="paswrd.php?admin_id=<?php echo $row['admin_id']; ?>" class="btn btn-info">Change Password</a>
				</div>
				<div class="btn-group" >
					<a href="prfchng.php?admin_id=<?php echo $row['admin_id']; ?>" class="btn btn-info">Edit Profile</a>
				</div>
			</div>
		</div>
		 -->
		
		
	


		 <script>
		 $(document).ready(function(){
    $("#inputTextBox").keypress(function(event){
        var inputValue = event.charCode;
        if(!(inputValue >= 65 && inputValue <= 122) && (inputValue != 32 && inputValue != 0)){
            event.preventDefault();
        }
    });
});

</script>

</body>
</html>
