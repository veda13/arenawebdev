<?php
include 'db_config_maps.php';
?>
<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="css/bootstrap.min.css">
 <script src="js/jquery.min.js"></script> 
 <script type="text/javascript"
 src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAHpXSbwrofc4Zs387VVKtAxYXd4hvluxc">
</script>
<script type="text/javascript">
  var map,marker;

 

  function initialize() {
    var mapOptions = {
      center: new google.maps.LatLng(18.0000,79.5800),
      zoom: 7,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById("map_canvas"),
      mapOptions);
  }
  
  function getLocation() {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(showPosition);
    } else {
      disp.html("Geolocation is not supported by this browser.");
    }
  }
  function showPosition(position) {
    $('#displat_lng').html("Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude);
  

                     marker = new google.maps.Marker({
                    position: new google.maps.LatLng( position.coords.latitude,position.coords.longitude),
                    map: map,
          
                    title: 'Hello World!'
     });

     marker.setDraggable (true);

    

                var infowindow = new google.maps.InfoWindow({
                    content: "yghjg"
                });

                google.maps.event.addListener(marker, 'click', function() {
                  infowindow.open(map,marker);
                });

     marker.setMap(map);
  }

   function getMarkerLocation(){

    var lat = marker.getPosition().lat();
      var lng = marker.getPosition().lng();

       $('#displat_lng').html("Latitude: " + lat + 
    "<br>Longitude: " + lng);


   }
    function savePlace()
    {
      var lat = marker.getPosition().lat();
      var lng = marker.getPosition().lng();

      $.ajax({
            url: 'saveplace.php',
            method:'POST',
            data:{'lat':lat,'lng':lng},
            success:function(data) {
              alert(data);

            }
        });
    }

  google.maps.event.addDomListener(window, 'load', initialize);



</script>

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>    
</head>
<div class="container">

  <h1>Maps</h1>
  <button onclick="getLocation()">Get my current Location</button>

  <button onclick="getMarkerLocation()">Get marker Location</button>
  <button onclick="savePlace()"> Save </button>

  <div class="col-md-12">

   <div  class="col-md-8" id="map_canvas" style="height: 500px">  </div>
   <div  class="col-md-4"  ><p id="displat_lng"></p></div>


 </div>



</script>

</script>


</body>
</html>