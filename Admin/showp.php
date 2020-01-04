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

<body><?php include("inc/menu.php");
     ?>
     

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
      
            
            <!-- Mobile Menu start -->
          <?php 
            include 'up-menu.php';    
            include 'menu.php'; 
            ?>
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <form role="search" class="sr-input-func">
                                                <input type="text" placeholder="Search..." class="search-int form-control">
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Dashboard V.1</span>
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
                      
                      <section class="panel panel-default">
                    <div class="panel-heading"> 
                    <h3 class="panel-title">Show Customer</h3> 
                    </div> 
                    <div class="panel-body">
                        <div class="well col-sm-10 col-sm-offset-1">
                <table  class="table table-bordered">
                    <caption>Customer Details</caption>
                    <tr>
                        <th>FirstName</th>
                        <th>LastName</th>
                        <th> Address</th>
                        <th>Phone Number</th>
                        <th>Email </th>
                        <th>Gender</th>
                        
                        

                        <th>Discription </th>
                       
                        <th>Action</th>

                    </tr>
                    <?php
                        include("conn.php");
                        $query=mysqli_query($con,"SELECT * FROM `rigistration` ");
                        $i = 1;
                        while($row = mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><?php echo $row[1] ?></td>
                        <td><?php echo $row[2]; ?></td>
                        <td><?php echo $row[3]; ?></td>
                        <td><?php echo $row[4]; ?></td>
                        <td><?php echo $row[5]; ?></td>
                        <td><?php echo $row[6]; ?></td>
                       

                        <td> 
                        <div class="btn-group">
                            <a href="p_delete.php?p_id=<?php echo $row['p_id']; ?>" class="btn btn-danger btn-sm" ><i class="fa fa-trash-o"></i></a>
                            </div> 
                            <div class="btn-group">
                            <a href="p_up.php?p_id=<?php echo $row['p_id']; ?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                        </div>
                        
                        </td>
                    </tr>
                   <!--  <?php
                        }
                        ?>
                </table>


               
                </div>
                     
                      <div class="well col-sm-10 col-sm-offset-1">
                <table  class="table table-bordered">
                    <caption>Other Home Product</caption>
                    <tr>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Rate</th>
                        

                        <th>Discription </th>
                       
                        <th>Action</th>

                    </tr>
                    <?php
                        include("conn.php");
                        $query=mysqli_query($con,"SELECT * FROM `othprod` ");
                        $i = 1;
                        while($row = mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><?php echo $row[1] ?></td>
                        <td><?php echo $row[2]; ?></td>
                        <td><?php echo $row[3]; ?></td>
                        <td><?php echo $row[4]; ?></td>
                       

                        <td> 
                        <div class="btn-group">
                            <a href="p_delete.php?o_id=<?php echo $row['o_id']; ?>" class="btn btn-danger btn-sm" ><i class="fa fa-trash-o"></i></a>
                            </div> 
                            <div class="btn-group">
                            <a href="op_up.php?o_id=<?php echo $row['o_id']; ?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                        </div>
                        
                        </td>
                    </tr> -->
                    <?php
                        }
                        ?>
                </table>


              
                </div>
                   
                    </div><!-- panel-body // -->
                    </section><!-- panel// -->

                     
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
  echo "<script>alert('Please Login'); window.location='login.html';</script>";
}
?>