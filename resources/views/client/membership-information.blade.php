@extends('client.index')
@section('titlel', 'Membership Information')
@section('client_content')

<section class="section" id="chefs">
  <div class="container">
    <div class="row">
			<div class="col-lg-12 offset-lg-12 text-center">
				<div class="section-heading">
					<h6>Membership Information</h6>
				</div>
			</div>
		</div>
    <div class="row">
      <div class="col-lg-6 col-md-12 col-12">
        <div class="card px-5 py-3">
          <div class="section-heading">
            <h2 class="text-center">WHO ARE ALLOWED TO BECOME A MEMBER OF CASALCO?</h2>
            <div class="px-4">
              <p class="mb-2"><i class="fa fa-check text-danger border border-danger p-1"></i> Must be a Filipino citizen</p>
              <p class="mb-2"><i class="fa fa-check text-danger border border-danger p-1"></i> Must be 18 years old and above (legal age)</p>
              <p class="mb-2"><i class="fa fa-check text-danger border border-danger p-1"></i> Must be an employee of Capitol University, Capitol University Medical Center, Caitol University Basic Education, Support Zebra and Its dependents.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-12">
        <div class="card px-5 py-3">
          <div class="section-heading">
            <h2 class="text-center">Membership Requirements</h2>
            <div class="px-4">
              <p class="mb-2"><i class="fa fa-check text-danger border border-danger p-1"></i> Birth Certificate</p>
              <p class="mb-2"><i class="fa fa-check text-danger border border-danger p-1"></i> Employment Contract</p>
              <p class="mb-2"><i class="fa fa-check text-danger border border-danger p-1"></i> 2x2 Picture</p>
              <p class="mb-2"><i class="fa fa-check text-danger border border-danger p-1"></i> Attend Membership Orientation/Seminar</p>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</section>

<section class="section" id="offers">
  <div class="container">
      <div class="row">
          <div class="col-lg-12 offset-lg-12 text-center">
              <div class="section-heading">
                  <h6>Complete the following steps</h6>
              </div>
              <div class="col-lg-12 offset-lg-12 text-center">
                <div class="d-flex align-items-center flex-column bd-highlight mb-3">
                <div class="py-2 bd-highlight border mb-3 rounded bg-primary text-white" style="width: 70px;">
                  <h1>1</h1>
                </div>
                <div class="mb-4">
                  <h6>Fill up the membership form</h6>
                </div>
                <div class="py-2  bd-highlight border mb-3 rounded bg-secondary text-white" style="width: 70px ">
                  <h1>2</h1>
                </div>  
                <div class="mb-4">
                  <h6>Watch the Casalco Membership <br>   seminar Video</h6>
                </div>
                <div class="py-2  bd-highlight border mb-3 rounded bg-success text-white" style="width: 70px">
                  <h1>3</h1>
                </div>
                <div class="mb-4">
                  <h6>Wait for a Call/Email and go for <br>   walk-in payment</h6>
                </div>
              </div>
              </div>
              <div class="">
                  
                <a href="/membership-application" id="membership-button" target="_blank">Become A Member</a>
              </div>
          </div>
      </div>
  </div>
</section>


@endsection