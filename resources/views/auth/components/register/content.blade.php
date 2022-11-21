<!-- BEGIN CONTENT -->
<div class="col-md-9 col-sm-9">
  @if(Session::has('error'))
    <h3 class="text-danger">
      {{ Session::get('error')}}
    </h3>
  @endif
  <h1>Create an account</h1>
  <div class="content-form-page">
    <div class="row">
      <div class="col-md-7 col-sm-7">
        <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
					@csrf
          <fieldset>
            <div class="form-group">
              <label for="firstname" class="col-lg-4 control-label">Member's ID No.<span class="require">*</span></label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="acc_id">
                <span class="text-danger">@error('acc_id') {{ $message }}@enderror</span>
              </div>
            </div>
            <div class="form-group">
              <label for="lastname" class="col-lg-4 control-label">Username <span class="require">*</span></label>
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
                <input type="password" class="form-control" name="password">
                <span class="text-danger">@error('password') {{ $message }}@enderror</span>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20">                        
                <button type="submit" class="btn btn-primary">Create an account</button>
              </div>
            </div>
            <!-- <div class="form-group">
              <label for="confirm-password" class="col-lg-4 control-label">Confirm password <span class="require">*</span></label>
              <div class="col-lg-8">
                <input type="password" class="form-control" id="confirm-password">
              </div>
            </div> -->
          </fieldset>
          <!-- <div class="row">
            <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20">                        
              <button type="submit" class="btn btn-primary">Create an account</button>
            </div>
          </div> -->
        </form>
      </div>
      <div class="col-md-4 col-sm-4 pull-right">
        <!-- <div class="form-info">
          <h2><em>Important</em> Information</h2>
          <p>Lorem ipsum dolor ut sit ame dolore  adipiscing elit, sed sit nonumy nibh sed euismod ut laoreet dolore magna aliquarm erat sit volutpat. Nostrud exerci tation ullamcorper suscipit lobortis nisl aliquip  commodo quat.</p>

          <p>Duis autem vel eum iriure at dolor vulputate velit esse vel molestie at dolore.</p>

          <button type="button" class="btn btn-default">More details</button>
        </div> -->
      </div>
    </div>
  </div>
</div>
<!-- END CONTENT -->