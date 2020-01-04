
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
	<?php include("inc/menu.php");
	 ?>
	 

    <!-- Page Content -->
    <div class="container"  style="background-color:  lavender"><br>
    	<div class="card-body">
        <div class="form-group" >
			<div class=" col-md-4 mybox menu-w3lsgrids">
				<a href="index.html">
				<div class="well">
					<i class="fa fa-home fa-5x"></i>
					<h4>Dashboard</h4>
			   </div>
				</a>
			</div>
			
			<!-- <div class="col-md-4 mybox menu-w3lsgrids">
				<a href="events.php">
				<div class="well">
					<i class="fa fa-th-list fa-5x"></i> -->
			<div class="form-group">
			<div class="col-md-4 mybox menu-w3lsgrids">
				<a href="showreg.php">
				<div class="well">
					<i class="fa fa-users fa-5x"></i>
					<h4>View Customer</h4>
			   </div>
			   </a>
			</div>
			<div class="form-group">
			<div class="col-md-4 mybox menu-w3lsgrids">
				<a href="updatereg.php">
				<div class="well">
					<i class="fa fa-book fa-5x"></i>
					<h4>Update Customer</h4>
			   </div>
			   </a>
			</div>
		</div>
		
		<!-- <div class="row">
			<div class="col-md-4 mybox menu-w3lsgrids">
				<a href="nws1.php">
				<div class="well">
					<i class="fa fa-users fa-5x"></i> -->
			<div class="form-group">
			<div class="col-md-4 mybox menu-w3lsgrids">
				<a href="viewfeed.php">
				<div class="well">
					<i class="fa fa-comment fa-5x"></i>
					<h4>View Feedback</h4>
			   </div>
			   </a>
			</div>
			<!-- 
			<div class="col-md-4 mybox menu-w3lsgrids">
				<a href="upcmngev.php">
				<div class="well">
					<i class="fa fa-calendar fa-5x"></i>
					<h4>Upcomming Events</h4>
			   </div>
			   </a>
			</div>
			
			<div class="col-md-4 mybox menu-w3lsgrids">
				<a href="ginsert.php">
				<div class="well">
					<i class="fa fa-upload fa-5x"></i>
					<h4>Upload Media</h4>
			   </div>
			   </a>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-4 mybox menu-w3lsgrids">
				<a href="feed.php">
				<div class="well">
					<i class="fa fa-comment fa-5x"></i>
					<h4>Manage Feedback</h4>
			   </div>
			   </a>
			</div>
			
			
			<div class="col-md-4 mybox menu-w3lsgrids">
				<a href="profile.php">
				<div class="well">
					<i class="fa fa-key fa-5x"></i>
					<h4>Change Profile</h4>
			   </div>
			   </a>
			</div>
			 -->
				<div class="form-group">
				
			<div class="col-md-4 mybox menu-w3lsgrids">
				<a href="logout.php">
				<div class="well">
					<i class="fa fa-sign-out fa-5x"></i>
					<h4>Logout</h4>
			   </div>
			   </a>
			</div>
		</div>
	</div>
    </div>

    <!-- /.container -->

   <?php include("inc/bottom.php"); ?>

</body>
</html>
