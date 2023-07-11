@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div class="row">
  <div class="col-md-6 col-lg-4 mb-2">
    <img src="{{ asset('/img/kosmetik1.jpg') }}" class="img-fluid rounded">
  </div>
  <div class="col-md-6 col-lg-4 mb-2">
    <img src="{{ asset('/img/kosmetik3.jpg') }}" class="img-fluid rounded">
  </div>
  <div class="col-md-6 col-lg-4 mb-2">
    <img src="{{ asset('/img/kosmetik2.jpg') }}" class="img-fluid rounded">
  </div>
</div>
<h3 class="text-center" style="font-family: 'Arial', sans-serif; font-size: 26px; color: #333; text-transform: uppercase; letter-spacing: 2px;">Selamat Datang, Silahkan Berbelanja</h3>
@endsection
