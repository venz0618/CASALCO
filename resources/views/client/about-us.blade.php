@extends('client.index')
@section('titlel', 'About Us')
@section('client_content')

<!-- ***** About Area Starts ***** -->
<section class="section" id="about">
  <div class="container">
      <div class="row">
          <div class="col-lg-6 col-md-6 col-xs-12">
              <div class="left-text-content">
                  <div class="section-heading">
                      <h6>About Us</h6>
                      <h2>We Capito Savings & Loans Cooperatives, INC</h2>
                  </div>
                  <h4>VISSION</h4>
                  <p>CASALCO envission to become a competitive efficent and storng Cooperative serving the needs of its members.</p>
                  <h4>MISSION</h4>
                  <p>Provision of quality service to all CASALCO members and promotion of cooperativism with the highest ethical standard by bieng financially strong and responsive to the needs of its members constitute the primordial mission of CASALCO.</p>
                  <div class="row">
                      <div class="col-4">
                          <img src="../klassy/images/CU-Logo.jpg" alt="">
                      </div>
                      <div class="col-4">
                          <img src="../klassy/images/CUBEd.jpg" alt="">
                      </div>
                      <div class="col-4">
                          <img src="../klassy/images/cumc-logo-heading-svg.svg" alt="">
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-6 col-md-6 col-xs-12">
              <div class="right-content">
                  <div class="thumb">
                      <!-- <a rel="nofollow" href="#"><i class="fa fa-play"></i></a> -->
                      <!-- <img src="../klassy/images/about-video-bg.jpg" alt=""> -->
                      <!-- <video>
                        <source src="../klassy/images/Casalco-video.mpg" type="video/mpg">
                      </video> -->
                      <div id="video-player"> 
                            <video width="100%" controls muted autoplay loop> 
                                <source src="../klassy/images/Casalco-video.mp4" type="video/mp4"> 
                                
                            </video> 
                    </div> 
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- ***** About Area Ends ***** -->


@endsection