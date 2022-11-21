@extends('client.layout.index2')
@section('title', 'Online Membership Application Form')
@section('client_content')

<div class="h-100 d-flex align-items-center justify-content-center">
  <div class="mem-bg">
    <form  action="{{ url('/membership-application') }}" method="POST" enctype="multipart/form-data" class="this-form">
      <div class="content-form-page">
        @csrf
        @include('client.membership.membership-application-form.personal-info-form')
        @include('client.membership.membership-application-form.spouse-info-form')
        @include('client.membership.membership-application-form.beneficiary-info-form')
        @include('client.membership.membership-application-form.gov-info-form')
        @include('client.membership.membership-application-form.files-info-form')
        <div class="line"></div>
        <br>
        <div class="row">
          <div class="col-12 col-lg-4 col-md-4"></div>
          <div class="col-12 col-lg-4 col-md-4">
            <button class="submit_btn" type="submit">SUBMIT APPLICATION</button>
          </div>
          <div class="col-12 col-lg-4 col-md-4"></div>
        </div>
      </div>
    </form>
  </div>
</div>

@endsection
