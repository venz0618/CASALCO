@extends('client.layout.index2')
@section('title', 'Membership Information')
@section('client_content')


<!-- BEGIN SIDEBAR & CONTENT -->
<div class="row margin-bottom-40">
  <!-- BEGIN CONTENT -->
  <div class="col-md-12 col-sm-12">
    <h1>Online Membership Application</h1>
    <div class="content-page">
      <div class="row margin-bottom-30">
        <!-- BEGIN INFO BLOCK -->
        <div class="col-md-7">
          @include('client.membership.membership-information.eligibility')

          @include('client.membership.membership-information.requirements')

          <h3><strong>Membership Application Steps</strong></h3>

          @include('client.membership.membership-information.step1')

          @include('client.membership.membership-information.step2')

          @include('client.membership.membership-information.step3')

          @include('client.membership.membership-information.membership-application-btn')

          <!-- END LISTS -->
        </div>
        <!-- END INFO BLOCK -->

        <!-- BEGIN CAROUSEL -->
        <div class="col-md-5 front-carousel">
          <div id="myCarousel" class="carousel slide">
            <!-- Carousel items -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="{{ asset('metronic/pages/img/pics/img2-medium.jpg') }}" alt="">
                <div class="carousel-caption">
                 
                </div>
              </div>
              {{-- <div class="item">
                <img src="{{ asset('metronic/pages/img/pics/img1-medium.jpg') }}" alt="">
                <div class="carousel-caption">
                  <p>Ducimus qui blanditiis praesentium voluptatum</p>
                </div>
              </div>
              <div class="item">
                <img src="{{ asset('metronic/pages/img/pics/img2-medium.jpg') }}" alt="">
                <div class="carousel-caption">
                  <p>Ut non libero consectetur adipiscing elit magna</p>
                </div>
              </div> --}}
            </div>
            <!-- Carousel nav -->
            <a class="carousel-control left" href="#myCarousel" data-slide="prev">
              <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control right" href="#myCarousel" data-slide="next">
              <i class="fa fa-angle-right"></i>
            </a>
          </div>
        </div>
        <!-- END CAROUSEL -->
      </div>
    </div>
  </div>
  <!-- END CONTENT -->
</div>
<!-- END SIDEBAR & CONTENT -->

@endsection
