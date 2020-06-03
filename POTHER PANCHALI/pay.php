<?php
    session_start();
    ini_set("display_errors", "1");
    include_once('includes/dbconnection.php');

 if (strlen($_SESSION['fosuid']==0)) {
        header('location:logout.php');
    } 

    else { 
 
  
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
                        <li>Payment Options</li>
                    </ul>
                </div>
            </div>


                <div class="container m-t-30">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
                        <div class="sidebar clearfix m-b-20">
                            <div class="main-block">
                                <div >
                                     </div>
                                  
      
                                      
              
                                    <ul>        
                                        <li>
                                            
                                        </li>
                                
                                    
                                    </ul>
                                    
                                <div class="clearfix"></div>
                            </div>

                            
<?php
            $total = 0;
                                      
                                        foreach ($_SESSION['cart_details'] as $itemId=>$itemQuantity) {
                                            $query=mysqli_query($con,"select * from  tblfood where id=".$itemId);
                                            $itemDetails=mysqli_fetch_array($query);
                                            $item=array();
                                            $item["id"]=$itemId;
                                            $item['quantity']=$itemQuantity;
                                            $item["name"]=$itemDetails["ItemName"];
                                            $item["price"]=$itemDetails["ItemPrice"];
                                           

                                            $total = $total + ($item["quantity"] * $item["price"]);
                                        } 
                   
 ?>

  </div>
                                                </div>
                                            </div>
                                            <hr />


        <div class="container">
          <div class="jumbotron">
            <h1  align="center">Choose your payment option</h1>
          </div>
        </div>
        <br>
<h1 align="center" class="text-center">Grand Total: &#8377;<?php echo "$total"; ?>/-</h1>
<h5  align="center"class="text-center">including all service charges. (no delivery charges applied)</h5>
<br>
<h1 align="center" class="text-center">
  <a href="cart.php"><button class="btn btn-warning"><span class="glyphicon glyphicon-circle-arrow-left"></span> Go back to cart</button></a>
  <a href="onlinepay.php"><button class="btn btn-success"><span class="glyphicon glyphicon-credit-card"></span> Pay Online</button></a>
  <a href="COD.php"><button class="btn btn-success"><span class="glyphicon glyphicon-"></span> Cash On Delivery</button></a>
</h1>

  </div>
            </div>


            <!-- start: FOOTER -->
                 <?php include_once('includes/footers.php');?>




 
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

                               

