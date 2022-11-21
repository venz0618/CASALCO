  <!-- BEGIN CONTENT -->
  <div class="col-md-9 col-sm-9">
    <h1>Login</h1>
    <div class="content-form-page">
      <div class="row">
        <div class="col-md-7 col-sm-7">
          @if (Session::has('error'))
            <div class="text-center text-danger">{{ Session::get('error') }}</div>
          @endif
          <form method="POST" action="{{ route('login') }}" class="form-horizontal form-without-legend" role="form">
            @csrf
            <div class="form-group">
              <label for="email" class="col-lg-4 control-label">Email <span class="require">*</span></label>
              <div class="col-lg-8">
                <input type="email" name="email" class="form-control" id="email">
                <span class="text-danger">@error('email') {{ $message }}@enderror</span>
              </div>
            </div>
            <div class="form-group">
              <label for="password" class="col-lg-4 control-label">Password <span class="require">*</span></label>
              <div class="col-lg-8">
                <input type="password" name="password" class="form-control" id="password">
                <span>
                  <i class="fa fa-eye" aria-hidden="true" id="eye" onclick="toggle()"></i>
                </span>
                <span class="text-danger">@error('password') {{ $message }}@enderror</span>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-8 col-md-offset-4 padding-left-0">
                <a href="page-forgotton-password.html">Forget Password?</a>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20">
                <button type="submit" class="btn btn-primary">Login</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-4 col-sm-4 pull-right">
          <!-- <div class="form-info">
            <h2><em>Important</em> Information</h2>
            <p>Duis autem vel eum iriure at dolor vulputate velit esse vel molestie at dolore.</p>

            <button type="button" class="btn btn-default">More details</button>
          </div> -->
        </div>
      </div>
    </div>
  </div>
  <!-- END CONTENT -->