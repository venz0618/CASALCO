
    @include('client.membership.membership-application-form.personal-info-text')
    <div class="row">
      <div class="col-lg-4 col-md-4">
        <div class="form-group">
          <small>FIRST NAME</small><span class="asterisk">*</span>
          <input type="text" class="form-control" required name="first_name" placeholder="ENTER FIRST NAME">
          <small class="text-danger">@error('first name') {{ $message }}@enderror</small>
        </div>
      </div>

      <input type="hidden" class="form-control" name="membership_type" value="0">

      <div class="col-lg-4 col-md-4">
        <div class="form-group">
          <small>MIDDLE NAME</small><span class="asterisk">*</span>
          <input type="text" class="form-control" required name="middle_name" placeholder="ENTER MIDDLE NAME">
          <small class="text-danger">@error('middle name') {{ $message }}@enderror</small>
        </div>
      </div>

      <div class="col-lg-4 col-md-4">
        <div class="form-group">
          <small>LAST NAME</small><span class="asterisk">*</span>
          <input type="text" class="form-control" required name="last_name" placeholder="ENTER LAST NAME">
          <small class="text-danger">@error('last name') {{ $message }}@enderror</small>
        </div>
      </div>

      <div class="col-lg-4 col-md-4">
        <div class="form-group">
          <small>SUFFIX</small>
          <input type="text" class="form-control" name="suffix" placeholder="ENTER SUFFIX">
        </div>
      </div>

      <div class="col-lg-4 col-md-4">
        <div class="form-group">
          <small>GENDER</small><span class="asterisk">*</span>
          <select required name="gender" id="gender" class="form-control">
            <option value="" disabled selected >SELECT GENDER</option>
            <option value="Male">MALE</option>
            <option value="Female">FEMALE</option>
          </select>
          <small class="text-danger">@error('gender') {{ $message }}@enderror</small>
        </div>
      </div>

      <div class="col-lg-4 col-md-4">
        <div class="form-group">
          <small>BIRTH DATE</small><span class="asterisk">*</span>
          <input type="date" class="form-control" required name="dob">
          <small class="text-danger">@error('dob') {{ $message }}@enderror</small>
        </div>
      </div>

      <div class="col-lg-4 col-md-4">
        <div class="form-group">
          <small>BIRTH PLACE</small><span class="asterisk">*</span>
          <input type="text" class="form-control" required name="Bplace" required name="birth_place" placeholder="ENTER BIRTH PLACE">
          <small class="text-danger">@error('birth place') {{ $message }}@enderror</small>
        </div>
      </div>

      <div class="col-lg-4 col-md-4">
        <div class="form-group">
          <small>ADDRESS</small><span class="asterisk">*</span>
          <input type="text" class="form-control" required name="address" placeholder="ENTER ADDRESS">
          <small class="text-danger">@error('address') {{ $message }}@enderror</small>
        </div>
      </div>

      <div class="col-lg-4 col-md-4">
        <div class="form-group">
          <small>OCCUPATION</small><span class="asterisk">*</span>
          <input type="text" class="form-control" required name="Occu" required name="occupatoin" placeholder="ENTER OCCUPATION">
          <small class="text-danger">@error('occupatoin') {{ $message }}@enderror</small>
        </div>
      </div>



      <div class="col-lg-4 col-md-4">
        <div class="form-group">
          <small>UNIT</small><span class="asterisk">*</span>
          <select required name="unit" id="unit" class="form-control">
            <option value="" disabled selected >SELECT UNIT</option>
            <option value="CU(main)">CU(main)</option>
            <option value="CUMC">CUMC</option>
            <option value="CUBE">CUBE</option>
            <option value="Associate">ASSOCIATE</option>
          </select>
          <small class="text-danger">@error('unit') {{ $message }}@enderror</small>
        </div>
      </div>

      <div class="col-lg-4 col-md-4">
        <div class="form-group">
          <small>EDUCATIONAL ATTAINMENT</small><span class="asterisk">*</span>
          <select required name="educ" id="educ" required name="educational_attainment" class="form-control">
            <option value="" disabled selected >SELECT EDUCATIONAL ATTAINMENT</option>
            <option value="Doctor's">Doctor's</option>
            <option value="Master's">Master's</option>
            <option value="College Graduate">College Graduate</option>
            <option value="Undergraduate">Undergraduate</option>
          </select>
          <small class="text-danger">@error('educational attainment') {{ $message }}@enderror</small>
        </div>
      </div>

      <div class="col-lg-4 col-md-4">
        <div class="form-group">
          <small>MONTHLY INCOME</small><span class="asterisk">*</span>
          <input type="text" required name="MI" class="form-control" required name="monthly_income" placeholder="ENTER MONTHLY INCOME">
          <small class="text-danger">@error('monthly income') {{ $message }}@enderror</small>
        </div>
      </div>

      <div class="col-lg-4 col-md-4">
        <small>CIVIL STATUS</small><span class="asterisk">*</span>
        <select required name="civilStatus" id="civil_status" class="form-control">
          <option value="" disabled selected >SELECT CIVIL STATUS</option>
          <option value="Single">Single</option>
          <option value="Married">Married</option>
          <option value="Divorce">Divorced</option>
          <option value="Siparated">Siparated</option>
          <option value="Widowed">Widowed</option>
        </select>
        <small class="text-danger">@error('civil status') {{ $message }}@enderror</small>
      </div>

      <div class="col-lg-4 col-md-4">
        <div class="form-group">
          <small>RELIGION</small><span class="asterisk">*</span>
          <input type="text" class="form-control" required name="religion" placeholder="ENTER RELIGION">
          <small class="text-danger">@error('religion') {{ $message }}@enderror</small>
        </div>
      </div>

      <div class="col-lg-4 col-md-4">
        <div class="form-group">
          <small>CONTACT NUMBER</small><span class="asterisk">*</span>
          <input type="text" class="form-control" required name="contact_number" placeholder="ENTER CONTACT NUMBER">
          <small class="text-danger">@error('contact number') {{ $message }}@enderror</small>
        </div>
      </div>

      <div class="col-lg-4 col-md-4">
        <div class="form-group">
          <small>NUMBER OF DEPENDENT</small><span class="asterisk">*</span>
          <input type="text" class="form-control" required name="Dependents" placeholder="ENTER NUMBER OF DEPENDENTS">
          <small class="text-danger">@error('Dependents') {{ $message }}@enderror</small>
        </div>
      </div>

      <div class="col-lg-4 col-md-4">
        <div class="form-group">
          <small>MOTHER'S MAIDEN NAME</small><span class="asterisk">*</span>
          <input type="text" class="form-control" name="mothers_maiden_name" placeholder="ENTER MOTHER'S MAIDEN NAME">
          <small class="text-danger">@error("mother's maiden name") {{ $message }}@enderror</small>
        </div>
      </div>
      <div class="col-lg-6 col-mg-6">
        <div class="form-group">
            <small>EMAIL ADDRESS</small><span class="asterisk">*</span>
            <input type="email" class="form-control" required name="email" placeholder="ENTER EMAIL">
            <small class="text-danger">@error('email') {{ $message }}@enderror</small>
        </div>
    </div>
    </div>
</div>
