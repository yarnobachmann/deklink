@extends('master')
@section('styles')
    <link rel="stylesheet" href="/css/styleover.css">
@endsection
@section('activeover')
active
@endsection
@section('content')
<div class="container-fluid text-center">
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
    </div>
    <div class="col-sm-8 text-left">
      <h3>Vrijwilligers</h3>
      <p>Anja Hoogeveen
          <br> Betsie Botter
          <br> Anja Schonewille
          <br> </p>

    </div>
    <div class="col-sm-2 sidenav">
      <div>
      <h1>Volg onze facebook!</h1> <a href="https://www.facebook.com/dorpshuis.deklink?fref=ts" target="_blank" class="btn btn-primary">Klik hier</a> </div><div class="col-lg-12">
      </div>
    </div>
  </div>
@endsection
