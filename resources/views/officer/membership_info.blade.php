@extends('officer.index')
@section('title', 'Membership Information')
@section('officer_content')

     <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
           <h4 class="modal-title">CASALCO Membership Registry Form</h4>
        </div>
        <!-- Modal body -->
        <form action="{{ route('membership-application.update', $membership->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" value="1" name="is_approved">
        <div class="modal-body">
          <div class="container">
            <div class="row">
              <div class="col-sm">

              </div>
              <div class="col-sm">
                <img src="{{ asset($membership->selfie_pic)}}" width = '200' height = '200' class = "img img-responsive" />
              </div>
              <div class="col-sm">
               
              </div>
            </div>
          </div>
          <h4>Personal Information</h4>

          
          <div class="border border-danger"></div>
          <div class="row pt-3">
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">First Name</label>
                <input name ="Fname" type="text" class="form-control"  placeholder="First Name" value="{{$membership->first_name}}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Middle Name</label>
                <input name ="Mname" type="text" class="form-control"  placeholder="Middle Name" value="{{$membership->middle_name}}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Last Name</label>
                <input name ="Lname" type="text" class="form-control"  placeholder="Last Name" value="{{$membership->last_name}}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Suffix</label>
                <input name ="suffix" type="text" class="form-control"  placeholder="Suffix" value="{{$membership->suffix}}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Gender</label>
                <select name="gender" id="gender" class="form-control">
                  <option value="" disabled selected >{{$membership->gender}}</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Birthday</label>
                <input name ="dob" type="date" class="form-control"  placeholder="birthday" value="{{$membership->dob}}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Birth Place</label>
                <input name ="Bplace" type="text" class="form-control"  placeholder="Birth Place" value="{{$membership->Bplace}}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Address</label>
                <input name ="address" type="text" class="form-control"  placeholder="Address" value="{{$membership->address}}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Unit</label>
              <select name="unit" id="unit" class="form-control">
                <option value="" disabled selected >{{$membership->unit}}</option>
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
                <input name ="occupation" type="text" class="form-control"  placeholder="Occupation" value="{{$membership->Occu}}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Educ. Attainment</label>
                <input name ="educ" type="text" class="form-control"  placeholder="Educ. Attainment" value="{{$membership->educ}}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Monthly Income</label>
                <input name ="MI" type="text" class="form-control"  placeholder="Monthly Income" value="{{$membership->MI}}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Civil Status</label>
              <select name="civilStatus" id="civilStatus" class="form-control">
                <option value="" disabled selected >{{$membership->civilStatus}}</option>
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
                <input name ="religion" type="text" class="form-control"  placeholder="Religion" value="{{$membership->Religion}}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Contact Number</label>
                <input name ="contactNum" type="text" class="form-control"  placeholder="Contact Number" value="{{$membership->contact_number}}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Email Address</label>
                <input name ="email" type="email" class="form-control"  placeholder="Email Address" value="{{$membership->email}}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">No. of Dependents</label>
                <input name ="NumDependents" type="text" class="form-control"  placeholder="No. of Dependents" value="{{$membership->Dependents}}">
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <label for="">Mother's Maiden Name</label>
                <input type="text" name="Mothers_Mname" class="form-control" placeholder="Mother's Maiden Name" value="{{$membership->mothers_maiden_name}}">
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
                <input name ="spouseFname" type="text" class="form-control"  placeholder="Full Name" value="{{ $membership->spouse->spouseFname }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Age</label>
                <input name ="spouseAge" type="text" class="form-control"  placeholder="Age" value="{{ $membership->spouse->spouseAge }}">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
              <label for="First Name" class="form-label">Occupation</label>
                <input name ="spouseOcc" type="text" class="form-control"  placeholder="Occupation" value="{{ $membership->spouse->spouseOcc }}">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
              <label for="First Name" class="form-label">Monthly Income</label>
                <input name ="spouseMI" type="text" class="form-control"  placeholder="Monthly Income" value="{{ $membership->spouse->spouseMI }}">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
              <label for="First Name" class="form-label">Employeer's Name</label>
                <input name ="spouseEmplrName" type="text" class="form-control"  placeholder="Employeer's Name" value="{{ $membership->spouse->spouseEmplrName }}">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
              <label for="First Name" class="form-label">Contact No.</label>
                <input name ="spouseConNum" type="text" class="form-control"  placeholder="Contact No." value="{{ $membership->spouse->spouseConNum }}">
              </div>
            </div>
          </div>
          <div class="col-lg-12">
              <div class="form-group">
                <label for="">Mother's Maiden Name</label>
                <input type="text" name="spouse_mother" class="form-control" placeholder="Mother's Maiden Name" value="{{ $membership->spouse->spouse_mother }}">
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
                <input name ="benName" type="text" class="form-control"  placeholder="Full Name" value="{{ $b->benName }}">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
              <label for="First Name" class="form-label">Relationship</label>
                <input name ="benRelation" type="text" class="form-control"  placeholder="Relationship" value="{{ $b->benRelation }}">
              </div>
            </div>
            <div class="col-lg-8">
              <div class="form-group">
              <label for="First Name" class="form-label">Address</label>
                <input name ="benAddress" type="text" class="form-control"  placeholder="Address" value="{{ $b->benAge }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Age</label>
                <input name ="benAge" type="text" class="form-control"  placeholder="Age" value="{{ $b->benAddress }}">
              </div>
            </div>
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
                <input name ="TIN" type="text" class="form-control"  placeholder="TIN" value="{{ $membership->TIN }}">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
              <label for="First Name" class="form-label">SSS No.</label>
                <input name ="SSSnum" type="text" class="form-control"  placeholder="SSS" value="{{ $membership->SSSnum }}">
              </div>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-sm">
              <img src="{{ asset($membership->empIDpic)}}" width = '200' height = '150' class = "img img-responsive" />
            </div>
            <div class="col-sm">
             
            </div>
            <div class="col-sm">
             
            </div>
          </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">


           
            <button type="submit"  id="form-submit" class="btn btn-success w-100 mb-2">Pre-Approved</button>
           
            {{-- <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> --}}
          </form>
        </div>
     </div>







@endsection
