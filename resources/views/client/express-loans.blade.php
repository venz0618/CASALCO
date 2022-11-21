@extends('client.index')
@section('titlel', 'Express Loans')
@section('client_content')

<div id="top">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-7">
        <h1 class="text-center display-4 pt-3">Express Loan</h1>
        <div class="text-center">
          <ul>
            <li class="py-2">Grocery Loan (1.5%) max. 2 months to pay</li>
            <li class="py-2">Petty Loan (0.75%)(10K) 8 months to pay</li>
            <li class="py-2">FastCash Loan (1%) (5K) 4 months to pay</li>
            <li class="py-2">InstaCash Loan (5%) (3K) 1 month to pay</li>
            <li class="py-2">Health Insurance Loan (Yearly/Renewable)</li>
            <li class="py-2">Birthday Loan 10K no interest</li>
          </ul>
        </div>
       @auth
        <div class="text-center pt-2">
          <a href="/express-loan-form" class="btn btn-primary">Apply Now</a>
        </div>
       @endauth
      </div>
      <div class="col-lg-5">
        <img src="../klassy/loan-images/loan-img2.jpg" style="display: block; max-width: 100%;" class="img-fluid loan-img" alt="">
      </div>
    </div>
  </div>
</div>

@endsection