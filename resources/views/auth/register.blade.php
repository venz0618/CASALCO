@extends('client.layout.index2')
@section('title', 'Create an account')
@section('client_content')

	@include('auth.components.register.breadcrumb')
	<!-- BEGIN SIDEBAR & CONTENT -->
	<div class="row margin-bottom-40">
		@include('auth.components.register.sidebar')

		<!-- BEGIN CONTENT -->
<div class="col-md-9 col-sm-9">
  @if(Session::has('error'))
    <h3 class="text-danger">
      {{ Session::get('error')}}
    </h3>
    @elseif(Session::has('success'))
    <h3 class="bg-success">
        {{ Session::get('success')}}
    </h3>
  @endif
  <h1>Create an account</h1>
  <div class="content-form-page">
    <div class="row">
      <div class="col-md-7 col-sm-7">
        <form method="POST" action="{{ url('/registration') }}" class="form-horizontal" role="form">
		 @csrf
          <fieldset>
            <div class="form-group">
              <label for="acc_id" class="col-lg-4 control-label">Member's ID No.<span class="require">*</span></label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="Member_id_no">
                <span class="text-danger">@error("Member_id_no") {{ $message }}@enderror</span>
              </div>
            </div>
            <div class="form-group">
              <label for="username" class="col-lg-4 control-label">Username <span class="require">*</span></label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="username">
                <span class="text-danger">@error('username') {{ $message }}@enderror</span>
              </div>
            </div>
            <div class="form-group">
              <label for="email" class="col-lg-4 control-label">Email <span class="require">*</span></label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="email">
                <span class="text-danger">@error('email') {{ $message }}@enderror</span>
              </div>
            </div>
            <div class="form-group">
              <label for="password" class="col-lg-4 control-label">Password <span class="require">*</span></label>
             
              <div class="col-lg-8">
                <input id="password" type="password" class="form-control" name="password">
                
                <span class="text-danger">@error('password') {{ $message }}@enderror</span>
                
              </div>
            </div>
            <div class="row">
              <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20">
                <button type="submit" class="btn btn-primary">Create an account</button>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
      <div class="col-md-4 col-sm-4 pull-right">
      </div>
    </div>
  </div>
</div>
<!-- END CONTENT -->
	</div>
	<!-- END SIDEBAR & CONTENT -->

@endsection
