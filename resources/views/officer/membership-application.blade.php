@extends('officer.index')
@section('title', 'Membership Application List')
@section('officer_content')

<div class="col-md-12">
  <div class="white_shd full margin_bottom_30">
      <div class="table_section padding_infor_info">
          <div class="table-responsive-sm">

              <table class="table table-bordered table-striped table-sm" id="example5">
                <thead>
                  <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Unit</th>
                    {{-- <th>Image</th> --}}
                    <th>Membership Type</th>
                    <th>Date Applied</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($membership as $m)
                      <tr>
                      <td>{{ $m->first_name }}</td>
                      <td>{{ $m->middle_name }}</td>
                      <td>{{ $m->unit }}</td>
                      {{-- <td>
                        <img src="{{ asset($m->selfiepic) }}" width = '50' height = '50' class = "img img-responsive" />
                      </td> --}}
                      <td>
                        @if ($m->membership_type == 0)
                          <span class="badge badge-info">Online</span>
                        @else
                          <span class="badge badge-info">Walk-in</span>
                        @endif
                      </td>
                      <td>{{ date('m-d-Y h:i a', strtotime($m->created_at)) }}</td>
                      <td>
                          @if($m->is_approved == 0)
                            <span class="badge badge-secondary">Pending</span>
                          @endif
                      </td>

                      <td>
                        <a href="{{url('officer/membership_info', $m->id)}}">
                          <button class="btn btn-success">Details</button>
                        </a>
                      </td>
                      </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
      </div>
      </div>
@foreach($membership as $m)
<div class="modal fade" id="myModal{{ $m->id }}">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
     <div class="modal-content">
        <!-- Modal Header -->

        <div class=" text-center border">

           <h4 class="modal-title">CASALCO Registry Form</h4>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
            <div class="row">
              <div class="col-sm">

              </div>
              <div class="col-sm">

              </div>
              <div class="col-sm">
                <img src="{{ asset($m->selfie_pic)}}" width = '100' height = '100' class = "img img-responsive" />
              </div>
            </div>
          </div>
          <h4>Personal Information</h4>

          <div class="border border-danger"></div>
          <div class="row pt-3">
            <div class="col-lg-4">

              <div class="form-group">
              <label for="First Name" class="form-label">First Name</label>
                <input type="text" class="form-control" disabled placeholder="First Name" value="{{ $m->first_name }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Middle Name</label>
                <input type="text" class="form-control" disabled placeholder="Middle Name" value="{{ $m->middle_name }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Last Name</label>
                <input type="text" class="form-control" disabled placeholder="Last Name" value="{{ $m->last_name }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Suffix</label>
                <input type="text" class="form-control" disabled placeholder="Suffix" value="{{ $m->suffix }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Gender</label>
                <input type="text" class="form-control" disabled placeholder="Gender" value="{{ $m->gender }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Birthday</label>
                <input type="text" class="form-control" disabled placeholder="birthday" value="{{ $m->dob }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Birth Place</label>
                <input type="text" class="form-control" disabled placeholder="Birth Place" value="{{ $m->Bplace }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Address</label>
                <input type="text" class="form-control" disabled placeholder="Address" value="{{ $m->address }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Unit</label>
                <input type="text" class="form-control" disabled placeholder="Unit" value="{{ $m->unit }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Occupation</label>
                <input type="text" class="form-control" disabled placeholder="Occupation" value="{{ $m->Occu }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Educ. Attainment</label>
                <input type="text" class="form-control" disabled placeholder="Educ. Attainment" value="{{ $m->educ }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Monthly Income</label>
                <input type="text" class="form-control" disabled placeholder="Monthly Income" value="{{ $m->MI }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Civil Status</label>
                <input type="text" class="form-control" disabled placeholder="Civil Status" value="{{ $m->civilStatus }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Religion</label>
                <input type="text" class="form-control" disabled placeholder="Religion" value="{{ $m->religion }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Contact Number</label>
                <input type="text" class="form-control" disabled placeholder="Contact Number" value="{{ $m->contact_number }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Email Address</label>
              <label for="First Name" class="form-label">Gender</label>
                <input type="text" class="form-control" disabled placeholder="Email Address" value="{{ $m->email }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">No. of Dependents</label>
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
              <label for="First Name" class="form-label">TIN</label>
                <input type="text" class="form-control" disabled placeholder="TIN" value="{{ $m->TIN }}">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
              <label for="First Name" class="form-label">SSS No.</label>
                <input type="text" class="form-control" disabled placeholder="SSS" value="{{ $m->SSSnum }}">
              </div>
            </div>
          </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <form action="{{ route('membership-application.update', $m->id) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" value="1" name="is_approved">
            <button type="submit" class="btn btn-success w-100">Pre-Approve</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </form>
        </div>
     </div>
  </div>
</div>
@endforeach

<div class="modal fade" id="myModal01">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
     <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
           <h4 class="modal-title">CASALCO Membership Application Form</h4>
        </div>
        <!-- Modal body -->
        <form action="{{ route('membership-application.store') }}" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          <h4>Personal Information</h4>

          @csrf
          <div class="border border-danger"></div>
          <div class="row pt-3">
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">First Name</label>
                <input name ="Fname" type="text" class="form-control"  placeholder="First Name" value="">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Middle Name</label>
                <input name ="Mname" type="text" class="form-control"  placeholder="Middle Name" value="">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Last Name</label>
                <input name ="Lname" type="text" class="form-control"  placeholder="Last Name" value="">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Suffix</label>
                <input name ="suffix" type="text" class="form-control"  placeholder="Suffix" value="">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Gender</label>
                <select name="gender" id="gender" class="form-control">
                  <option value="" disabled selected >Gender</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Birthday</label>
                <input name ="dob" type="date" class="form-control"  placeholder="birthday" value="">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Birth Place</label>
                <input name ="Bplace" type="text" class="form-control"  placeholder="Birth Place" value="">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Address</label>
                <input name ="address" type="text" class="form-control"  placeholder="Address" value="">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Unit</label>
              <select name="unit" id="unit" class="form-control">
                <option value="" disabled selected >Unit</option>
                <option value="CU(main)">CU(main)</option>
                <option value="CUMC">CUMC</option>
                <option value="CUBE">CUBE</option>
                <option value="Support Zebra">Support Zebra</option>
                <option value="Associate">Associate</option>
              </select>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Occupation</label>
                <input name ="occupation" type="text" class="form-control"  placeholder="Occupation" value="">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Educ. Attainment</label>
                <input name ="educ" type="text" class="form-control"  placeholder="Educ. Attainment" value="">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Monthly Income</label>
                <input name ="MI" type="text" class="form-control"  placeholder="Monthly Income" value="">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Civil Status</label>
              <select name="civilStatus" id="civilStatus" class="form-control">
                <option value="" disabled selected >Civil Status</option>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Divorce">Divorced</option>
                <option value="Siparated">Siparated</option>
                <option value="Widowed">Widowed</option>
              </select>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Religion</label>
                <input name ="religion" type="text" class="form-control"  placeholder="Religion" value="">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Contact Number</label>
                <input name ="contactNum" type="text" class="form-control"  placeholder="Contact Number" value="">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Email Address</label>
              <label for="First Name" class="form-label">Gender</label>
                <input name ="email" type="email" class="form-control"  placeholder="Email Address" value="">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">No. of Dependents</label>
                <input name ="NumDependents" type="text" class="form-control"  placeholder="No. of Dependents" value="">
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <label for="">Mother's Maiden Name</label>
                <input type="text" name="Mothers_Mname" class="form-control" placeholder="Mother's Maiden Name">
              </div>
            </div>
          </div>

          <div class="pt-3 pb-2">
            <h5 class ="font-weight-bold">Spouse Personal Information</h5>
          </div>
          <div class="border border-danger"></div>
          <div class="row pt-3">
            <div class="col-lg-8">
              <div class="form-group">
              <label for="First Name" class="form-label">Full Name</label>
                <input name ="spouseFname" type="text" class="form-control"  placeholder="Full Name" value="">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Age</label>
                <input name ="spouseAge" type="text" class="form-control"  placeholder="Age" value="">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
              <label for="First Name" class="form-label">Occupation</label>
                <input name ="spouseOcc" type="text" class="form-control"  placeholder="Occupation" value="">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
              <label for="First Name" class="form-label">Monthly Income</label>
                <input name ="spouseMI" type="text" class="form-control"  placeholder="Monthly Income" value="">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
              <label for="First Name" class="form-label">Employeer's Name</label>
                <input name ="spouseEmplrName" type="text" class="form-control"  placeholder="Employeer's Name" value="">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
              <label for="First Name" class="form-label">Contact No.</label>
                <input name ="spouseConNum" type="text" class="form-control"  placeholder="Contact No." value="">
              </div>
            </div>
          </div>
          <div class="col-lg-12">
              <div class="form-group">
                <label for="">Mother's Maiden Name</label>
                <input type="text" name="spouse_mother" class="form-control" placeholder="Mother's Maiden Name">
              </div>
            </div>


          <div class="pt-3 pb-2">
            <h5 class ="font-weight-bold">Nomination of Benificiary</h5>
          </div>
          <div class="border border-danger"></div>
          <div class="row pt-3">
            <div class="col-lg-6">
              <div class="form-group">
              <label for="First Name" class="form-label">Full Name</label>
                <input name ="benName" type="text" class="form-control"  placeholder="Full Name" value="">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
              <label for="First Name" class="form-label">Relationship</label>
                <input name ="benRelation" type="text" class="form-control"  placeholder="Relationship" value="">
              </div>
            </div>
            <div class="col-lg-8">
              <div class="form-group">
              <label for="First Name" class="form-label">Address</label>
                <input name ="benAddress" type="text" class="form-control"  placeholder="Address" value="">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Age</label>
                <input name ="benAge" type="text" class="form-control"  placeholder="Age" value="">
              </div>
            </div>
          </div>
          <div class="pt-3 pb-2">
            <h5 class ="font-weight-bold">Government ID's</h5>
          </div>
          <div class="border border-danger"></div>
          <div class="row pt-3">
            <div class="col-lg-6">
              <div class="form-group">
              <label for="First Name" class="form-label">TIN</label>
                <input name ="TIN" type="text" class="form-control"  placeholder="TIN" value="">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
              <label for="First Name" class="form-label">SSS No.</label>
                <input name ="SSSnum" type="text" class="form-control"  placeholder="SSS" value="">
              </div>
            </div>
          </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">


            <input  type="hidden" value="1" name="membership_type">
            <button type="submit"  id="form-submit" class="btn btn-success w-100 mb-2">Validate</button>
            <button type="button"  class="btn btn-success w-100 mb-2" data-dismiss="modal">Close</button>
            {{-- <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> --}}
          </form>
        </div>
     </div>
  </div>
</div>





@endsection
