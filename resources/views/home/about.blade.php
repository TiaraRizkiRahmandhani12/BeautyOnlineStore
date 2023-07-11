@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-6 ms-auto">
    <img src="{{ asset('img/25.jpg') }}" alt="Beauty Glow" style="width: 100%; max-width: 650px; ">
      <p class="lead" style="font-weight: bold; text-align: justify;" style="font-family: Berlin Sans FB">{{ $viewData["description"] }}</p>
    </div>
    <div class="col-lg-6 me-auto">
      <p class="lead" style="font-family: Showcard Gothic">{{ $viewData["author"] }}</p>
      <p class="lead" style="font-family: Showcard Gothic">{{ $viewData["contact"] }}</p>
      <p class="lead" style="font-family: Showcard Gothic">{{ $viewData["offline_store"] }}</p>
      <p class="lead" style="font-family: Showcard Gothic">{{ $viewData["email"] }}</p>

      <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" />
      <script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script>
      <div id='map'></div>

      <style type="text/css">
        #map {
        width: 600px;
        height: 400px;
        }
      </style>

      <script type="text/javascript">
        var locations = [
          ["Beauty Glow 1", -7.05177535494591, 110.43551363840642],
          ["Beauty Glow 2", -7.057160911628074, 110.47940211119374],
          ["Beauty Glow 3", -7.037721292701222, 110.42159267870971],
          ["Beauty Glow 4", -7.02031561800916, 110.46246567444713],
          ["Beauty Glow 5", -7.031964694363914, 110.44160832306709]
        ];

        var map = L.map('map').setView([-7.0060272532079395, 110.43776952545761], 11);
        mapLink =
          '<a href="http://openstreetmap.org">OpenStreetMap</a>';
        L.tileLayer(
          'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; ' + mapLink + ' Contributors',
            maxZoom: 18,
          }).addTo(map);

        for (var i = 0; i < locations.length; i++) {
          marker = new L.marker([locations[i][1], locations[i][2]])
            .bindPopup(locations[i][0])
            .addTo(map);
        }
      </script>
    </div>
  </div>
</div>
@endsection
