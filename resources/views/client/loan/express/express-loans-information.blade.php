@extends('client.layout.index2')
@section('title', 'Express Loan - Capitol Savings and Loan Cooperative')
@section('client_content')

<!-- BEGIN SIDEBAR & CONTENT -->
<div class="row margin-bottom-40">
    @include('client.loan.express.pettycash-loan')
    @include('client.loan.express.fastcash-loan')
    @include('client.loan.express.instacash-loan')
    @include('client.loan.express.birthday-loan')
    @include('client.loan.express.healthcare-loan')
    @include('client.loan.express.express-loan-btn')
  </div>
  <!-- BEGIN SIDEBAR & CONTENT -->

@endsection
