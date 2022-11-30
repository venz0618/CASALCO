@extends('officer.index')
@section('title', 'Loan Application Details')
@section('officer_content')



          <!-- Modal Header -->
          <div class="modal-header">
             <h4 class="modal-title">CASALCO Loan Application Form</h4>
          </div>
          <!-- Modal body -->
          <form action="{{ route('loan.update', $loan->id) }}" method="POST">
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
                  <input type="text" class="form-control" name="name" placeholder="Name" value="{{$loan->name_of_member}}" >
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                <label for="First Name" class="form-label">Account ID</label>
                  <input type="text" class="form-control" name="acc_id" placeholder="Account ID" value="{{$loan->account_no}}">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                <label for="First Name" class="form-label">Present Address</label>
                  <input type="text" class="form-control" name="present_address" placeholder="Present Address" value="{{$loan->present_address}}" >
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                <label for="First Name" class="form-label">Permanent Address</label>
                  <input type="text" class="form-control" name="permanent_address" placeholder="Permanent Address" value="{{$loan->permanent_address}}">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                <label for="First Name" class="form-label">Loan Type</label>
                <select name="loan_type" id="loan_type" class ="form-control">
                  <option value="" disabled selected >{{$loan->loan_type}}</option>
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
                  <input type="text" class="form-control" name="emp" placeholder="Employee" value="{{$loan->employer}}">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                <label for="First Name" class="form-label">Employee Address</label>
                  <input type="text" class="form-control" name="emp_address" placeholder="Employee Address" value="{{$loan->employer_address}}" >
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                <label for="First Name" class="form-label">Email</label>
                  <input type="text" class="form-control" name="email" placeholder="Email" value="{{$loan->email_address}}" >
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                <label for="First Name" class="form-label">Amount</label>
                  <input type="text" class="form-control" name="amount" placeholder="Amount" value="{{$loan->amount_applied}}">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                <label for="First Name" class="form-label">Mode of Payment</label>
                  <input type="text" class="form-control" name="mode_payment" placeholder="Mode of Payment" value ="{{$loan->mode_of_payment}}">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                <label for="First Name" class="form-label">Term Applied</label>
                  <input type="text" class="form-control" name="term_applied" placeholder="Term Applied" value="{{$loan->term_applied}}">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                <label for="First Name" class="form-label">Phone No.</label>
                  <input type="text" class="form-control" name="phone_no" placeholder="Phone No." value="{{$loan->cellphone_no}}">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                <label for="First Name" class="form-label">TIN</label>
                  <input type="text" class="form-control" name="tin" placeholder="TIN" value="{{$loan->tin_no}}" >
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                <label for="First Name" class="form-label">Fb Account</label>
                  <input type="text" class="form-control" name="fb_acc" placeholder="Fb Account" value="{{$loan->facebook_account}}">
                </div>
              </div>
            </div>
          </div>
  
          
          <!-- Modal footer -->
          <div class="modal-footer">
            
             
             
              <button type="submit" class="btn btn-success">Pre-Approved</button>
            </form>

              <form action="{{ route('loan.update', $loan->id) }}" method="POST">
                @csrf
              
                @method('PUT')
                <input type="hidden" name="is_approved" value="3">
              <button type="submit" class="btn btn-warning ">Disapproved</button>
                </form>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
         
          </div>
       </div>
    </div>
  </div>
  

  @endsection