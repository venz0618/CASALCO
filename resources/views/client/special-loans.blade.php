@extends('client.index')
@section('titlel', 'Special Loans')
@section('client_content')

<div id="top">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-7">
        <h1 class="text-center display-4 pt-3">Special Loan</h1>
        <div class="text-center">
          <ul>
            <li class="py-2">Midyear & Christmas Loan</li>
            <li class="py-2">MPL</li>
            <li class="py-2">PVL</li>
            <li class="py-2">Car Loan</li>
            <li class="py-2">Medical Loan</li>
            <li class="py-2">Travel Loan</li>
            <li class="py-2">Nuptial Loan</li>
          </ul>
        </div>
        @auth
          <div class="text-center pt-2">
            <a href="/regular-special-loan-form" class="btn btn-primary ">Apply Now</a>
          </div>
        @endauth
      </div>
      <div class="col-lg-5">
        <img src="../klassy/loan-images/loan-img3.jpg" style="display: block; max-width: 100%;" class="img-fluid loan-img" alt="">
      </div>
    </div>
  </div>
</div>

@endsection