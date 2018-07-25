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
        <div style="height: 780px" id="map"></div>
    </div>

    <script>
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat:50.406797, lng:30.508538},
                zoom: 18
            });
        }
    </script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5Nd5Zp4bwO3bfEqH5mDUpGIiyriddqG0&callback=initMap" async defer></script>
@endsection