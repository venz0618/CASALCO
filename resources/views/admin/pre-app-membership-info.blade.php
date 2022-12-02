@extends('admin.index')
@section('title', 'Membership Information')
@section('admin_content')

       <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
             <h4 class="modal-title">CASALCO Membership Registry Form</h4>
          </div>
          <!-- Modal body -->
          <form action="{{ route('membership.update', $membership->id) }}" method="POST">
            @csrf
            @method('PUT')
          <div class="modal-body">
            <div class="row">
              <div class="col-4">
                <h4>Personal Information</h4>
                
              </div>
              <div class="col-4">
                <input required type="text" class="form-control" name="acc_id" placeholder="Account No">
                <small class="text-danger">@error("acc_id") {{ $message }}@enderror</small>
              </div>
              <div class="col-4">
                <input required type="text" class="form-control" name="or_no" placeholder="OR No">
                <small class="text-danger">@error("or_no") {{ $message }}@enderror</small>
              </div>
            </div>
            <div class="border border-danger"></div>
            <div class="row pt-3">
              <div class="col-lg-4">
                <div class="form-group">
                  <small>First Name</small>
                  <input type="text" class="form-control" disabled placeholder="First Name" value="{{ $membership->first_name }}">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <small>Middle Name</small>
                  <input type="text" class="form-control" disabled placeholder="Middle Name" value="{{ $membership->middle_name }}">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <small>Last Name</small>
                  <input type="text" class="form-control" disabled placeholder="Last Name" value="{{ $membership->last_name }}">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <small>Suffix</small>
                  <input type="text" class="form-control" disabled placeholder="Suffix" value="{{ $membership->suffix }}">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <small>Gender</small>
                  <input type="text" class="form-control" disabled placeholder="Gender" value="{{ $membership->gender }}">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <small>Date of Birth</small>
                  <input type="text" class="form-control" disabled placeholder="birthday" value="{{ $membership->dob }}">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <small>Birth Place</small>
                  <input type="text" class="form-control" disabled placeholder="Birth Place" value="{{ $membership->Bplace }}">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <small>Address</small>
                  <input type="text" class="form-control" disabled placeholder="Address" value="{{ $membership->address }}">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <small>Unit</small>
                  <input type="text" class="form-control" disabled placeholder="Unit" value="{{ $membership->unit }}">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <small>Occupation</small>
                  <input type="text" class="form-control" disabled placeholder="Occupation" value="{{ $membership->Occu }}">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <small>Education Attained</small>
                  <input type="text" class="form-control" disabled placeholder="Educ. Attainment" value="{{ $membership->educ }}">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <small>Monthly Income</small>
                  <input type="text" class="form-control" disabled placeholder="Monthly Income" value="{{ $membership->MI }}">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <small>Civil Status</small>
                  <input type="text" class="form-control" disabled placeholder="Civil Status" value="{{ $membership->civilStatus }}">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <small>Religion</small>
                  <input type="text" class="form-control" disabled placeholder="Religion" value="{{ $membership->religion }}">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <small>Contact No.</small>
                  <input type="text" class="form-control" disabled placeholder="Contact NUmber" value="{{ $membership->contact_number }}">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <small>Email</small>
                  <input type="text" class="form-control" disabled placeholder="Email Address" value="{{ $membership->email }}">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <small>No. of Dependents</small>
                  <input type="text" class="form-control" disabled placeholder="No. of Dependents" value="{{ $membership->Dependents }}">
                </div>
              </div>
            </div>
  
            @if (!empty($membership->spouse))
            <div class="pt-3 pb-2">
              <h5 class ="font-weight-bold">Spouse Personal Information</h5>
            </div>
            <div class="border border-danger"></div>
            <div class="row pt-3">
              <div class="col-lg-8">
                <div class="form-group">
                <label for="First Name" class="form-label">Full Name</label>
                  <input type="text" class="form-control" disabled placeholder="Full Name" value="{{ $membership->spouse->spouseFname }}">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                <label for="First Name" class="form-label">Age</label>
                  <input type="text" class="form-control" disabled placeholder="Age" value="{{ $membership->spouse->spouseAge }}">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                <label for="First Name" class="form-label">Occupation</label>
                  <input type="text" class="form-control" disabled placeholder="Occupation" value="{{ $membership->spouse->spouseOcc }}">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                <label for="First Name" class="form-label">Monthly Income</label>
                  <input type="text" class="form-control" disabled placeholder="Monthly Income" value="{{ $membership->spouse->spouseMI }}">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                <label for="First Name" class="form-label">Employeer's Name</label>
                  <input type="text" class="form-control" disabled placeholder="Employeer's Name" value="{{ $membership->spouse->spouseEmplrName }}">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                <label for="First Name" class="form-label">Contact No.</label>
                  <input type="text" class="form-control" disabled placeholder="Contact No." value="{{ $membership->spouse->spouseConNum }}">
                </div>
              </div>
            </div>
            @endif
  
  
            @foreach ($membership->ben as $b)
            <div class="pt-3 pb-2">
              <h5 class ="font-weight-bold">Nomination of Benificiary</h5>
            </div>
            <div class="border border-danger"></div>
            <div class="row pt-3">
              <div class="col-lg-6">
                <div class="form-group">
                <label for="First Name" class="form-label">Full Name</label>
                  <input type="text" class="form-control" disabled placeholder="Full Name" value="{{ $b->benName }}">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                <label for="First Name" class="form-label">Relationship</label>
                  <input type="text" class="form-control" disabled placeholder="Relationship" value="{{ $b->benRelation }}">
                </div>
              </div>
              <div class="col-lg-8">
                <div class="form-group">
                <label for="First Name" class="form-label">Address</label>
                  <input type="text" class="form-control" disabled placeholder="Address" value="{{ $b->benAddress }}">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                <label for="First Name" class="form-label">Age</label>
                  <input type="text" class="form-control" disabled placeholder="Age" value="{{ $b->benAge }}">
                </div>
              </div>
              {{-- <div class="col-lg-4">
                <div class="form-group">
                  <input type="text" class="form-control" disabled placeholder="Employeer's Name">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <input type="text" class="form-control" disabled placeholder="Contact No.">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <input type="text" class="form-control" disabled placeholder="Employeer's Name">
                </div>
              </div> --}}
            </div>
            @endforeach
  
  
  
            <div class="pt-3 pb-2">
              <h5 class ="font-weight-bold">Government ID's</h5>
            </div>
            <div class="border border-danger"></div>
            <div class="row pt-3">
              <div class="col-lg-6">
                <div class="form-group">
                  <small>TIN No.</small>
                  <input type="text" class="form-control" disabled placeholder="TIN" value="{{ $membership->TIN }}">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <small>SSS No.</small>
                  <input type="text" class="form-control" disabled placeholder="SSS" value="{{ $membership->SSSnum }}">
                </div>
              </div>
            </div>
       
          <!-- Modal footer -->
          <div class="modal-footer">
              <input type="hidden" value="2" name="is_approved">
              <button type="submit" class="btn btn-success">Approve</button>
              
          </div>
        </form>
       </div>
    </div>
  </div>




@endsection