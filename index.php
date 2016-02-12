<!DOCTYPE html>
<html>
  <head>
    <title>Localizing the Map</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    
    <link rel="stylesheet" type="text/css" href="css/dataurl.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap2.css">

    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css.map">
  </head>
  <body>
    <div id="map">

    </div>

    <div id="pano*">
      
    </div>
      
      <div class="extra ">
          
          <ul>
              <li class=""><a href=""><span class="glyphicon glyphicon-thumbs-up ico"></span><p class="text-left">Me gusta</p></li></a>
              <li class=""><a href=""><span class="glyphicon glyphicon-book  ico"></span><p class="text-left">Bibliotecas</p></a> </li>
              <li class=""><a href=""><span class="glyphicon glyphicon-film ico"></span> <p class="text-left">Cines</p></li></a>
              <li class=""><a href=""><span class="glyphicon glyphicon-gift ico"></span><p class="text-left">Tiendas</p></li></a>
              <li class=""><a href=""><span class="glyphicon glyphicon-headphones ico"></span><p class="text-left">Musica</p></li></a>
              <li class=""><a href=""><span class="glyphicon glyphicon-plane ico"></span><p class="text-left">Aeropuertos</p></li></a>
              <li class=""><a href=""><span class="glyphicon glyphicon-usd ico"></span><p class="text-left">Bancos</p></li></a>
              
          </ul>
      </div>

    </div>

    <script>
	
          function initMap() {

            

            var map = new google.maps.Map(document.getElementById('map'), {
              center: {lat: 34.397, lng: 150.644},
              zoom: 18

            });
            var infoWindow = new google.maps.InfoWindow({map: map});

            // Try HTML5 geolocation.
            if (navigator.geolocation) {
              navigator.geolocation.getCurrentPosition(function(position) {
                var pos = {
                  lat: position.coords.latitude,
                  lng: position.coords.longitude
                }
                 var pos2 = {
                  lat: position.coords.latitude+0.00027,
                  lng: position.coords.longitude
                };

                var image = 'img/yo3.png';
                  var beachMarker = new google.maps.Marker({
                    position:pos,
                    map: map,
                    icon: image
                  });
              infoWindow.setPosition(pos2);
              infoWindow.setContent('Aqui estas...');
                map.setCenter(pos);

                var panorama = new google.maps.StreetViewPanorama(
                document.getElementById('pano'), {
                  position: pos,
                  pov: {
                    heading: 34,
                    pitch: 10
                  }
                });
            //map.setStreetView(panorama);
              }, function() {
                handleLocationError(true, infoWindow, map.getCenter());
              });
            } else {
              // Browser doesn't support Geolocation
              handleLocationError(false, infoWindow, map.getCenter());
            }
          }

          function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(browserHasGeolocation ?
                                  'Error: The Geolocation service failed.' :
                                  'Error: Your browser doesn\'t support geolocation.');

          }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDMlgE28_vPBxJttdO-2l7_S-trJAmW3Bo&signed_in=true&callback=initMap"
        async defer></script>


    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>

    <script src="js/pace.min.js"></script>
    
  </body>
</html>