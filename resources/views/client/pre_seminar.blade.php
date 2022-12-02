@extends('client.layout.index2')
@section('title', 'Pre-membershio seminar video')
@section('client_content')


<!-- @if(session()->get('msg'))
			<div class="alert alert-success alert-dismissible fade show" role ="alert">

				{{ session()->get('msg')}}

				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>

				</button>


			</div>
			@endif -->

<div class="contact-form">

<!-- <div class="row">
  <div class="col-md-4">.col-md-4</div>
  <div class="col-md-4 offset-md-4">.col-md-4 .offset-md-4</div>
</div>
<div class="row">
  <div class="col-md-3 offset-md-3">.col-md-3 .offset-md-3</div>
  <div class="col-md-3 offset-md-3">.col-md-3 .offset-md-3</div>
</div> -->
            <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <video id="video" width="110%"  controls="true">
                                <source src="../klassy/images/CASALCO_ORIENTATION.mp4" type="video/mp4">
                        </video>

                    </div>
                    
                    <div class="col-md-10 offset-md-6">
                    <a class="btn btn-primary" href="/" role="button">If you are done watching, click Return to home page</a>
                    </div>

                    <div id="status" class="incomplete">
                      <span>Play status: </span>
                      <span class="status complete">COMPLETE</span>
                      <span class="status incomplete">INCOMPLETE</span>
                      <br />
                      </div>
            </div>


</div>

<!-- <div class="img-fill">
										<video width="100%" controls muted autoplay loop>
                                            <source src="../klassy/images/Casalco-video.mp4" type="video/mp4">

                                        </video>
									</div> -->



                                    @endsection
