$(function () {
    function loadMapGoogleAPI() {
        google.maps.event.addDomListener(window, 'load', function () {
            function createMap($map) {
                var markerObj;
                var mapObj;
                var lng = $map.lng;
                var lat = $map.lat;
                var latlng = new google.maps.LatLng(lat, lng);

                var mapOptions = {
                    zoom: 16,
                    center: latlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    scaleControl: true
                };
                mapObj = new google.maps.Map(document.getElementById($map.getId), mapOptions);

                markerObj = new google.maps.Marker({
                    position: latlng,
                    map: mapObj
                });

                // マーカークリックイベントを追加
                google.maps.event.addListener(markerObj, 'click', function () {
                    // info Windowを作成
                    var infoWindow = new google.maps.InfoWindow();
                    infoWindow.setContent($map.setContent);
                    infoWindow.open(mapObj, markerObj);
                })
            }

            var $map = mapObject;

            createMap($map);

        });
    }

    loadMapGoogleAPI();
});