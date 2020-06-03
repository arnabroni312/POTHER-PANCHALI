<?php
session_start();
error_reporting(0);
include_once('includes/dbconnection.php');
    
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
     <style>
        #dvDistance{
            font-size:150%;

        }
            #map {
                height: 100%;
            }

            html, body {
                height: 100%;
                margin: 0;
                padding: 0;
            }

            #over_map {
                position: absolute;
                top: 10px;
                left: 89%;
                z-index: 99;
                background-color: #ccffcc;
                padding: 10px;
            }
        </style>
    </head>

    <body>
       
        <center><div style="padding:50px;">
        <h1>POTHER PANCHALI TRACKING</h1>
        <a href="my-order.php" id="mapsButton" >Back To My Orders</a>
        
    </div></center>
     <div id="dvDistance"></div>
     <div id="time"></div>
        <div id="map"></div>
       
        

       
        <!-- jQuery CDN -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.14.2/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
        <script src="https://www.gstatic.com/firebasejs/7.14.2/firebase-analytics.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.14.1/firebase-database.js"></script>

        <!-- Firebase -->
        <script src="https://www.gstatic.com/firebasejs/4.12.1/firebase.js"></script>
        <script>
            // Replace your Configuration here..
            var firebaseConfig = {
    apiKey: "AIzaSyBstXjDaC5M2i_KGKWKx3Xa263SQL_H1oI",
    authDomain: "pother-panchali-delivery.firebaseapp.com",
    databaseURL: "https://pother-panchali-delivery.firebaseio.com",
    projectId: "pother-panchali-delivery",
    storageBucket: "pother-panchali-delivery.appspot.com",
    messagingSenderId: "518287642291",
    appId: "1:518287642291:web:d4ab602d3130dea546eac6"
  };
            firebase.initializeApp(firebaseConfig);
        </script>

        <?php
    
        $oid=$_GET['orderid'];
         $query=mysqli_query($con,"select * from  tblfoodtracking  where OrderId='$oid' and status='Out For Delivery' ");
           while($row=mysqli_fetch_array($query))
              {?> 
        


            <div class="row">
             
                <input type="hidden" value="<?php  echo $row['StatusDate'];?>" id="starttime" required="true"> 

                 </div>

                 </div>
                 <?php }?>

    <?php
$admid=$_SESSION['fosuid'];
        $oiid=$_GET['orderid'];
      $query=mysqli_query($con,"select * from  tblorderaddresses  where UserId='$admid' and Ordernumber='$oiid' ");
              while($row=mysqli_fetch_array($query))
              {?>   

               <div class="row">
             
                <input type="hidden" value="<?php  echo $row['latit'];?>" id="lati" required="true"> 
                </div>


                  <div class="row">
              
                <input  type="hidden" value="<?php  echo $row['longit'];?>" id="longi" required="true"> 
                </div>

                 </div>
                 <?php }?>
                                  <script>
                                   var add1=[document.getElementById("lati").value];
                           var add2= [document.getElementById("longi").value]; 
                           
                           var d1=new Date();
                           console.log(d1);
                           var d2=new Date(document.getElementById("starttime").value);
                           console.log(d2);
                           var res = Math.abs(d2 - d1) / 1000;
                           console.log(res);
         
         // get total days between two dates
         var days = Math.floor(res / 86400);
        // document.write("<br>Difference (Days): "+days);                        
         
         // get hours        
         var hours = Math.floor(res / 3600) % 24;        
        //document.write("<br>Difference (Hours): "+hours);  
         
         // get minutes
         var min = Math.floor(res / 60) % 60;
         //document.write("<br>Difference (min): "+min);
         console.log(min); 
     
         // get seconds
         var seconds = res % 60;
        // document.write("<br>Difference (Seconds): "+seconds)
            var deliverTO={"latitude":add1,"longitude":add2};
                
     var href="https://www.google.com/maps/search/?api=1&query="+deliverTO.latitude+","+deliverTO.longitude;
            
            
            
            

        
  var curr_lat; var curr_lng;
            var map;
            var uluru;
            var kudghat;
            function initMap() {
            kudghat=new google.maps.LatLng(22.4783, 88.3468);
            var directionsService = new google.maps.DirectionsService;
            var directionsDisplay = new google.maps.DirectionsRenderer;
            map = new google.maps.Map(document.getElementById('map'), {
              zoom: 16,
              center: kudghat,
              
            });
            console.log({map});

            // get firebase database reference.
            var loc_ref= firebase.database().ref("/");
    //------------------------------------------------------------------------------------
            loc_ref.on('value',gotData,errData);
          
            function gotData(data){
                console.log(data.val());
                curr_lat=data.val()["amit"].Latitude;
                curr_lng=data.val()["amit"].Longitude;

                console.log("current_latitude:"+parseFloat(curr_lat)+" &amp;&amp; current_longitude: " +parseFloat(curr_lng));


                 
                var marker = new google.maps.Marker({
                position: {lat:curr_lat,lng:curr_lng},
                title:'Live Location',
                map: map
                });
  map.setZoom(16);
  map.panTo(marker.position);
            }
 
            function errData(err){
                console.log('error: '+err);
            }
            
 
            
            
            directionsDisplay.setMap(map);
            calculateAndDisplayRoute(directionsService,directionsDisplay);


            };
            //document.getElementById('start').addEventListener('change', onChangeHandler);
            //document.getElementById('end').addEventListener('change', onChangeHandler);
            
        
    
          
      

          
            
 
            

          function calculateAndDisplayRoute(directionsService, directionsDisplay,lat,lng) {
              console.log(directionsService);
            directionsService.route({
              origin: kudghat,
              destination: deliverTO.latitude+","+deliverTO.longitude,
              travelMode: 'DRIVING'

            }, function(response, status) {
              if (status === 'OK') {
                directionsDisplay.setDirections(response);
              } else {
                window.alert('Directions request failed due to ' + status);
              }
            });
          

         var service = new google.maps.DistanceMatrixService();
service.getDistanceMatrix({
    origins: [{lat:22.4783,lng:88.3468}],
    destinations: [new google.maps.LatLng(add1, add2)],
    travelMode: google.maps.TravelMode.DRIVING,
    unitSystem: google.maps.UnitSystem.METRIC,
    avoidHighways: false,
    avoidTolls: false
}, function (response, status) {
    if (status == google.maps.DistanceMatrixStatus.OK && response.rows[0].elements[0].status != "ZERO_RESULTS") {
        var distance = response.rows[0].elements[0].distance.text;
        var duration = response.rows[0].elements[0].duration.text;
  
          if (duration.indexOf('day') != -1) {
            var days = duration.split('day')[0].trim();
            var hours = duration.split('day')[1].trim().split(' ')[0].trim();
            duration = (parseInt(days) * 60 * 24) + (parseInt(hours) * 60) +'mins';
            
        }
        else if (duration.indexOf('hours') != -1) {
            var hours = duration.split('hours')[0].trim();
            var minutes = duration.split('hours')[1].trim().split(' ')[0].trim();
            duration = (parseInt(hours) * 60) + parseInt(minutes) +'mins' ;
            
        }
        else if (duration.indexOf('hour') != -1) {
            var hour = duration.split('hour')[0].trim();
            var minutes = duration.split('hour')[1].trim().split(' ')[0].trim();
           
            duration = (parseInt(hour) * 60) + parseInt(minutes) +'mins';
          
            
        }
        else {
            duration = response.rows[0].elements[0].duration.text.trim();
            
        }
        var dvDistance = document.getElementById("dvDistance");
        dvDistance.innerHTML = "";
        dvDistance.innerHTML += "Distance: " + distance + "<br />";
        dvDistance.innerHTML += "Duration:" + duration; +'mins';
 



    } else {
        alert("Unable to find the distance via road.");
    }

var t=duration.replace('mins','');
  console.log(t);
 
    var finalTime=t - min;
    console.log(finalTime);
    

    setInterval(function(){
       
     finalTime=finalTime-1;

          
       document.getElementById("time").innerHTML = "time left: " + finalTime ;

       if(finalTime==0){
         document.getElementById("time").innerHTML = "  YOUR ORDER HAS REACHED  " ;
         clearInterval();
       }
     
       
  },60000);

     setInterval(function(){
       
  var x=   finalTime;

          
       document.getElementById("time").innerHTML = "time left: " + x ;
       x=0;

if(x==0);

clearInterval();

     
       
  },1000);

 
    
        
});
 }

        </script>
        
        
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA14pcdqtGazQpfP4-irhidQK91olyvh9o&&callback=initMap"></script>

    </body>
</html>