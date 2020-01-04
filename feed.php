<?php
session_start();
if(isset($_SESSION['uname'])!="")
{ 
?>
<!doctype html>
<html class="no-js" lang="en">
<?php
include 'head.php';
   
?>
<body><?php include 'sidebar.php';?>

    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
     
            
            <?php include'up-menu.php'; ?>
            
            <!-- Mobile Menu start -->
          <?php include 'menu.php'; 
            ?>
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                       
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Update Product</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
		
        <div class="analytics-sparkle-area">
            <div class="container-fluid">
                <div class="row" align="center">
                 <div class="container">
                      
                     <div class="row tabletrans" ><br>
		<div class="well">
		<table  class="table table-bordered">
			<tr>
				<!-- <th>F.No</th> -->
				<th> Name</th>
				<th>Email</th>
				<th>Message</th>
				
				<th>Actions </th>
				
			</tr>
			<?php
				include("conn.php");
				$query=mysqli_query($con,"SELECT * FROM `feedbk` ");
				$i = 1;
				while($row = mysqli_fetch_array($query)){
			?>
			<tr>
				
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['msg']; ?></td>
								
				<td> 
				<div class="btn-group">
					<a href="f_replay.php?f_id=<?php echo $row['f_id']; ?>" class="btn btn-info btn-sm">Reply</a>
				</div>
				<div class="btn-group">
					<a href="freply.php?f_id=<?php echo $row['f_id']; ?>" class="btn btn-danger btn-sm" id="delete" ><i class="fa fa-trash-o"></i></a>
				</div>
				</td>
			</tr>
			<?php
				}
				?>
		</table>
		
		
		</div>
    </div>
                      
                    </div> <!-- container// -->
                   
                </div>
            </div>
        </div>
        
      
      
    
       
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2018. All rights reserved. Template by <a href="https://colorlib.com/wp/templates/">Colorlib</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
    
    

</html>
<?php
}
else
{
  echo "<script>alert('Please Login'); window.location='index.php';</script>";
}
?>