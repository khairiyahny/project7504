<!DOCTYPE html>
<html>
<head>
    <title>Get Location</title>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyChW1EwPWScwcgng6y-p_H_zpWTEfoF2ps"></script>
    <script>
        var map, marker;

        function initMap() {
            var initialPos = {lat: 0.553412, lng: 123.134293}; // Default center point (Nairobi, for example)

            map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: initialPos
            });

            marker = new google.maps.Marker({
                position: initialPos,
                map: map,
                draggable: true, // Make the marker draggable
                title: "Drag me!",
                icon: {
                    url: "http://maps.google.com/mapfiles/ms/icons/red-dot.png" // Red marker icon
                }
            });

            // Update input fields when the marker is repositioned
            google.maps.event.addListener(marker, 'dragend', function(event) {
                document.getElementById('latitude').value = event.latLng.lat();
                document.getElementById('longitude').value = event.latLng.lng();
            });

            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };

                    marker.setPosition(pos);
                    map.setCenter(pos);
                    
                    document.getElementById('latitude').value = pos.lat;
                    document.getElementById('longitude').value = pos.lng();
                });
            } else {
                alert("Geolocation is not supported by this browser.");
            }
        }
    </script>
</head>
<body onload="initMap()">
    <h1>Get Location</h1>
    <div id="map" style="height: 400px; width: 100%;"></div>
    <form action="{{ route('get.location') }}" method="GET">
        @csrf
        <input type="hidden" id="latitude" name="latitude">
        <input type="hidden" id="longitude" name="longitude">
        <button type="submit">Submit Location</button>
    </form>

    @if(isset($latitude) && isset($longitude))
        <h2>Your Location</h2>
        <p>Latitude: {{ $latitude }}</p>
        <p>Longitude: {{ $longitude }}</p>
    @endif
</body>
</html>
