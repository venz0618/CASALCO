@extends('officer.index')
@section('title', 'Loan Application List')
@section('officer_content')




<div class="col-md-12">
  <div class="white_shd full margin_bottom_30">
      <div class="table_section padding_infor_info">
          <div class="table-responsive-sm">
<table class="table table-bordered table-striped table-sm" id="example5">
	<thead>
    <tr>
      <th>First Name</th>
      <th>Account No</th>
      {{-- <th>Loan Category</th> --}}
      {{-- <th>Image</th> --}}
      <th>Loan Type</th>
      <th>Date Applied</th>
      <th>Status</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
                    <!--EXPRESS LOAN-->
                  @foreach ($loan as $loans)
                  @foreach ( $loans->express as $l )
                      <tr>
                      <td>{{$l->name_of_member}}</td>
                      <td>{{$l->account_no}}</td>
                      <td>{{$l->loan_type}}</td>
                      <td>{{$l->created_at}}</td>
                    
                      <td> @if($loans->is_approved == 0)
                        <span class="badge badge-secondary">Pending</span>
                      @endif
                    </td>
                      <td>
                        <a href="{{ route('loan_application.show', $loans->id) }}"
                          <button class="btn btn-success">Details</button>
                        </td> 
                    </tr>
                  @endforeach
                  @endforeach

                  <!--LAD LOAN-->
                 

                    
  </tbody>
</table>

</div>
</div>
</div>
</div>

<!--EXPRESS LOAN-->
@foreach ($loan as $loans)
@foreach ( $loans->express as $l )
<div class="modal fade" id="myModal{{ $l->id }}">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
     <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
           <h4 class="modal-title">CASALCO Loan Application Form</h4>
        </div>
        <!-- Modal body -->
        <form action="{{ route('loan.update', $loans->id) }}" method="POST">
            @csrf
            
            @method('PUT')
            <input type="hidden" value="1" name="is_approved">
        <div class="modal-body">
          <h4>Express Loan</h4>
         
          <input  type="hidden" value="1" name="loanApp_type">
         
          <div class="border border-danger"></div>
          <div class="row pt-3">
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Name" value="{{$l->name_of_member}}" >
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Account ID</label>
                <input type="text" class="form-control" name="acc_id" placeholder="Account ID" value="{{$l->account_no}}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Present Address</label>
                <input type="text" class="form-control" name="present_address" placeholder="Present Address" value="{{$l->present_address}}" >
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Permanent Address</label>
                <input type="text" class="form-control" name="permanent_address" placeholder="Permanent Address" value="{{$l->permanent_address}}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Loan Type</label>
              <select name="loan_type" id="loan_type" class ="form-control">
                <option value="" disabled selected >{{$l->loan_type}}</option>
                <option value="Grocery Loan">Grocery Loan</option>
                <option value="PettyCash">PettyCash</option>
                <option value="FastCash">FastCash</option>
                <option value="InstaCash">InstaCash</option>
                <option value="Health Insurace">Health Insurace</option>
                <option value="Birthday Loan">Birthday Loan</option>
                
              </select>
              </div>
           
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Employer</label>
                <input type="text" class="form-control" name="emp" placeholder="Employee" value="{{$l->employer}}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Employee Address</label>
                <input type="text" class="form-control" name="emp_address" placeholder="Employee Address" value="{{$l->employer_address}}" >
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" placeholder="Email" value="{{$l->email_address}}" >
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Amount</label>
                <input type="text" class="form-control" name="amount" placeholder="Amount" value="{{$l->amount_applied}}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Mode of Payment</label>
                <input type="text" class="form-control" name="mode_payment" placeholder="Mode of Payment" value="{{$l->mode_of_payment}}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Term Applied</label>
                <input type="text" class="form-control" name="term_applied" placeholder="Term Applied" value="{{$l->term_applied}}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Phone No.</label>
                <input type="text" class="form-control" name="phone_no" placeholder="Phone No." value="{{$l->cellphone_no}}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">TIN</label>
                <input type="text" class="form-control" name="tin" placeholder="TIN" value="{{$l->tin_no}}" >
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Fb Account</label>
                <input type="text" class="form-control" name="fb_acc" placeholder="Fb Account" value="{{$l->facebook_account}}">
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-sm">
             
              <a href="{{ asset($l->scanned_signature)}}"><img class="img-responsive" src="{{ asset($l->scanned_signature)}}" style="height: 100px; width: 175px;"></a>
            </div>
            <div class="col-sm">
             
            </div>
            <div class="col-sm">
             
            </div>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          
           
           
            <button type="submit" class="btn btn-success w-100 mb-4 mt-4">Pre-Approved</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </form>
        </div>
     </div>
  </div>
</div>
@endforeach
@endforeach

<!--LAD LOAN-->

{{-- @foreach($LAD as $lad)
<div class="modal fade" id="myModal01{{ $lad->id }}">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
     <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
           <h4 class="modal-title">CASALCO Loan Application Form</h4>
        </div>
        <!-- Modal body -->
        <form action="{{ route('pre-approved.update', $lad->id) }}" method="POST">
            @csrf
            
            @method('PUT')
            <input type="hidden" value="1" name="is_approved">
        <div class="modal-body">
          <h4>LAD Loan</h4>
         
          <input  type="hidden" value="1" name="loanApp_type">
         
          <div class="border border-danger"></div>
          <div class="row pt-3">
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Name" value="{{$lad->name_of_member}}" >
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Account ID</label>
                <input type="text" class="form-control" name="acc_id" placeholder="Account ID" value="{{$lad->account_no}}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Present Address</label>
                <input type="text" class="form-control" name="present_address" placeholder="Present Address" value="{{$lad->present_address}}" >
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Permanent Address</label>
                <input type="text" class="form-control" name="permanent_address" placeholder="Permanent Address" value="{{$lad->permanent_address}}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Loan Type</label>
              <select name="loan_type" id="loan_type" class ="form-control">
                <option value="" disabled selected >{{$lad->loan_type}}</option> 
                
              </select>
              </div>
           
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Employer</label>
                <input type="text" class="form-control" name="emp" placeholder="Employee" value="{{$lad->employer}}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Employee Address</label>
                <input type="text" class="form-control" name="emp_address" placeholder="Employee Address" value="{{$lad->employer_address}}" >
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" placeholder="Email" value="{{$lad->email_address}}" >
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Amount</label>
                <input type="text" class="form-control" name="amount" placeholder="Amount" value="{{$lad->amount_applied}}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Mode of Payment</label>
                <input type="text" class="form-control" name="mode_payment" placeholder="Mode of Payment" value="{{$lad->mode_of_payment}}" >
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Term Applied</label>
                <input type="text" class="form-control" name="term_applied" placeholder="Term Applied" value="{{$lad->term_applied}}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Phone No.</label>
                <input type="text" class="form-control" name="phone_no" placeholder="Phone No." value="{{$lad->cellphone_no}}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">TIN</label>
                <input type="text" class="form-control" name="tin" placeholder="TIN" value="{{$lad->tin_no}}" >
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Fb Account</label>
                <input type="text" class="form-control" name="fb_acc" placeholder="Fb Account" value="{{$lad->facebook_account}}">
              </div>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-sm">
             
              <a href="{{ asset($lad->scanned_signature)}}"><img class="img-responsive" src="{{ asset($lad->scanned_signature)}}" style="height: 100px; width: 175px;"></a>
            </div>
            <div class="col-sm">
             
            </div>
            <div class="col-sm">
             
            </div>
          </div>
        </div>

        
        <!-- Modal footer -->
        <div class="modal-footer">
          
           
           
            <button type="submit" class="btn btn-success w-100 mb-4 mt-4">Pre-Approved</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </form>
        </div>
     </div>
  </div>
</div>
@endforeach --}}


@endsection