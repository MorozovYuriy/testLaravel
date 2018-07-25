@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{route('dashboard')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Map</li>
        </ol>
        <div class="form-group">
            <input type="text" id="mapsearch">
        </div>
        <div style="height: 780px" id="map"></div>
    </div>
    <script>
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat:50.406797, lng:30.508538},
                zoom: 18,
                mapTypeId: 'roadmap'
            });
            var marker = new google.maps.Marker({
                position: {lat:50.406797, lng:30.508538},
                map: map,
                draggable: true
            });

            var input = document.getElementById('mapsearch');
            var searchBox = new google.maps.places.SearchBox(input);
            var markers = [];

            searchBox.addListener('places_changed', function() {
                var places = searchBox.getPlaces();
                var bounds = new google.maps.LatLngBounds();
                places.forEach(function(place) {
                    if (!place.geometry) {
                        console.log("Returned place contains no geometry");
                        return;
                    }
                    markers.push(new google.maps.Marker({
                        map: map,
                        title: place.name,
                        position: place.geometry.location,
                        draggable: true
                    }));

                    if (place.geometry.viewport) {
                        bounds.union(place.geometry.viewport);
                    } else {
                        bounds.extend(place.geometry.location);
                    }
                });
                map.fitBounds(bounds);
            });
        }

    </script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5Nd5Zp4bwO3bfEqH5mDUpGIiyriddqG0&callback=initMap&libraries=places" async defer></script>
@endsection