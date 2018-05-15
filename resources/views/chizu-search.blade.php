@extends("layouts.frontend.app")

@section('title', '分譲地を地図から探す')
@section('description', '分譲地を地図から探す')
@section('keywords', '分譲地を地図から探す')


@section('style')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwlkTA1L6lLnp76nr6LZ22ebIXMXNxxUY&language=ja&region=JP"></script>
    <script type="text/javascript"
            src="{{ asset("plugins/js-marker-clusterer-gh-pages/src/markerclusterer.js") }}"></script>
    <script type="text/javascript"
            src="{{ asset("plugins/js-marker-clusterer-gh-pages/examples/data.json") }}"></script>

    <script type="text/javascript">
        var styles = [[{
            url: 'images-cluster/people35.png',
            height: 35,
            width: 35,
            anchor: [16, 0],
            textColor: '#ff00ff',
            textSize: 10
        }, {
            url: 'images-cluster/people45.png',
            height: 45,
            width: 45,
            anchor: [24, 0],
            textColor: '#ff0000',
            textSize: 11
        }, {
            url: 'images-cluster/people55.png',
            height: 55,
            width: 55,
            anchor: [32, 0],
            textColor: '#ffffff',
            textSize: 12
        }], [{
            url: 'images-cluster/conv30.png',
            height: 27,
            width: 30,
            anchor: [3, 0],
            textColor: '#ff00ff',
            textSize: 10
        }, {
            url: 'images-cluster/conv40.png',
            height: 36,
            width: 40,
            anchor: [6, 0],
            textColor: '#ff0000',
            textSize: 11
        }, {
            url: 'images-cluster/conv50.png',
            width: 50,
            height: 45,
            anchor: [8, 0],
            textSize: 12
        }], [{
            url: 'images-cluster/heart30.png',
            height: 26,
            width: 30,
            anchor: [4, 0],
            textColor: '#ff00ff',
            textSize: 10
        }, {
            url: 'images-cluster/heart40.png',
            height: 35,
            width: 40,
            anchor: [8, 0],
            textColor: '#ff0000',
            textSize: 11
        }, {
            url: 'images-cluster/heart50.png',
            width: 50,
            height: 44,
            anchor: [12, 0],
            textSize: 12
        }], [{
            url: 'images-cluster/pin.png',
            height: 48,
            width: 30,
            anchor: [-18, 0],
            textColor: '#ffffff',
            textSize: 10,
            iconAnchor: [15, 48]
        }]];

        var markerClusterer = null;
        var map = null;

        //Image Url foreach position cluster
        var imageUrl = 'http://chart.apis.google.com/chart?cht=mm&chs=24x32&' +
            'chco=FFFFFF,ff0000,000000&ext=.png';

        function refreshMap() {
            if (markerClusterer) {
                markerClusterer.clearMarkers();
            }
            var markers = [];
            var markerImage = new google.maps.MarkerImage(imageUrl,
                new google.maps.Size(24, 32));
            for (var i = 0; i < 1000; ++i) {
                var latLng = new google.maps.LatLng(data.photos[i].latitude,
                    data.photos[i].longitude)
                // console.log(data.photos[i].latitude + "/" + data.photos[i].longitude);
                var marker = new google.maps.Marker({
                    position: latLng,
                    // draggable: true,
                    icon: markerImage,
                    //Add label for each cluster.
                    label: "HELLO WORLD"
                });

                markers.push(marker);
            }

            //Control Google API
            var zoom = parseInt(document.getElementById('zoom').value, 10);
            var size = parseInt(document.getElementById('size').value, 10);
            var style = parseInt(document.getElementById('style').value, 10);

            zoom = zoom === -1 ? null : zoom;
            size = size === -1 ? null : size;
            style = style === -1 ? null : style;
            markerClusterer = new MarkerClusterer(map, markers, {
                maxZoom: zoom,
                gridSize: size,
                styles: styles[style],
                imagePath: 'images-cluster/m'
            });
            //End of Control
        }

        function initialize() {
            map = new google.maps.Map(document.getElementById('map'), {
                zoom: 2,
                // zoom: 14,
                center: new google.maps.LatLng(34.243809, 134.358743),
                mapTypeId: google.maps.MapTypeId.ROADMAP,
            });

            var refresh = document.getElementById('refresh');
            google.maps.event.addDomListener(refresh, 'click', refreshMap);
            var clear = document.getElementById('clear');
            google.maps.event.addDomListener(clear, 'click', clearClusters);
            refreshMap();
        }

        function clearClusters(e) {
            e.preventDefault();
            e.stopPropagation();
            markerClusterer.clearMarkers();
        }

        google.maps.event.addDomListener(window, 'load', initialize);

    </script>

    <link rel="stylesheet" href="{{ asset("css/search_chizu/search_chizu.css") }}" type="text/css" media="all"/>

    <style tyle="text/css">
        #map {
            width: 100%;
            height: 554px;
        }
        #inline-actions {
            padding-top: 10px;
            text-align: center;
        }
        #inline-actions.item {
            margin-left: 20px;
        }

    </style>

@endsection

@section('content')

    <div class="main-content">
        <div class="top_banner_gazou">
            {{--@include("layouts.frontend.partial.component.cpn_header_banner_gazou")--}}
        </div>

        <div class="naiyou_page container">
            <div class="bunjiro_kara">
                <div class="title">
                    @include("layouts.frontend.partial.component.cpn_title", ["title" => "分譲地を地図から探す"])
                    <div class="bunjiro_link">
                        <div><a class="link1" href="{{ route("chizuSearch") }}">地図から探す</a></div>
                        <div><a class="link2" href="{{ route("schoolSearch") }}">校区から探す</a></div>
                        <div><a class="link3" href="{{ route("ekiSearch") }}">路線から探す</a></div>
                    </div>
                </div>

                <div class="bound_green_title">
                    @include("layouts.frontend.partial.component.cpn_green_title", ["titleContent" => "サティヤ不動産分譲地(売土地) 地名一覧"])
                </div>

                <div class="bounce_navigation">
                    <div class="bounce_list">
                        <ul class="bounce_li">
                            @foreach($regions as $key_region => $region)
                            <li class="item_li"><a href="{{ route("chizuSearch", ["id" => $region->id]) }}">{{ $region->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="bounce_result">
                    <div class="gmap_position">
                        <div id="map-container">
                            <div id="map"></div>
                        </div>
                        <div id="inline-actions" class="">
                          <span>Max zoom level:
                            <select id="zoom">
                              <option value="-1">Default</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                              <option value="11">11</option>
                              <option value="12">12</option>
                              <option value="13">13</option>
                              <option value="14">14</option>
                            </select>
                          </span>
                          <span class="item">Cluster size:
                            <select id="size">
                              <option value="-1">Default</option>
                              <option value="40">40</option>
                              <option value="50">50</option>
                              <option value="70">70</option>
                              <option value="80">80</option>
                            </select>
                          </span>
                          <span class="item">Cluster style:
                            <select id="style">
                              <option value="-1">Default</option>
                              <option value="0">People</option>
                              <option value="1">Conversation</option>
                              <option value="2">Heart</option>
                              <option value="3">Pin</option>
                            </select>
                            <input id="refresh" type="button" value="Refresh Map" class="item"/>
                            <a href="#" id="clear">Clear</a>
                          </span>
                        </div>
                    </div>

                    <div class="bounce_buirochi_kara">
                        @if(count($bunjouchis))
                        <ul class="bound_ul">
                            @foreach($bunjouchis as $key_bunjouchi => $bunjouchi)
                                @include("layouts.frontend.partial.component.loop_bunjochi")
                            @endforeach
                        </ul>
                        @else
                        <div style="text-align: center">
                            @include("layouts.frontend.partial.component.cpn_no_record")
                        </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script type="text/javascript" src="{{ asset("js/search_chizu/search_chizu.js") }}"></script>
    <script type="text/javascript">
        <!--Javascript here-->
    </script>
@endsection