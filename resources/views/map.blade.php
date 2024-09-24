<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Map - Vị trí hiện tại của tôi</title>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNI_ZWPqvdS6r6gPVO50I4TlYkfkZdXh8"></script>
    <style>
        #map {
            height: 500px;
            width: 100%;
        }
    </style>
</head>

<body>
    <h1>Vị trí hiện tại của tôi trên Google Map</h1>
    <div id="map"></div>

    <script>
        function initMap() {
            // Default location (optional)
            const defaultLocation = {
                lat: -34.397,
                lng: 150.644
            };
            const map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: defaultLocation
            });

            // Get user's location
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition((position) => {
                    const userLocation = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };
                    map.setCenter(userLocation);

                    // Add a marker for the user's location
                    new google.maps.Marker({
                        position: userLocation,
                        map: map
                    });
                }, () => {
                    handleLocationError(true, map);
                });
            } else {
                // Browser doesn't support Geolocation
                handleLocationError(false, map);
            }
        }

        function handleLocationError(browserHasGeolocation, map) {
            const infoWindow = new google.maps.InfoWindow();
            infoWindow.setPosition(map.getCenter());
            infoWindow.setContent(browserHasGeolocation ?
                'Error: Không xác định được vị trí hiện tại.' :
                'Error: Browser của bạn không hỗ trợ xác định vị trí.');
            infoWindow.open(map);
        }

        // Initialize the map when the window loads
        window.onload = initMap;
    </script>
</body>

</html>
