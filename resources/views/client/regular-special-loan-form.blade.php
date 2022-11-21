@extends('client.index')

@section('client_content')

<div class="contact-form">
		<form action="{{ url('/regular-special-loan-form') }}" method="POST" enctype="multipart/form-data">
		
			<div class="row pt-5">
				<div class="col-lg-2">
						
				</div>

				<div class="col-lg-8 border">
					<div class="row">
					<div class="col-lg-12">
						<h4 class="pt-5 justify-content-center font-weight-bold">CAPITOL SAVING & LOANS COOPERATIVE, INC</h4>
                        <h6 class="pt-3 justify-content-center">Regular/Special Loan Form for CASALCO Members</h6>
						<hr class="line">
						<h5 class ="font-weight-bold">Personal Information</h5>
						    {{-- <p class="font-weight-500">We require your personal information to ensure calidty of you memnbership application</p>  --}}
						 <hr> 
						
					</div>
				
				
				
					@csrf	
				<div class="col-lg-4 col-sm-12">
					<fieldset>
                        <label for="First Name" class="form-label">Name of Member</label>
						<input name="name" type="text" id="name" placeholder="Provide Name" value="{{ Auth::user()->username }}">
						<span class="text-danger">@error('name')
								{{ $message }}
							@enderror </span>
					</fieldset>
				</div>
				<input  type="hidden" value="{{ Auth::user()->id }}" name="user_id">
				<div class="col-lg-4 col-sm-12">
					<fieldset>
                        <label for="First Name" class="form-label">CASALCO ID no.</label>
						<input name="acc_id" type="text" id="acc_id" placeholder="ex. 20xx-xxxx" value="{{ Auth::user()->acc_id }}">
						<span class="text-danger">@error('acc_id')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
				
				
				<div class="col-lg-4 col-sm-12">
					<fieldset>
                        <label for="First Name" class="form-label">Age</label>
						<input name="age" type="text" id="age" placeholder="Provide Age">
						<span class="text-danger">@error('age')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
                <div class="col-lg-4 col-sm-12">
					<fieldset>
                        <label for="First Name" class="form-label">Birthdate</label>
						<input name="dob" type="date" id="dob" placeholder="Birthdate">
						<span class="text-danger">@error('birthday')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
				<div class="col-lg-4 col-sm-12">
					<fieldset>
                        <label for="First Name" class="form-label">Present Address</label>
						<input name="present_address" type="text" id="present_address" placeholder="Provide Address">
						<span class="text-danger">@error('present_address')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
                	
				<div class="col-lg-4 col-sm-12">
					<fieldset>
                        <label for="First Name" class="form-label">Permanent Address</label>
						<input name="permanent_address" type="text" id="permanent_address" placeholder="Provide Address">
						<span class="text-danger">@error('permanent_address')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
				<div class="col-lg-4 col-sm-12">
					<fieldset>
                        <label for="First Name" class="form-label">Email</label>
						<input name="email" type="email" id="email" placeholder="Example@example.com">
						<span class="text-danger">@error('email')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
                <div class="col-lg-4 col-sm-12">
					<fieldset>
                        <label for="First Name" class="form-label">FB account Name</label>
						<input name="fb_acc" type="text" id="fb_acc" placeholder="FB account name">
						<span class="text-danger">@error('fb_acc')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
                <div class="col-lg-4 col-sm-12">
					<fieldset>
                        <label for="First Name" class="form-label">Employer</label>
						<input name="emp" type="text" id="emp" placeholder="Employer">
						<span class="text-danger">@error('emp')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
                <div class="col-lg-4 col-sm-12">
					<fieldset>
                        <label for="First Name" class="form-label">Cellphone No.</label>
						<input name="phone_no" type="text" id="phone_no" placeholder="09xxxxxxxxx">
						<span class="text-danger">@error('phone_no')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
                <div class="col-lg-4 col-sm-12">
					<fieldset>
                        <label for="First Name" class="form-label">Length of Service</label>
						<input name="length_service" type="text" id="length_service" placeholder="Ex. 2 years">
						<span class="text-danger">@error('length_service')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
                <div class="col-lg-4 col-sm-12">
					<fieldset>
                        <label for="First Name" class="form-label">SSS number</label>
						<input name="sss" type="text" id="sss" placeholder="Enter your social security number; i.e 00-000000-0">
						<span class="text-danger">@error('sss')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>

                <div class="col-lg-4 col-sm-12">
					<fieldset>
                        <label for="First Name" class="form-label">Employmen Status</label>
						<input name="emp_status" type="text" id="emp_status" placeholder="Employment Status">
						<span class="text-danger">@error('emp_status')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
                <input  type="hidden" value="0" name="loanApp_type">
                <div class="col-lg-4 col-sm-12">
					<fieldset>
                        <label for="First Name" class="form-label">Present Position</label>
						<input name="present_position" type="text" id="present_position" placeholder="Present Position">
						<span class="text-danger">@error('present_position')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
                <div class="col-lg-4 col-sm-12">
					<fieldset>
                        <label for="First Name" class="form-label">TIN number</label>
						<input name="tin" type="text" id="tin" placeholder="Enter your TIN; i.e. 000-000-000">
						<span class="text-danger">@error('tin')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
                <div class="col-lg-4 col-sm-12">
					<fieldset>
                        <label for="First Name" class="form-label">Name of Spouse</label>
						<input name="s_name" type="text" id="s_name" placeholder="Provide Name">
						<span class="text-danger">@error('s_name')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
                <div class="col-lg-4 col-sm-12">
                    <label for="First Name" class="form-label">Civil Status</label>
					<select name="civilStatus" id="civilStatus">
						<option value="" disabled selected >Seclect</option>
						<option value="Single">Single</option>
						<option value="Married">Married</option>
						<option value="Divorce">Divorced</option>
						<option value="Siparated">Siparated</option>
						<option value="Widowed">Widowed</option>
					</select>
					<span class="text-danger">@error('civilStatus')
						{{ $message }}
					@enderror </span>
				</div>
				
				<div class="col-lg-4 col-sm-12">
					<fieldset>
                        <label for="First Name" class="form-label">Occupation</label>
						<input name="occupation" type="text" id="occupation" placeholder="Occupation">
						<span class="text-danger">@error('occupation')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
				<div class="col-lg-4 col-sm-12">
					<fieldset>
                        <label for="First Name" class="form-label">No. of Children</label>
						<input name="no_child" type="text" id="no_child" placeholder="No. of Children">
						<span class="text-danger">@error('no_child')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
					<div class="col-lg-4 col-sm-12">
						<label for="First Name" class="form-label">Loan Category</label>
						<select name="loan_cat" id="loan_cat">
							<option value="" disabled selected >Seclect</option>
							<option value="0">Regular Loan</option>
							<option value="1">Special Loan</option>
						</select>
						<span class="text-danger">@error('loan_cat')
							{{ $message }}
						@enderror </span>
					</div>
                    
					
				
                <div class="col-lg-12">
                    <hr>
                </div>
                <div class="col-lg-12">
                    <h5 class ="font-weight-bold">Credit Assestment List</h5>
                    <hr>	
                </div>
                <div class="col-lg-6 col-sm-12">
                    <h5 class ="font-weight-bold text-danger pb-3">MONTHLY INCCOME</h5>
                    
                </div>
                <div class="col-lg-6 col-sm-12">
                    <h5 class ="font-weight-bold text-danger pb-3">EXPENSES/MONTH</h5>
                    
                </div>
                <div class="col-lg-6 col-sm-12">
					<fieldset>
						<input name="borrower_income" type="text" id="borrower_income" placeholder="Borrower Income">
						<span class="text-danger">@error('borrower_income')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
				
                <div class="col-lg-6 col-sm-12">
					<fieldset>
						<input name="food_sub" type="text" id="food_sub" placeholder="Food & Subsistence">
						<span class="text-danger">@error('food_sub')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
                
				<div class="col-lg-6 col-sm-12">
					<fieldset>
						<input name="other_income" type="text" id="other_income" placeholder="Other Income">
						<span class="text-danger">@error('other_income')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
                <div class="col-lg-6 col-sm-12">
					<fieldset>
						<input name="educ_bill" type="text" id="educ_bill" placeholder="Education Bill">
						<span class="text-danger">@error('educ_bill')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
                <div class="col-lg-6 col-sm-12">
					<fieldset>
						<input name="s_income" type="text" id="s_income" placeholder="Spouse Income">
						<span class="text-danger">@error('s_income')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
                <div class="col-lg-6 col-sm-12">
					<fieldset>
						<input name="electric_bill" type="text" id="electric_bill" placeholder="Electric Bill">
						<span class="text-danger">@error('electric_bill')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
                <div class="col-lg-6 col-sm-12">
					<fieldset>
						<input name="loan_type" type="text" id="loan_type" placeholder="Types of Loan Applied">
						<span class="text-danger">@error('loan_type')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
                <div class="col-lg-6 col-sm-12">
					<fieldset>
						<input name="water_bill" type="text" id="water_bill" placeholder="Water Bill">
						<span class="text-danger">@error('water_bill')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
                <div class="col-lg-6 col-sm-12">
					<fieldset>
						<input name="amount" type="text" id="amount" placeholder="Amount Applied">
						<span class="text-danger">@error('amount')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
                <div class="col-lg-6 col-sm-12">
					<fieldset>
						<input name="transportation" type="text" id="transportation" placeholder="Transportation">
						<span class="text-danger">@error('transportation')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
                <div class="col-lg-6 col-sm-12">
					<fieldset>
						<input name="term_applied" type="text" id="term_applied" placeholder="Term Applied">
						<span class="text-danger">@error('term_applied')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
                <div class="col-lg-6 col-sm-12">
					<fieldset>
						<input name="allowance" type="text" id="allowance" placeholder="Allowances">
						<span class="text-danger">@error('allowance')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
                <div class="col-lg-6 col-sm-12">
					<select name="mode_payment" id="mode_payment">
						<option value="" disabled selected >Mode of Payment</option>
						<option value="salary deduction">SALARY DED.</option>
						<option value="personal">PERSONAL</option>
						
					</select>
					<span class="text-danger">@error('civilStatus')
						{{ $message }}
					@enderror </span>
				</div>
                <div class="col-lg-6 col-sm-12">
					<fieldset>
						<input name="others" type="text" id="others" placeholder="Others">
						<span class="text-danger">@error('others')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
				<div class="col-lg-12">
					<h5 class ="font-weight-bold text-danger pb-3">Co-Maker</h5>
				</div>

                <div class="col-lg-6 col-sm-12">
					<fieldset>
						<input name="co_maker_history" type="text" id="co_maker_history" placeholder="Co-maker History">
						<span class="text-danger">@error('co_maker_history')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
				<div class="col-lg-6 col-sm-12">
					<fieldset>
						<input name="co_maker_name" type="text" id="co_maker_name" placeholder="Co-maker Name">
						<span class="text-danger">@error('co_maker_name')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>

				<div class="col-lg-12">
					<fieldset>
					<label class="form-label" for="selfiepic">Attach Co-maker's Statement</label>
					<!-- <input type="file" class="w-28 mt-2" name="selfiepic" id="selfiepic" > -->
					<input type="file" class="form-control" id="customFile" name="co_maker_form" onchange="previewFile(this)">
					
						
					
					</fieldset>
				</div>


                
			

					
					
				<div class="col-lg-12 pb-3">
					<fieldset>
						
					<button type="submit" id="form-submit" class="main-button-icon w-25 mt-5 ">Validate</button>
					<!-- <a class="btn btn-primary main-button-icon w-25 mt-5 " href="#" role="button">Validate</a> -->
					</fieldset>
				</div> 
			
				
				</div>
				
				</div>
			</div>
		</form>
</div>

@endsection