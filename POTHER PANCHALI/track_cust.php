<?php
session_start();
error_reporting(0);
include_once('includes/dbconnection.php');
if (strlen($_SESSION['fosuid']==0)) {
  header('location:logout.php');
  } else {  	
  ?>

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

    <?php
$uid=$_SESSION['fosuid'];
$odid=$_GET['orderid'];
      $query=mysqli_query($con,"select * from  tblorderaddresses  where UserId='$uid' and Ordernumber='$odid' ");
     
              while($row=mysqli_fetch_array($query))
              { ?>   

               <div class="row">
               <label>LATITUDE</label> 
                <input  type="hidden" value="<?php  echo $row['latit'];?>" id="lati" required="true"> 
                </div>


                  <div class="row">
               <label>LONGITUDE</label> 
                <input  type="hidden" value="<?php  echo $row['longit'];?>" id="longi" required="true"> 
                </div>

                 </div>
                                                                   <?php } ?> 
 <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 60%;
    width:95%;
    margin-left:2.5%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
  <center><div style="padding:50px;">
    <h1>Navigating to kudghat</h1>
    <a href="#" id="mapsButton">Click</a>
  </div></center>
    <div id="map"></div>
    <script>
      var deliverTO={"latitude":22.482010,"longitude":88.347390};
      var href="https://www.google.com/maps/search/?api=1&query="+deliverTO.latitude+","+deliverTO.longitude;
      function load(){
        if(navigator.geolocation){
          navigator.geolocation.getCurrentPosition(initMap);
          document.getElementById("mapsButton").setAttribute("href",href);
        } else{
          alert("Error getting location");
        }
      }
      function initMap(position) {
      var directionsService = new google.maps.DirectionsService;
      var directionsDisplay = new google.maps.DirectionsRenderer;
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 7,
        center: {lat: position.coords.latitude, lng: position.coords.longitude}
      });
      
      directionsDisplay.setMap(map);
      calculateAndDisplayRoute(directionsService,directionsDisplay,position);

      var onChangeHandler = function() {
        calculateAndDisplayRoute(directionsService, directionsDisplay);
      };
      document.getElementById('start').addEventListener('change', onChangeHandler);
      document.getElementById('end').addEventListener('change', onChangeHandler);
      
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA14pcdqtGazQpfP4-irhidQK91olyvh9o&callback=load">
    </script>
    </body>
</html>