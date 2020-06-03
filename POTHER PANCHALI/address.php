<?php
    session_start();
    ini_set("display_errors", "1");
    include_once('includes/dbconnection.php');


 
    if (strlen($_SESSION['fosuid']==0)) {
        header('location:logout.php');
    } 

    else { 

      $del=mysqli_query($con,"DELETE from tblorderaddresses where setto is null  ");  
    

        if(isset($_POST['placeorder'])){
              
        //getting address
            $fnaobno=$_POST['flatbldgnumber'];
            $street=$_POST['streename'];
            $area=$_POST['area'];
            $lndmark=$_POST['landmark'];
           $city=$_POST['city'];
            $pinc=$_POST['pincode'];
            $lati=$_POST['latitude'];
            $longi=$_POST['longitude'];
            $userid=$_SESSION['fosuid'];
             $orderno= mt_rand(100000000, 999999999);
           
            

            
           $query="insert into tblorderaddresses(UserId,Ordernumber,Flatnobuldngno,StreetName,Area,Landmark,City,pincodes,latit,longit,assign) values('$userid','$orderno','$fnaobno','$street','$area','$lndmark','$city','$pinc','$lati','$longi','0');";
            
            
           $query.="update tblorders set OrderNumber='$orderno'  where UserId='$userid' and IsOrderPlaced='0' ";
            $result=mysqli_multi_query($con, $query);
             

           
        


             
  
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
    <div class="site-wrapper animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
        <!--header starts-->
        <header id="header" class="header-scroll top-header headrom">
            <!-- .navbar -->
            <?php include_once('includes/header.php');?>
            <!-- /.navbar -->
        </header>
  
        <div class="page-wrapper">
            <!-- top Links -->
            <div class="top-links">                
            </div>
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
                        <li>Address Details</li>
                    </ul>
                </div>
            </div>
            
            <div >
                <div class="row">
                    <div >
                        <div >
                            <div >
                                <div>
                                     </div>
                                
      
                                      
              
                                    <ul>        
                                        <li>
                                         
                                        </li>
                                
                                    
                                    </ul>
                                    
                                <div class="clearfix"></div>
                            </div>
                            <!-- end:Sidebar nav -->
                        </div>
                        <!-- end:Left Sidebar -->
                    </div>

                    <div >
                        <div >
                            <div >
                               
                                        <i ></i>
                                        <i ></i>
                                    </a>
                                </h3>
                                
                                <div class="clearfix"></div>
                            </div>

                           
                                  

                                </div>                           
                            </div>
  
                  
                                   <form method="post" id="address-form">
                                <div class="col-xs-12 col-md-12 col-lg-12" style="margin-top: 20px;">
                                    <div class="sidebar-wrap">
                                        <div class="widget widget-cart">
                                            <div class="widget-heading">
                                                <h3 class="widget-title text-dark">
                                                    YOUR ADDRESS DETAILS
                                                </h3>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="order-row bg-white">
                                                <div class="widget-body">                                
                                                    <div class="form-group row no-gutter">
                                                        <div class="col-lg-12">
                                                            <input type="text" name="flatbldgnumber"  placeholder="Flat or Building Number" class="form-control" required="true">
                                                            <input type="text" name="streename" placeholder="Street Name" class="form-control" required="true">       
                                                            <input type="text" name="area"  placeholder="Area" class="form-control" required="true">
                                                            <input type="text" name="landmark" placeholder="Landmark if any" class="form-control"> 
                                                            <input type="text" name="city" placeholder="City" class="form-control" required="true">           
                                                            <input type="text" name="pincode" placeholder="Pincode" class="form-control" required="true">    
                                                                     
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                            <hr />
                                        
                                    
                                            <div class="widget-body">
                                                <div class="price-wrap text-xs-center">
                                                   
                                                    
                                                    <button  type="submit" name="placeorder"  class="btn theme-btn btn-lg">ADD ADDRESS</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- start: FOOTER -->
                <?php include('includes/footer.php'); ?>
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

    <script>
        function geocode(address,callback){
            $.get("https://maps.googleapis.com/maps/api/geocode/json?address="+address+"&key=AIzaSyAXbeSXDpsYVcu3mgrRwkgaWG19CmcX40Q",function(data){
                var lat=data.results[0].geometry.location.lat;
                var lng=data.results[0].geometry.location.lng;
                return callback(lat,lng);
            });
        }
        $("#address-form").submit(function(){
            var inputs=$("#address-form :input");
            window.inputs=inputs;
            var address={};
            for(var i=0;i<inputs.length;i++){
                var element=$(inputs[i]);
                switch(element.attr("name")){
                    case "flatbldgnumber":
                        address.flatbldgnumber=element.val();
                        break;
                    case "streename":
                        address.streename=element.val();
                        break;
                    case "area":
                        address.area=element.val();
                        break;
                    case "landmark":
                        address.landmark=element.val();
                        break;
                    case "city":
                        address.city=element.val();
                        break;
                    case "pincode":
                        address.pincode=element.val();
                        break;
                }
            }
            var humanReadableAddress=address.flatbldgnumber+" "+address.streename+" "+", "+address.area+", "+address.city+" "+address.pincode;
            geocode(humanReadableAddress,function(lat,lng){
                address.latitude=lat;
                address.longitude=lng;
                address.placeorder=1;
                $.post("address.php",address,
                function(data, status){
                    window.location.href='pay.php';

        
                });
            });
            return false;
        });

      
    </script>
</body>

</html>