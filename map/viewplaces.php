<?php
include 'db_config_maps.php';
?>
  <!DOCTYPE>
   <html>
   <head>
   <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAHpXSbwrofc4Zs387VVKtAxYXd4hvluxc">
   </script>
   <script>
   var myCenter=new google.maps.LatLng(18.0000,79.5800);
      
   function initialize()
   {
   var mapOptions = {
      center: new google.maps.LatLng(18.0000,79.5800),
      zoom: 7,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById("map_canvas"),
      mapOptions);
  }
   // marker.setMap(map);

   function generateMarkers(locations) {
      for (var i = 0; i < locations.length; i++) {  
        new google.maps.Marker({
          position: new google.maps.LatLng(locations[i][1], locations[i][2]),
          map: map,
          title: locations[i][0]
        });
      }
  }
   
   google.maps.event.addDomListener(window, 'load', initialize);

   </script>

   </head>
   <body>
   <div id="googleMap" style="width:400px;height:380px;"></div>
   <script type="text/javascript">
    window.onload = function () {
      initialize();
      generateMarkers(
        ['Bondi Beach', -33.890542, 151.274856],
        ['Coogee Beach', -33.923036, 151.259052],
        ['Cronulla Beach', -34.028249, 151.157507],
        ['Manly Beach', -33.800101, 151.287478],
        ['Maroubra Beach', -33.950198, 151.259302]
        ['warangal', 17.997512, 79.5745561]

      );
    };
  </script>
   </body>
   </html>