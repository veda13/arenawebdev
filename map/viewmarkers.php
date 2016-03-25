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
    var map;
   function initialize()
   {
   var mapOptions = {
      center: myCenter,
      zoom: 7,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    map = new google.maps.Map(document.getElementById("map_canvas"),mapOptions);

    generateMarkers();
  }
   

   function generateMarkers() {
   	

      var marker= new google.maps.Marker({
          position: new google.maps.LatLng(17.997512,79.5745561),
          map: map,
      });marker.setMap(map);marker.setDraggable (true);


   	 <?php 
   	 $query="select * from map_details";

     $res=mysql_query($query);
     if(!$res)
     	{
     		die("Query Failed: ".mysql_error());
     	}
     while($rows=mysql_fetch_array($res))
     {
     	
            
      	echo ' var marker= new google.maps.Marker({
          position: new google.maps.LatLng('.$rows['lat'].','.$rows['lng'].'),
          map: map,
      });';

      
       echo 'marker.setMap(map);';
       echo 'marker.setDraggable (true);';

      }
      ?>
   }
   google.maps.event.addDomListener(window, 'load', initialize);

   </script>

   </head>
   <body>
     
   <div id="map_canvas" style="width:100%;height:380px;"></div>
   <script type="text/javascript">

     
    
  </script>
   </body>
   </html>