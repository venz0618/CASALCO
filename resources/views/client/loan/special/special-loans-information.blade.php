@extends('client.layout.index2')
@section('title', 'Special Loan')
@section('client_content')

<div class="row margin-bottom-40">
    @include('client.loan.special.xmas&midyr-loan')
    @include('client.loan.special.multipurpose-loan')
    @include('client.loan.special.privelege-loan')
    @include('client.loan.special.medical-loan')
    @include('client.loan.special.travel-loan')
    @include('client.loan.special.instant-loan')
    @include('client.loan.special.car-loan')
</div>

@endsection
