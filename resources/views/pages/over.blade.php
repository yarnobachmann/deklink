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
      <h1>Over Ons</h1>
      <br>
      <p> <b>verhuur zalen</b>
          <br><a href="{{url('over/zaal')}}"> je kunt ook zalen huren bij ons </a></p>
      <p> <b>bestuur</b>
          <br><a href="{{url('over/bestuur')}}"> hier meer over het bestuur </a></p>
      <p> <b>info</b>
          <br><a href="{{url('over/info')}}"> hier meer info </a></p>
      <p> <b>vrijwilligers</b>
          <br><a href="{{url('over/vrijwilligers')}}"> meer over de vrijwilligers </a></p>
      <p> <b>beheer</b>
          <br><a href="{{url('over/beheer')}}"> hier meer over beheer </a></p>

    </div>
    <div class="col-sm-2 sidenav">
      <div>
      <h1>Volg onze facebook!</h1> <a href="https://www.facebook.com/dorpshuis.deklink?fref=ts" target="_blank" class="btn btn-primary">Klik hier</a> </div><div class="col-lg-12">
      </div>
    </div>
  </div>
@endsection
