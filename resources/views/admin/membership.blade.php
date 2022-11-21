@extends('admin.index')
@section('title', 'Membership')
@section('admin_content')

<table class="table table-bordered table-striped table-sm" id="example2">
	<thead>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Unit</th>
      <th>Date Applied</th>
      <th>Date Pre-Approved</th>
      <th>Status</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($membership as $m)
        <tr>
        <td>{{ $m->first_name }}</td>
        <td>{{ $m->last_name }}</td>
        <td>{{ $m->unit }}</td>
        <td>{{ date('m-d-Y h:i a', strtotime($m->created_at)) }}</td>
        <td>{{ date('m-d-Y h:i a', strtotime($m->updated_at)) }}</td>
        <td>

            @if($m->is_approved)
                <span class="badge badge-info">Pre-approved</span>
           
            @endif
        </td>
        <td>
            <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#myModal{{ $m->id }}">Details</button>
        </td>
        </tr>
    @endforeach
  </tbody>
</table>

@foreach($membership as $m)
<div class="modal fade" id="myModal{{ $m->id }}">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
     <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
           <h4 class="modal-title">CASALCO Membership Application Form</h4>
        </div>
        <!-- Modal body -->
        <form action="{{ route('membership.update', $m->id) }}" method="POST">
          @csrf
          @method('PUT')
        <div class="modal-body">
          <div class="row">
            <div class="col-4">
              <h4>Personal Information</h4>
              
            </div>
            <div class="col-4">
              <input type="text" class="form-control" name="acc_id" placeholder="Account No">
              
            </div>
            <div class="col-4">
              <input type="text" class="form-control" name="or_no" placeholder="OR No">
            </div>
          </div>
          <div class="border border-danger"></div>
          <div class="row pt-3">
            <div class="col-lg-4">
              <div class="form-group">
                <small>First Name</small>
                <input type="text" class="form-control" disabled placeholder="First Name" value="{{ $m->first_name }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <small>Middle Name</small>
                <input type="text" class="form-control" disabled placeholder="Middle Name" value="{{ $m->middle_name }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <small>Last Name</small>
                <input type="text" class="form-control" disabled placeholder="Last Name" value="{{ $m->last_name }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <small>Suffix</small>
                <input type="text" class="form-control" disabled placeholder="Suffix" value="{{ $m->suffix }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <small>Gender</small>
                <input type="text" class="form-control" disabled placeholder="Gender" value="{{ $m->gender }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <small>Date of Birth</small>
                <input type="text" class="form-control" disabled placeholder="birthday" value="{{ $m->dob }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <small>Birth Place</small>
                <input type="text" class="form-control" disabled placeholder="Birth Place" value="{{ $m->Bplace }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <small>Address</small>
                <input type="text" class="form-control" disabled placeholder="Address" value="{{ $m->address }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <small>Unit</small>
                <input type="text" class="form-control" disabled placeholder="Unit" value="{{ $m->unit }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <small>Occupation</small>
                <input type="text" class="form-control" disabled placeholder="Occupation" value="{{ $m->Occu }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <small>Education Attained</small>
                <input type="text" class="form-control" disabled placeholder="Educ. Attainment" value="{{ $m->educ }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <small>Monthly Income</small>
                <input type="text" class="form-control" disabled placeholder="Monthly Income" value="{{ $m->MI }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <small>Civil Status</small>
                <input type="text" class="form-control" disabled placeholder="Civil Status" value="{{ $m->civilStatus }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <small>Religion</small>
                <input type="text" class="form-control" disabled placeholder="Religion" value="{{ $m->religion }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <small>Contact No.</small>
                <input type="text" class="form-control" disabled placeholder="Contact NUmber" value="{{ $m->contact_number }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <small>Email</small>
                <input type="text" class="form-control" disabled placeholder="Email Address" value="{{ $m->email }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <small>No. of Dependents</small>
                <input type="text" class="form-control" disabled placeholder="No. of Dependents" value="{{ $m->Dependents }}">
              </div>
            </div>
          </div>

          @if (!empty($m->spouse))
          <div class="pt-3 pb-2">
            <h5 class ="font-weight-bold">Spouse Personal Information</h5>
          </div>
          <div class="border border-danger"></div>
          <div class="row pt-3">
            <div class="col-lg-8">
              <div class="form-group">
              <label for="First Name" class="form-label">Full Name</label>
                <input type="text" class="form-control" disabled placeholder="Full Name" value="{{ $m->spouse->spouseFname }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Age</label>
                <input type="text" class="form-control" disabled placeholder="Age" value="{{ $m->spouse->spouseAge }}">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
              <label for="First Name" class="form-label">Occupation</label>
                <input type="text" class="form-control" disabled placeholder="Occupation" value="{{ $m->spouse->spouseOcc }}">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
              <label for="First Name" class="form-label">Monthly Income</label>
                <input type="text" class="form-control" disabled placeholder="Monthly Income" value="{{ $m->spouse->spouseMI }}">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
              <label for="First Name" class="form-label">Employeer's Name</label>
                <input type="text" class="form-control" disabled placeholder="Employeer's Name" value="{{ $m->spouse->spouseEmplrName }}">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
              <label for="First Name" class="form-label">Contact No.</label>
                <input type="text" class="form-control" disabled placeholder="Contact No." value="{{ $m->spouse->spouseConNum }}">
              </div>
            </div>
          </div>
          @endif


          @foreach ($m->ben as $b)
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
                <input type="text" class="form-control" disabled placeholder="TIN" value="{{ $m->TIN }}">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <small>SSS No.</small>
                <input type="text" class="form-control" disabled placeholder="SSS" value="{{ $m->SSSnum }}">
              </div>
            </div>
          </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
            <input type="hidden" value="2" name="is_approved">
            <button type="submit" class="btn btn-success w-100">Approve</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </form>
     </div>
  </div>
</div>
@endforeach

@endsection