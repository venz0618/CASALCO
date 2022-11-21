@extends('client.index')

@section('client_content')

 	@if(Session::has('success'))
		<div class="alert alert-success" role ="alert">
			{{ Session::get('success') }}
		</div>
	@endif

	<div class="contact-form">
		<form action="{{ url('/membership-application') }}" method="POST" enctype="multipart/form-data" id="membership-form">
		
			<div class="row pt-5">
				<div class="col-lg-2">
						
				</div>

				<div class="col-lg-8 border">
					<div class="row">
					<div class="col-lg-12">
						<h4 class="pt-5 justify-content-center">Casalco Membership Form</h4>
						<hr class="line">
						<h5 class ="font-weight-bold">Personal Information</h5>
						<p class="font-weight-500">We require your personal information to ensure validty of you memnbership application</p>
						<hr>
						
					</div>
				
				
				
					@csrf	
					<input name="membership_type" type="hidden" id="membership_type" value = "0">
				<div class="col-lg-4 col-sm-12">
					<fieldset>
						<span class="text-danger">@error('Fname'){{ $message }}@enderror </span>
						<input name="first_name" type="text" id="Fname" placeholder="First Name">
					</fieldset>
				</div>
				<div class="col-lg-4 col-sm-12">
					<fieldset>
						<input name="middle_name" type="text" id="Mname" placeholder="Middle Name">
						<span class="text-danger">@error('Mname')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
				<div class="col-lg-4 col-sm-12">
					<fieldset>
						<input name="last_name" type="text" id="Lname" placeholder="Last Name">
						<span class="text-danger">@error('Lname')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
				<div class="col-lg-4 col-sm-12">
					<fieldset>
						<input name="suffix" type="text" id="suffix" placeholder="Suffix">
					</fieldset>
				</div>
				<div class="col-lg-4 col-sm-12">
					<select name="gender" id="gender">
						<option value="" disabled selected >Gender</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
					<span class="text-danger">@error('gender')
						{{ $message }}
					@enderror </span>
				</div>
				<div class="col-lg-4 col-sm-12">
					<fieldset>
						<input name="dob" type="date" id="dob" placeholder="Birthday">
						<span class="text-danger">@error('dob')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
				<div class="col-lg-4 col-sm-12">
					<fieldset>
						<input name="Bplace" type="text" id="Bplace" placeholder="Birth Place">
						<span class="text-danger">@error('Bplace')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
				<div class="col-lg-4 col-sm-12">
					<fieldset>
						<input name="address" type="text" id="suffix" placeholder="Address">
						<span class="text-danger">@error('address')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
				<div class="col-lg-4 col-sm-12">
					<select name="unit" id="unit">
						<option value="" disabled selected >Unit</option>
						<option value="CU(main)">CU(main)</option>
						<option value="CUMC">CUMC</option>
						<option value="CUBE">CUBE</option>
						<option value="Associate">Associate</option>
					</select>
					<span class="text-danger">@error('unit')
						{{ $message }}
					@enderror </span>
				</div>
				<div class="col-lg-4 col-sm-12">
					<fieldset>
						<input name="Occu" type="text" id="occupation" placeholder="Occupation">
						<span class="text-danger">@error('occupation')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
				<div class="col-lg-4 col-sm-12">
					<fieldset>
					<select name="educ" id="educ">
						<option value="" disabled selected >Education Attainment</option>
						<option value="Doctor's">Doctor's</option>
						<option value="Master's">Master's</option>
						<option value="College Graduate">College Graduate</option>
						<option value="Undergraduate">Undergraduate</option>
						
					</select>
						<span class="text-danger">@error('educ')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
				<div class="col-lg-4 col-sm-12">
					<fieldset>
						<input name="MI" type="text" id="MI" placeholder="Monthly Income">
						<span class="text-danger">@error('MI')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
				<div class="col-lg-4 col-sm-12">
					<select name="civilStatus" id="civilStatus">
						<option value="" disabled selected >Civil Status</option>
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
						<input name="religion" type="text" id="religion" placeholder="Religion">
						<span class="text-danger">@error('religion')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
				<div class="col-lg-4 col-sm-12">
					<fieldset>
						<input name="contact_number" type="text" id="contactNum" placeholder="Contact Number">
						<span class="text-danger">@error('contactNum')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
				<div class="col-lg-4 col-sm-12">
					<fieldset>
						<input name="email" type="email" id="email" placeholder="Email Address">
						<span class="text-danger">@error('email')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
				<div class="col-lg-4 col-sm-12">
					<fieldset>
						<input name="Dependents" type="text" id="NumDependents" placeholder="Number of Dependents">
						<span class="text-danger">@error('NumDependents')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
				<div class="col-lg-12">
					<fieldset>
						<input name="mothers_maiden_name" type="text" id="Mothers_Mname" placeholder="Mother's Maiden Name ">
						<span class="text-danger">@error('Mothers_Mname')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
				<div class="col-lg-12">
						<h5 class ="font-weight-bold">Spouse Personal Information</h5>
						<hr>	
				</div>
					
					<div class="col-lg-8 col-sm-12">
					<fieldset>
						<input name="spouseFname" type="text" id="spouseFname" placeholder="Full Name">
						<span class="text-danger">@error('spouseFname')
							{{ $message }}
						@enderror </span>
					</fieldset>
					</div>
					<div class="col-lg-4 col-sm-12">
					<fieldset>
						<input name="spouseAge" type="text" id="spouseAge" placeholder="Age">
						<span class="text-danger">@error('spouseAge')
							{{ $message }}
						@enderror </span>
					</fieldset>
					</div>
					<div class="col-lg-6 col-sm-12">
					<fieldset>
						<input name="spouseOcc" type="text" id="spouseOcc" placeholder="Occupation">
						<span class="text-danger">@error('spouseOcc')
							{{ $message }}
						@enderror </span>
					</fieldset>
					</div>
					<div class="col-lg-6 col-sm-12">
					<fieldset>
						<input name="spouseMI" type="text" id="spouseMI" placeholder="Monthly Income">
						<span class="text-danger">@error('spouseMI')
							{{ $message }}
						@enderror </span>
					</fieldset>
					</div>
					<div class="col-lg-6 col-sm-12">
					<fieldset>
						<input name="spouseEmplrName" type="text" id="spouseEmplrName" placeholder="Employer's Name">
						<span class="text-danger">@error('spouseEmplrName')
							{{ $message }}
						@enderror </span>
					</fieldset>
					</div>
					<div class="col-lg-6 col-sm-12">
					<fieldset>
						<input name="spouseConNum" type="text" id="spouseConNum" placeholder="Contact Number">
						<span class="text-danger">@error('spouseConNum')
							{{ $message }}
						@enderror </span>
					</fieldset>
					</div>
					{{-- <div class="col-lg-12">
						<p >Mother's Maiden Name</p>
							
					</div> --}}
					<div class="col-lg-12">
						<fieldset>
							<input name="spouse_mother" type="text" id="spouse_mother" placeholder="Mother's Maiden Name">
							<span class="text-danger">@error('spouse_mother')
								{{ $message }}
							@enderror </span>
						</fieldset>
					</div>
					{{-- <div class="col-lg-4 col-sm-12">
						<fieldset>
							<input name="benMothersFname" type="text" id="benMothersFname" placeholder="First Name">
							<span class="text-danger">@error('benMothersFname')
								{{ $message }}
							@enderror </span>
						</fieldset>
					</div>
					<div class="col-lg-4 col-sm-12">
						<fieldset>
							<input name="benMothersMname" type="text" id="benMothersMname" placeholder="Middle Name">
							<span class="text-danger">@error('benMothersMname')
								{{ $message }}
							@enderror </span>
						</fieldset>
					</div> --}}
					<div class="col-lg-12">
						<h5 class ="font-weight-bold">Nomination of Benificiary</h5>
						<hr>	
					</div>
					<div class="col-lg-6 col-sm-12">
					<fieldset>
						<input name="benName" type="text" id="benName" placeholder="Full Name">
						<span class="text-danger">@error('benName')
							{{ $message }}
						@enderror </span>
					</fieldset>
					</div>
					<div class="col-lg-6 col-sm-12">
					<fieldset>
						<input name="benRelation" type="text" id="benRelation" placeholder="Relationship">
						<span class="text-danger">@error('benRelation')
							{{ $message }}
						@enderror </span>
					</fieldset>
					</div>
					<div class="col-lg-8 col-sm-12">
					<fieldset>
						<input name="benAddress" type="text" id="benAddress" placeholder="Address">
						<span class="text-danger">@error('benAddress')
							{{ $message }}
						@enderror </span>
					</fieldset>
					</div>
					<div class="col-lg-4 col-sm-12">
					<fieldset>
						<input name="benAge" type="text" id="benAge" placeholder="Age">
						<span class="text-danger">@error('benAge')
							{{ $message }}
						@enderror </span>
					</fieldset>
					</div>
					
					
					<!-- <div class="col-lg-12 pb-3">
					<fieldset>
						<button type="submit" id="form-submit" class="main-button-icon w-25 mr-5">Add a Benificiary</button>
						<a class="button" href="#" role="button">Add a Benificiary</a>
					</fieldset>
					
				</div>  -->
					<div class="col-lg-12">
						<h5 class ="font-weight-bold mt-2">Government ID Number</h5>
						<p class="font-weight-500">The fields below are optional but we encourageyou to provide the information</p>
						<hr>	
					</div>
					<div class="col-lg-4 col-sm-12">
						<fieldset>
							<input name="TIN" type="text" id="TIN" placeholder="Tax Identification Number" value = "none">
							<span class="text-danger">@error('TIN')
								{{ $message }}
							@enderror </span>
						</fieldset>
					</div>
					<div class="col-lg-4 col-sm-12">
						<fieldset>
							<input name="SSSnum" type="text" id="SSSnum" placeholder="SSS Number">
							<span class="text-danger">@error('SSSnum')
								{{ $message }}
							@enderror </span>
						</fieldset>
					</div>
					<div class="col-lg-12">
						<h5 class ="font-weight-bold">Attach File</h5>
						<hr>	
					</div>
					<div class="col-lg-12">
						<fieldset>
						<label class="form-label" for="selfiepic">Attach Selfie Picture</label>
						<!-- <input type="file" class="w-28 mt-2" name="selfiepic" id="selfiepic" > -->
						<input type="file" class="form-control" id="customFile" name="selfie_pic" onchange="previewFile(this)">
						
							<img src="" alt="" id="previewImg" style="max-width: 130px; margin-top: 20px;">
						
						</fieldset>
					</div>
					<div class="col-lg-12">
					<img src="" alt="" id="previewImg" style="max-width: 130px; margin-top: 20px;">
					</div>
					
					<div class="col-lg-12">
						<fieldset>
						<label class="form-label" for="empIDpic">Attach Employee ID</label>
						<input type="file" class="w-28 mt-2" name="empIDpic" id="empIDpic" >
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