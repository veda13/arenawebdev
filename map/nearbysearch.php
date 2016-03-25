<!DocType html>
<html>
  <head>
  <script src="js/jquery.min.js"></script>
  <script type="text/javascript"
    src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAHpXSbwrofc4Zs387VVKtAxYXd4hvluxc"></script>
  <script type="text/javascript">
      var map,infowindow,service;
   
  function initialize() {
    var mapOptions = {
      center: new google.maps.LatLng(18.0000,79.5800),
      zoom: 7,
      mapTypeId: google.maps.MapTypeId.ROADMAP
     };
        map = new google.maps.Map(document.getElementById("map_canvas"),
        mapOptions);
      
    var marker= new google.maps.Marker({
      position: new google.maps.LatLng(18.0000,79.5800),
      map: map,
      });
     marker.setDraggable (true);
      
    var request = {
      location: new google.maps.LatLng(18.0000,79.5800),
      radius: 5000,
      types: ['hospital','atm','bank','restaurant']
          };

         infowindow = new google.maps.InfoWindow();
         service = new google.maps.places.PlacesService('map_canvas');
         service.search(request, callback);
   }

   function callback(results, status) {
       if (status == google.maps.places.PlacesServiceStatus.OK) {
          document.getElementById('status').innerHTML = results.length + " places found";
          for (var i = 0; i < results.length; i++) {
           createMarker(results[i]);
          }
        }
        else
        alert("Status not OK");
  }
       
   function createMarker(place) {
     var placeLoc = place.geometry.location;
     var marker = new google.maps.Marker({
     map: map,
     position: place.geometry.location
       });

   google.maps.event.addListener(marker, 'click', function() {
         infowindow.setContent(place.name);
         infowindow.open(map, this);
        });
     }

  google.maps.event.addDomListener(window, 'load', initialize);

  </script>
   <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
    <div class="col-md-12"  style="margin-top: 2%" >
      <div class='col-md-3'>
        Enter Location<input name='placename' type='text' placeholder='location' class='form-control'>
        </input></div>

      <div class='col-md-3'>
        Enter Radius<input name='radius' type='text' placeholder='radius' class='form-control'></input>
      </div>
      <br>

      <div class="col-md-2 col-sm-3 col-md-offset-6">
          <input name="Submit" type="submit"  value="submit" class="btn btn-info"></input>
        </div>

      <div  class="col-md-9" id="map_canvas" style="height: 600px">  </div>
      <br><div  class="col-md-4"  ><p id="display_lng"></p></div>

      </div>
    
    <div class="col-md-12" 
      <div class="col-md-2 col-sm-3 col-md-offset-10">
          <input name="desc" type=""  value="Description"></input>
        </div>
      
      <div class="col-md-2 col-sm-3 col-md-offset-10">
        <input name="hospitals" type="checkbox" value="1">Hospitals</input><br>
        <input name="restaurant" type="checkbox" value="1">Restaurant</input><br>
        <input name="atm" type="checkbox" value="1">ATM</input><br>
        <input name="bank" type="checkbox" value="1">Bank</input>
      </div>

      


  </body>
</html>