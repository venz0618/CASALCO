@extends('client.layout.index2')
@section('title', 'Contact Us')
@section('client_content')

<div class="row margin-bottom-40">
    <!-- BEGIN CONTENT -->
    <div class="col-md-12">
      <h1>Contacts</h1>
      <div class="content-page">
        <div class="row">
          <div class="col-md-12">
            <div id="map" class="gmaps margin-bottom-40" style="height:400px;">
              <img src="{{ asset('klassy/images/google_map.png') }}" alt="">
            </div>
          </div>
          <div class="col-md-9 col-sm-9">
            <h2>Contact Form</h2>
            <p>For inquirees, you may contact us here.</p>

            <!-- BEGIN FORM-->
            <form action="#" role="form">
              <div class="form-group">
                <label for="contacts-name">Name</label>
                <input type="text" class="form-control" id="contacts-name">
              </div>
              <div class="form-group">
                <label for="contacts-email">Email</label>
                <input type="email" class="form-control" id="contacts-email">
              </div>
              <div class="form-group">
                <label for="contacts-message">Message</label>
                <textarea class="form-control" rows="5" id="contacts-message"></textarea>
              </div>
              <button type="submit" class="btn btn-primary"><i class="icon-ok"></i> Send</button>
              <button type="button" class="btn btn-default">Cancel</button>
            </form>
            <!-- END FORM-->
          </div>

          <div class="col-md-3 col-sm-3 sidebar2">
            <address>
              <strong>Location</strong><br>
              Capitol University Compound, 2nd floor <br>
              Business Administration, Corrales Extension
              Cagayan de Oro City, 9000<br>

            </address>
            <address>
              <strong>Contact no.</strong><br>
              (088) 856-2710
            </address>
            <address>
              <strong>Email</strong><br>
              <a href="#">casalco.coop@gmail.com</a><br>
            </address>
            {{-- <ul class="social-icons margin-bottom-40">
              <li><a href="javascript:;" data-original-title="facebook" class="facebook"></a></li>
              <li><a href="javascript:;" data-original-title="github" class="github"></a></li>
              <li><a href="javascript:;" data-original-title="Goole Plus" class="googleplus"></a></li>
              <li><a href="javascript:;" data-original-title="linkedin" class="linkedin"></a></li>
              <li><a href="javascript:;" data-original-title="rss" class="rss"></a></li>
            </ul>

            <h2 class="padding-top-30">About Us</h2>
            <p>Sediam nonummy nibh euismod tation ullamcorper suscipit</p>
            <ul class="list-unstyled">
              <li><i class="fa fa-check"></i> Officia deserunt molliti</li>
              <li><i class="fa fa-check"></i> Consectetur adipiscing </li>
              <li><i class="fa fa-check"></i> Deserunt fpicia</li>
            </ul> --}}
          </div>
        </div>
      </div>
    </div>
    <!-- END CONTENT -->
  </div>


@endsection
