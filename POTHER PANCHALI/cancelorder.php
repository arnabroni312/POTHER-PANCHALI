<?php
session_start();
error_reporting(0);
include_once('includes/dbconnection.php');


 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Food Ordering System</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet"> </head>
<body>
       <section class="inner-page-hero bg-image" data-image-src="images/decouvrez-l-experience-food-d-airbnb.jpg">
                <div class="profile">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12  col-md-4 col-lg-4 profile-img">
                                <div class="image-wrap">
                                    <figure><img src="images/decouvrez-l-experience-food-d-airbnb.jpg" alt="Profile Image"></figure>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 profile-desc">
                                <div class="pull-left right-text white-txt">
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- end:Inner page hero -->
            <div class="breadcrumb">
                <div class="container">
                    <ul>
                        <li><a href="index.php" class="active">Home</a></li>
                        <li><a href="cart.php">Cart</a></li>
                        <li><a href="address.php">Address Details</a></li>
                        <li><a href="pay.php">Payment Options</a></li>
                        <li>Order Confirmation</li>
                    </ul>
                </div>
            </div>

              </div>

      </div>
    </nav>
 </div>
  </div>
   </div>
    </div>

<div style="margin-left:50px;">
<?php  
$oid=$_GET['orderid'];
$query=mysqli_query($con,"select OrderFinalStatus from tblorderaddresses where Ordernumber='$oid'");
$row=mysqli_fetch_array($query);
$status=$row['OrderFinalStatus'];
?>


<?php  


if($status==""){?>
  <strong> <h3  align="center" class="text-center" style="color: blue;">ORDER CANCELLED </h3></strong>

  <?php
  $oiid=$_GET['orderid'];
   $query=mysqli_query($con, "update   tblorderaddresses set OrderFinalStatus='Order Cancelled' where Ordernumber='$oiid'");
} ?>



     <?php if( $status=="Out For Delivery" || $status==" 
Order Confirmed & Food Being Prepared"|| $status=="Food Delivered") {?>

<div class="row">
<strong> <h3  align="center" class="text-center" style="color: blue;">ORDER CANCELLED </h3></strong>
<?php }  ?>


     <?php if( $status=="Order Cancelled") {?>

<div class="row">
<strong> <h3  align="center" class="text-center" style="color: blue;">ALREADY CANCELLED </h3></strong>
<?php }  ?>


<strong> <h2><a href='my-order.php' style="color: blue;">back </a></h2></strong>
  
  
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>

</body>
</html>

     