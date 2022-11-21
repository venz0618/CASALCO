@extends('client.index')
@section('titlel', 'Loans')
@section('client_content')

<div id="top">
  <div class="container-fluid">
    <div class="row">
      <div class="col-4 div-container">
        <a href="/regular-loans">
          <img src="../klassy/loan-images/loan-img1.jpeg" class="img-fluid loan-img" alt="">
          <div class="over_lay bg1">
            <h1>REGULAR LOAN</h1>
          </div>
        </a>
      </div>
      <div class="col-4 div-container">
        <a href="/express-loans">
          <img src="../klassy/loan-images/loan-img2.jpg" class="img-fluid loan-img" alt="">
          <div class="over_lay bg2">
            <h1>EXPRESS LOAN</h1>
          </div>
        </a>
      </div>
      <div class="col-4 div-container">
        <a href="/special-loans">
          <img src="../klassy/loan-images/loan-img3.jpg" class="img-fluid loan-img" alt="">
          <div class="over_lay bg3">
            <h1>SPECIAL LOAN</h3>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>

@endsection