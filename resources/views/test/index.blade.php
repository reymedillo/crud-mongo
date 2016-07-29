<!-- <!DOCTYPE html>
<html>
  <head>
    <title>Localizing the Map</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
      // This example displays a map with the language and region set
      // to Japan. These settings are specified in the HTML script element
      // when loading the Google Maps JavaScript API.
      // Setting the language shows the map in the language of your choice.
      // Setting the region biases the geocoding results to that region.
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
          center: {lat: 35.717, lng: 139.731}
        });
        console.log(map);
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8rWT_Zle8HbyESNMy8MWZ9V0zxn-tBgQ&callback=initMap&language=ar&region=EG"
    async defer>
    </script>
  </body>

&language=ja&region=JP


</html> -->


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
</head>
<body>
    Latitude:
    <input type="text" id="txtLatitude" value="10.3321518" />
    Latitude:
    <input type="text" id="txtLongitude" value="123.9067938" />
    <input type="button" value="Get Address" onclick="GetAddress()" />
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8rWT_Zle8HbyESNMy8MWZ9V0zxn-tBgQ&libraries=places"></script> 
    <script type="text/javascript">
        function GetAddress() {
            var lat = parseFloat(document.getElementById("txtLatitude").value);
            var lng = parseFloat(document.getElementById("txtLongitude").value);
            var latlng = new google.maps.LatLng(lat, lng);
            var geocoder = geocoder = new google.maps.Geocoder();
            geocoder.geocode({ 'latLng': latlng }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    if (results[1]) {
                        console.log(results);
                    }
                }
            });
        }
    </script>
</body>
</html>
