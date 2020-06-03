<?php
    session_start();
    ini_set("display_errors", "1");
    include_once('includes/dbconnection.php');

 if (strlen($_SESSION['fosuid']==0)) {
        header('location:logout.php');
    } 

    else { 


        if(isset($_POST['placeorder'])){

             $userid=$_SESSION['fosuid'];
$quer=mysqli_query($con,"update tblorderaddresses set setto='1'  where UserId='$userid' and setto is null ");
              $query="update tblorders set IsOrderPlaced='1'  where UserId='$userid' and IsOrderPlaced='0' ";
              
               $result=mysqli_query($con, $query);

               if ($result) {

              
                echo "<script>window.location.href='category.php'</script>";
                foreach ($_SESSION['cart_details'] as $itemId=>$itemQuantity)
{

unset($_SESSION['cart_details']);
}

            }
     
        }
         if(isset($_POST['order'])){
              $userid=$_SESSION['fosuid'];

$ret=mysqli_query($con,"select OrderNumber from tblorders where UserId='$userid' and   IsOrderPlaced='0' ");
$row=mysqli_fetch_array($ret);

$oidd=$row['OrderNumber'];

             

              
                echo "<script>window.location.href='track-order-search.php?orderid=$oidd'</script>";
                $quer=mysqli_query($con,"update tblorderaddresses set setto='1'  where UserId='$userid' and setto is null ");
 $query="update tblorders set IsOrderPlaced='1'  where UserId='$userid' and IsOrderPlaced='0' ";
            
               $result=mysqli_query($con, $query);


               if ($result) {

                foreach ($_SESSION['cart_details'] as $itemId=>$itemQuantity)
{

unset($_SESSION['cart_details']);
}
}
            
     
        }


 if(isset($_POST['place'])){
              $userid=$_SESSION['fosuid'];

$ret=mysqli_query($con,"select OrderNumber from tblorders where UserId='$userid' and   IsOrderPlaced='0' ");
$row=mysqli_fetch_array($ret);

$oidd=$row['OrderNumber'];

             

              
                echo "<script>window.location.href='invoice.php?orderid=$oidd'</script>";
                $quer=mysqli_query($con,"update tblorderaddresses set setto='1'  where UserId='$userid' and setto is null ");
 $query="update tblorders set IsOrderPlaced='1'  where UserId='$userid' and IsOrderPlaced='0' ";
           
               $result=mysqli_query($con, $query);


               if ($result) {

                foreach ($_SESSION['cart_details'] as $itemId=>$itemQuantity)
{

unset($_SESSION['cart_details']);
}
}
            
     }
        




 
 if(isset($_POST['arn'])){
              $userid=$_SESSION['fosuid'];

$ret=mysqli_query($con,"select OrderNumber from tblorders where UserId='$userid' and   IsOrderPlaced='0' ");
$row=mysqli_fetch_array($ret);

$oidd=$row['OrderNumber'];

             

              
                echo "<script>window.location.href='cancelorder.php?orderid=$oidd'</script>";
                $quer=mysqli_query($con,"update tblorderaddresses set setto='1'  where UserId='$userid' and setto is null ");
                 $query="update tblorders set IsOrderPlaced='1'  where UserId='$userid' and IsOrderPlaced='0' ";
           
               $result=mysqli_query($con, $query);

               if ($result) {

                foreach ($_SESSION['cart_details'] as $itemId=>$itemQuantity)
{

unset($_SESSION['cart_details']);
}

}
 
  }

if(isset($_POST['home'])){
              $userid=$_SESSION['fosuid'];
                echo "<script>window.location.href='index.php'</script>";
                $quer=mysqli_query($con,"update tblorderaddresses set setto='1'  where UserId='$userid' and setto is null ");
                $query="update tblorders set IsOrderPlaced='1'  where UserId='$userid' and IsOrderPlaced='0' ";
              
               $result=mysqli_query($con, $query);


               if ($result) {

                foreach ($_SESSION['cart_details'] as $itemId=>$itemQuantity)
{

unset($_SESSION['cart_details']);
}
}
}





}
    


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
    <title>POTHER PANCHALI ORDER</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet"> 
</head>

<body>
            <!-- end:Top links -->

            <!-- start: Inner page hero -->
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


     <div class="container">
          <div class="jumbotron">
            <h1  align="center" class="text-center" style="color: green;"><span class="glyphicon glyphicon-ok-circle"></span> Order Placed Successfully.</h1>
          </div>
        </div>
        <br>

        <?php

        $admid=$_SESSION['fosuid'];
$ret=mysqli_query($con,"select FirstName from tbluser where ID='$admid'");
$que=mysqli_query($con,"select LastName from tbluser where ID='$admid'");
$row=mysqli_fetch_array($ret);
$rows=mysqli_fetch_array($que);
$fname=$row['FirstName'];
$lname=$rows['LastName'];

?>

<h2  align="center" class="text-center"><span> Thank you for Ordering at POTHER PANCHALI ---->   <span class="primary-color">      <?php echo $fname;?>    <?php echo $lname;?></h2></span></span>

<?php


        $uid=$_SESSION['fosuid'];
$ret=mysqli_query($con,"select OrderNumber from tblorders where UserId='$uid' and   IsOrderPlaced='0' ");
$row=mysqli_fetch_array($ret);

$oid=$row['OrderNumber'];


?>

<h3  align="center" class="text-center"> <strong>Your Order Number:</strong> <span style="color: blue;"><?php echo $oid; ?></span> </h3>


 </div>
        </div>
        <br>

</div>


<h1   align="center" class="text-center">
  
<form method="post">
  <button type="submit" name="placeorder"  class="btn theme-btn btn-lg">Continue Shopping</button> 
  <button type="submit" name="order"  class="btn theme-btn btn-lg">Track Order</button> 
  <button type="submit" name="place"  class="btn theme-btn btn-lg">Invoice</button> 
   <button type="submit" name="arn"  class="btn theme-btn btn-lg">Cancel Order</button>
    <button type="submit" name="home"  class="btn theme-btn btn-lg">Home</button>
    </form>
  

  </h1>



                    </div>
                </div>
            </div>
       </div>
                </div>
            </div>
       </div>
                </div>
            </div>
       </div>
                </div>
            </div>
       </div>
                </div>
            </div>
       </div>
                </div>
            </div>


            <!-- start: FOOTER -->
                 <?php include_once('includes/footers.php');?>

            <!-- end:Footer -->
        </div>
        <!-- end:page wrapper -->
    </div>
    <!--/end:Site wrapper -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
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



