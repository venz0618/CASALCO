@extends('client.layout.index2')
@section('title', 'About Us')
@section('client_content')

<!-- BEGIN SIDEBAR & CONTENT -->
<div class="container about-us">
  <!-- BEGIN ROW -->
  <div class="row">
    <!-- BEGIN CONTENT -->
    <div class="col-sm">
      <h2>About Us</h2>
    </div>
    <!-- END CONTENT -->
      <!-- BEGIN CONTENT PAGE -->
      <div class="content-page">
        <div class="vision">
          <!-- BEGIN INFO BLOCK -->
          @include('client.about-us.vision')
          <!-- END INFO BLOCK -->
        </div>
        <div class="mission">
          <!-- BEGIN INFO BLOCK -->
          @include('client.about-us.mission')
          <!-- END INFO BLOCK -->
        </div>
      </div>
      <!-- END CONTENT PAGE -->
    <div class="col-sm backImage">
      <img src="../klassy/images/CasalcoLogo-7.png">
    </div>
  </div>
  <!-- END ROW -->
</div>
<!-- END SIDEBAR & CONTENT -->

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection
