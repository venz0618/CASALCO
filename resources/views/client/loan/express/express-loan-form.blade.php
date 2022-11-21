

@foreach ($express as $e)
<form action="{{ url('/express-loan-application-form') }}" method="POST" enctype="multipart/form-data" class="this-form">
    <div class="content-form-page">
        @csrf
        <div class="row">
            <div class="header-text">
                <ul>
                  <li>Please fill-out all the fillable forms below. &#40;Asterisk &#40;*&#41; indicates required field&#41;</li>
                  <li>To qualify for membership, you must be at least 18 years old.</li>
                </ul>
              </div>
              <h2 style="font-weight: 900; text-align: center; font-size: .4in; padding: 20px 0">Online Loan Application Form</h2>
        <div class="col-lg-6 col-md-6">
            <div class="form-group">
                <small>Name of Member</small><span class="asterisk">*</span>
                <input type="text" class="form-control" name="name_of_member" placeholder="Enter name of member" value="{{ $e->mem->first_name }}">
                <small class="text-danger">@error('name_of_member') {{ $message }}@enderror</small>
            </div>
        </div>

        <div class="col-lg-3 col-md-3">
            <div class="form-group">
                <small>Date</small><span class="asterisk">*</span>
                <input type="date" class="form-control" name="date" onclick="text(1)" placeholder="Enter date" value="{{ old('date') }}">
                <small class="text-danger">@error('date') {{ $message }}@enderror</small>
            </div>
        </div>

        <div class="col-lg-3 col-md-3">
            <div class="form-group">
                <small>Account No.</small><span class="asterisk">*</span>
                <input type="text" class="form-control" name="account_no" placeholder="Enter account no" value="{{ old('account_no') }}">
                <small class="text-danger">@error('account_no') {{ $message }}@enderror</small>
            </div>
        </div>

        <div class="col-lg-6 col-md-6">
            <div class="form-group">
                <small>Present Address</small><span class="asterisk">*</span>
                <input type="text" class="form-control" name="present_address" placeholder="Enter present_address" value="{{ old('present_address') }}">
                <small class="text-danger">@error('present_address') {{ $message }}@enderror</small>
            </div>
        </div>

        <div class="col-lg-6 col-md-6">
            <div class="form-group">
                <small>Permanent Address</small><span class="asterisk">*</span>
                <input type="text" class="form-control" name="permanent_address" placeholder="Enter permanent address" value="{{ old('permanent_address') }}">
                <small class="text-danger">@error('permanent_address') {{ $message }}@enderror</small>
            </div>
        </div>

        <div class="col-lg-12 col-md-12">
            <div class="form-group">
                <small>TYPES OF LOAN APPLIED<span class="asterisk">*</span></small>
                <div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
                            <small class="text-success">MAX. 8 MONTHS</small>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="pcl" name="loan_type" value="pcl" @checked(old('loan_type') === 'pcl')>
                                <label>PettyCash Loan</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
                            <small class="text-success">MAX. 4 MONTHS</small>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="fcl" name="loan_type" value="fcl" @checked(old('loan_type') === 'fcl')>
                                <label>FastCash Loan</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
                            <small class="text-success">MAX. 1 MONTH</small>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="icl" name="loan_type" value="icl" @checked(old('loan_type') === 'icl')>
                                <label>InstaCash Loan</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
                            <small class="text-success">MAX. 12 MONTHS</small>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="check1" name="loan_type" value="bdl" @checked(old('loan_type') === 'bdl')>
                                <label>Birthday Loan</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
                            <small class="text-success">MAX. 12 MONTHS</small>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="check1" name="loan_type" value="cl"  @checked(old('loan_type') === 'cl')>
                                <label>Calamity Loan </label>
                            </div>
                        </div>
                    </div>
                    <small class="text-danger">@error('loan_type') {{ $message }}@enderror</small>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6">
            <div class="form-group">
                <small>Employer</small><span class="asterisk">*</span>
                <input type="text" class="form-control" name="employer" placeholder="Enter Employer">
                <small class="text-danger">@error('employer') {{ $message }}@enderror</small>
            </div>
        </div>

        <div class="col-lg-6 col-md-6">
            <div class="form-group">
                <small>Employer Address</small><span class="asterisk">*</span>
                <input type="text" class="form-control" name="employer_address" placeholder="Enter Employer Address">
                <small class="text-danger">@error('employer_address') {{ $message }}@enderror</small>
            </div>
        </div>

        <div class="col-lg-4 col-md-4">
            <div class="form-group">
                <small>Date of Birth</small><span class="asterisk">*</span>
                <input type="date" class="form-control" name="date_of_birth" placeholder="Enter date of birth">
                <small class="text-danger">@error('date_of_birth') {{ $message }}@enderror</small>
            </div>
        </div>

        <div class="col-lg-4 col-md-4">
            <div class="form-group">
                <small>Age</small><span class="asterisk">*</span>
                <input type="text" class="form-control" name="age" placeholder="Enter Age">
                <small class="text-danger">@error('age') {{ $message }}@enderror</small>
            </div>
        </div>

        <div class="col-lg-4 col-md-4">
            <div class="form-group">
                <small>Cellphone No.</small><span class="asterisk">*</span>
                <input type="text" class="form-control" name="cellphone_no" placeholder="Enter Cellphone No.">
                <small class="text-danger">@error('cellphone_no') {{ $message }}@enderror</small>
            </div>
        </div>

        <div class="col-lg-4 col-md-4">
            <div class="form-group">
                <small>TIN No.</small><span class="asterisk">*</span>
                <input type="text" class="form-control" name="tin_no" placeholder="Enter TIN No.">
                <small class="text-danger">@error('tin_no') {{ $message }}@enderror</small>
            </div>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="form-group">
                <small>Email Address</small><span class="asterisk">*</span>
                <input type="email" class="form-control" name="email_address" placeholder="Enter Email Address">
                <small class="text-danger">@error('email_address') {{ $message }}@enderror</small>
            </div>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="form-group">
                <small>Facebook Account</small><span class="asterisk">*</span>
                <input type="text" class="form-control" name="facebook_account" placeholder="Enter FB Account">
                <small class="text-danger">@error('facebook_account') {{ $message }}@enderror</small>
            </div>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="form-group">
                <small>Amount Applied&#40;<small class="text-danger">Numbers only, no comma or decimals</small>&#41;</small><span class="asterisk">*</span>
                <input type="text" class="form-control" name="amount_applied" placeholder="Enter Amount Applied">
                <small class="text-danger">@error('amount_applied') {{ $message }}@enderror</small>
            </div>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="form-group" id="">
                <small>Term Applied&#40;<small class="text-danger">Number of months only</small>&#41;</small><span class="asterisk">*</span>
                <input type="text" class="form-control" name="term_applied" placeholder="enter term applied">
                <small class="text-danger">@error('term_applied') {{ $message }}@enderror</small>
            </div>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="form-group">
                <small>Mode of Payment</small><span class="asterisk">*</span>
                <div class="form-check row" style="padding: 3px 0;">
                    <div class="col-xs-4">
                        <input type="radio" class="form-check-input" id="radio1" id="mode_of_payment" name="mode_of_payment" value="option1">
                        <small><label class="form-check-label" for="radio1">Monthly</label></small>
                    </div>
                    <div class="col-xs-8">
                        <input type="radio" class="form-check-input" id="radio2" id="mode_of_payment" name="mode_of_payment" value="option2">
                        <small><label class="form-check-label" for="radio2">Semi-Monthly</label></small>
                    </div>
                </div>
                <small class="text-danger">@error('mode_of_payment') {{ $message }}@enderror</small>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <small>Scanned Signature</small><span class="asterisk">*</span>
                <input type="file" class="form-control" name="scanned_signature">
                <small class="text-danger">@error('scanned_signature') {{ $message }}@enderror</small>
            </div>
        </div>
    </div>

    <div class="line"></div>
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <button class="submit_btn" type="submit">SUBMIT APPLICATION</button>
        </div>
        <div class="col-lg-4"></div>
    </div>

    </div>
</form>
@endforeach
