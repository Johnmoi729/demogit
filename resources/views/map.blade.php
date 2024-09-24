<!DOCTYPE html>
<html>

<head>
    <title>Google Map</title>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNI_ZWPqvdS6r6gPVO50I4TlYkfkZdXh8"></script>
    <style>
        #map {
            height: 500px;
            width: 100%;
        }
    </style>
</head>

<body>
    <h1>Vị trí hiện tại trên bản đồ(Test)</h1>
    <div id="map"></div>

    <script>
        function initMap() {
            var location = {
                lat: -34.397,
                lng: 150.644
            }; // Change to your desired coordinates
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 8,
                center: location
            });
            var marker = new google.maps.Marker({
                position: location,
                map: map
            });
        }

        // Initialize the map
        google.maps.event.addDomListener(window, 'load', initMap);
    </script>
</body>

</html>
