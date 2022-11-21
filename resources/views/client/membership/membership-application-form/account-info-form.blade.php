@include('client.membership.membership-application-form.account-info-text')
<div class="row">
    <div class="form-group">
        <div class="col-lg-6 col-mg-6">
            <small>EMAIL ADDRESS</small><span class="asterisk">*</span>
            <input type="email" class="form-control" required name="email" placeholder="ENTER EMAIL">
            <small class="text-danger">@error('email') {{ $message }}@enderror</small>
        </div>
        <div class="col-lg-6 col-mg-6">
            <small>PASSWORD</small><span class="asterisk">*</span>
            <input type="password" class="form-control" required name="password" placeholder="ENTER PASSWORD">
            <small class="text-danger">@error('password') {{ $message }}@enderror</small>
        </div>
    </div>
</div>
