@extends('client.index')
@section('titlel', 'Regular Loans')
@section('client_content')

<div id="top">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-7">
        <h1 class="text-center display-4 py-3">Regular Loan</h1>
        <div class="py-5 text-center">
          <ul>
            <li class="py-2">Applicance Loan (1.5%) max.  18 months to pay</li>
            <li class="py-2">Provident Loan (1.5%) max.  2 years to pay</li>
          </ul>
        </div>
        @auth
        <div class="text-center py-5">
          <a href="/regular-special-loan-form" class="btn btn-primary">Apply Now</a>
        </div>
        @endauth
      </div>
      <div class="col-lg-5">
        <img src="../klassy/loan-images/loan-img1.jpeg" style="display: block; max-width: 100%;" class="img-fluid loan-img" alt="">
      </div>
    </div>
  </div>
</div>

@endsection