
<!DOCTYPE html>
<html lang="en">

<head>

   <?php //include("inc/head.php");  -->?>
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
    <div class="container"><br>

        <div class="form-group">
			
			<table  class="table table-bordered"style="color: black" >
                    <caption><h1 style="color:black" >Feedback Details<h1></caption>
                    <tr>
                        <th>Name</th>
                       <!--  <th>LastName</th>
                        <th> Address</th>
                        <th>Phone Number</th> -->
                        <th>Email </th>
                        <th>Message</th>
                        
                        

                       
                       
                        <th>Action</th>

                    </tr>
                    <?php
                        include("db.php");
                        $query=mysqli_query($con,"SELECT * FROM `feedbk` ");
                        $i = 1;
                        while($row = mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><?php echo $row[1] ?></td>
                        <td><?php echo $row[2]; ?></td>
                        <td><?php echo $row[3]; ?></td>
                      
                       

                       <td> 
                        <div class="btn-group">
                            <a href="p_delete.php?f_id=<?php echo $row['f_id']; ?>" class="btn btn-danger btn-sm" ><i class="fa fa-trash-o"></i>Delete</a>
                            </div>  
                            
                        
                        </td>
                    </tr>
                    <?php
                        }
                        ?>
                </table>
			
        </div>
    </div>
    <!-- /.container -->

   <?php include("inc/bottom.php"); ?>

</body>
</html>
