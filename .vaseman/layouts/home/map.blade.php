{{-- Part of allstars project. --}}

<div id="map-canvas" style="width:100%; height: 350px;"></div>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=true&key=AIzaSyAbgi_AVsZmVJf_BLgktVDVSZWuqMO-LWU"></script>
<script type="text/javascript">
    var mapConfig = {
        lat: 25.0261275,
        lng: 121.5210278,
        contentString: '<p>106 大安區羅斯福路二段100號25F</p>'
    };
    var myLatlng;
    var map;
    var marker;

    function initialize() {
        myLatlng = new google.maps.LatLng(mapConfig.lat, mapConfig.lng);

        var mapOptions = {
            zoom: 13,
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scrollwheel: false,
            draggable: false
        };
        map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

        var contentString = mapConfig.contentString;

        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });

        marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: 'Marker'
        });

        google.maps.event.addListener(marker, 'click', function () {
            infowindow.open(map, marker);
        });
    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>
