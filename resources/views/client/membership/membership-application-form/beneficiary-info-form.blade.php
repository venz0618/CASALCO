@include('client.membership.membership-application-form.beneficiary-info-text')
<div class="row">
	<div class="form-group">
		<div class="col-lg-5 col-md-5">
			<div class="form-group">
				<small>BENEFICIARY NAME &#40;1&#41;</small><span class="asterisk">*</span>
				<input type="text" class="form-control" name="benName" placeholder="ENTER FULL NAME">
				<small class="text-danger">@error('beneficiary name') {{ $message }}@enderror</small>
			</div>
		</div>

		<div class="col-lg-5 col-md-5">
			<div class="form-group">
				<small>RELATIONSHIP</small><span class="asterisk">*</span>
				<input type="text" class="form-control" name="benRelation" placeholder="ENTER RELATIONSHIP">
				<small class="text-danger">@error('beneficiary relationship') {{ $message }}@enderror</small>
			</div>
		</div>

		<div class="col-lg-2 col-md-2">
			<div class="form-group">
				<small>AGE</small><span class="asterisk">*</span>
				<input type="text" class="form-control" name="benAge" placeholder="ENTER AGE">
				<small class="text-danger">@error('beneficiary age') {{ $message }}@enderror</small>
			</div>
		</div>

		<div class="col-lg-6 col-md-6">
			<div class="form-group">
				<small>ADDRESS</small><span class="asterisk">*</span>
				<input type="text" class="form-control" name="benAddress" placeholder="ENTER ADDRESS">
				<small class="text-danger">@error('beneficiary address') {{ $message }}@enderror</small>
			</div>
		</div>

		<div class="col-lg-6 col-md-6">
			<div class="form-group">
				<small>MOTHER'S MAIDEN NAME</small><span class="asterisk">*</span>
				<input type="text" class="form-control" name="mother's_maiden_name" placeholder="ENTER MOTHER'S MAIDEN NAME">
				<small class="text-danger">@error("mother's maiden name") {{ $message }}@enderror</small>
			</div>
		</div>
	</div>
</div>

<br>
<br>

<div class="row">
	<div class="form-group">
		<div class="col-lg-5 col-md-5">
			<div class="form-group">
				<small>BENEFICIARY NAME &#40;2&#41;</small>
				<input type="text" class="form-control" name="ben_name" placeholder="ENTER FULL NAME">
			</div>
		</div>

		<div class="col-lg-5 col-md-5">
			<div class="form-group">
				<small>RELATIONSHIP</small>
				<input type="text" class="form-control" name="ben_name" placeholder="ENTER RELATIONSHIP">
			</div>
		</div>

		<div class="col-lg-2 col-md-2">
			<div class="form-group">
				<small>AGE</small>
				<input type="text" class="form-control" name="ben_age" placeholder="ENTER AGE">
			</div>
		</div>

		<div class="col-lg-6 col-md-6">
			<div class="form-group">
				<small>ADDRESS</small>
				<input type="text" class="form-control" name="ben_address" placeholder="ENTER ADDRESS">
			</div>
		</div>

		<div class="col-lg-6 col-md-6">
			<div class="form-group">
				<small>MOTHER'S MAIDEN NAME</small>
				<input type="text" class="form-control" name="ben_mother" placeholder="ENTER MOTHER'S MAIDEN NAME">
			</div>
		</div>
	</div>
</div>

<br>
<br>

<div class="row">
	<div class="form-group">
		<div class="col-lg-5 col-md-5">
			<div class="form-group">
				<small>BENEFICIARY NAME &#40;3&#41;</small>
				<input type="text" class="form-control" name="ben_name" placeholder="ENTER FULL NAME">
			</div>
		</div>

		<div class="col-lg-5 col-md-5">
			<div class="form-group">
				<small>RELATIONSHIP</small>
				<input type="text" class="form-control" name="ben_name" placeholder="ENTER RELATIONSHIP">
			</div>
		</div>

		<div class="col-lg-2 col-md-2">
			<div class="form-group">
				<small>AGE</small>
				<input type="text" class="form-control" name="ben_age" placeholder="ENTER AGE">
			</div>
		</div>

		<div class="col-lg-6 col-md-6">
			<div class="form-group">
				<small>ADDRESS</small>
				<input type="text" class="form-control" name="ben_address" placeholder="ENTER ADDRESS">
			</div>
		</div>

		<div class="col-lg-6 col-md-6">
			<div class="form-group">
				<small>MOTHER'S MAIDEN NAME</small>
				<input type="text" class="form-control" name="ben_mother" placeholder="ENTER MOTHER'S MAIDEN NAME">
			</div>
		</div>
	</div>
</div>