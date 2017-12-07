@extends('master')
@section('styles')
  <link rel="stylesheet" href="/css/styleover.css">
@endsection
@section('activecontact')
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
      <h1>Contact</h1>
      <br> Dorpshuis De Klink
      <p> Rietdekkershof 5</p>
      <p> 7885 GA Nieuw-Dordrecht</p>
      <p> 0591-393435</p>
      <p></p>
      <p>deklink5@ziggo.nl </p>
      <hr>
          <form method="post"  >
              <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Naam</label>
                  <div class="col-xs-6">
                      <input type="text" class="form-control" name="name" id="name" placeholder="Naam" <?php if (isset($_POST[ 'name']) === true) { echo 'value="', strip_tags($_POST[ 'name']), '"'; } ?>> </div>
              </div>
              <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-xs-6">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Email" <?php if (isset($_POST[ 'email']) === true) { echo 'value="', strip_tags($_POST[ 'email']), '"'; } ?>> </div>
              </div>
              <div class="form-group row">
                  <label for="inputMessage3" class="col-sm-2 col-form-label">Berricht</label>
                  <div class="col-xs-6">
                      <textarea type="text" class="form-control" name="message" id="message" rows="5" placeholder="Berricht">
                          <?php if (isset($_POST['message']) === true) { echo strip_tags($_POST['message']); } ?>
                      </textarea>
                  </div>
              </div>
              <div class="form-group row">
                  <label class="col-sm-2">Checkbox</label>
                  <div class="col-sm-10">
                      <div class="form-check">
                          <label class="form-check-label">
                              <input type="hidden" name="check" value="value0" />
                              <input class="form-check-input" name="check" value="value1" type="checkbox"> vink deze aan a.u.b </label>
                      </div>
                  </div>
              </div>
              <div class="form-group row">
                  <div class="offset-sm-2 col-sm-10">
                      <button onclick="window.location.href='#form-loc'" type="submit" class="btn btn-primary">Versturen</button>
                  </div>
              </div>
          </form>
    </div>
    <div class="col-sm-2 sidenav">
      <div>
      <h1>Volg onze facebook!</h1> <a href="https://www.facebook.com/dorpshuis.deklink?fref=ts" target="_blank" class="btn btn-primary">Klik hier</a> </div><div class="col-lg-12">
      </div>
    </div>
  </div>
@endsection
