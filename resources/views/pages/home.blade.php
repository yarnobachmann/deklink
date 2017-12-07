@extends('master')
@section('styles')
<link rel="stylesheet" href="/css/style.css">
@endsection
@section('activehome')
active
@endsection
@section('content')

<div class="jumbotron">
  <div class="container text-center">
    <h1>Het dorpshuis</h1>
    <p>de Klink</p>
  </div>
</div>

<div class="container-fluid text-center">
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
    </div>
    <div class="col-sm-8 text-left">
      <h3>Welkom</h3>
      <p>Dorpshuis de Klink is de plek voor dorpsactiviteiten voor en door dorpsbewoners. Perfect voor je vergadering, bijeenkomst of uitvoering. De ideale plek voor een feestje, borrel of familiemiddag. Het is ook de plek waar iedereen een zaal kan huren.</p>
      <p>Nagenoeg alle verenigingen zijn bij ons te gast voor hun activiteiten. </p>
      <p>Loop vooral eens bij ons binnen om een kijkje te komen nemen. Wij streven ernaar om een sportieve maar vooral ook gezellige ontmoetingsplaats te zijn voor al onze inwoners, verenigingen en bezoekers. Graag tot ziens in ons dorpshuis de Klink</p>
      <p>Team dorpshuis de Klink</p>

    </div>
    <div class="col-sm-2 sidenav">
      <div>
      <h1>Volg onze facebook!</h1> <a href="https://www.facebook.com/dorpshuis.deklink?fref=ts" target="_blank" class="btn btn-primary">Klik hier</a>
     </div>
     <div>
       <h1>Dorpshuis van het jaar!</h1> <a href="http://www.rtvdrenthe.nl/nieuws/118207/Tien-dorpshuizen-geselecteerd-voor-Dorpshuis-van-het-jaar-2017" target="_blank" class="btn btn-primary">Klik hier</a> </div>
     </div>
    </div>
  </div>
</div>
@endsection
