@extends('admin.index')
@section('title', 'Dashboard')
@section('admin_content')

  <div class="row column1">
    <div class="col-md-6 col-lg-4">
      <a href="/admin/member-list">
        <div class="full counter_section margin_bottom_30">
          <div class="couter_icon">
            <div> 
            <i class="fa fa-user yellow_color"></i>
            </div>
          </div>
          <div class="counter_no">
            <div>
            <p class="total_no">{{ $members }}</p>
            <p class="head_couter">Total Number <br> of Members</p>
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-lg-4">
      <a href="/admin/membership">
        <div class="full counter_section margin_bottom_30">
          <div class="couter_icon">
            <div> 
            <i class="fa fa-folder blue1_color"></i>
            </div>
          </div>
          <div class="counter_no">
            <div>
            <p class="total_no">{{ count($membership) }}</p>
            <p class="head_couter">Pre-approved Membership Application</p>
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-lg-4">
      <a href="/admin/loan_app">
        <div class="full counter_section margin_bottom_30">
          <div class="couter_icon">
            <div> 
            <i class="fa fa-money green_color"></i>
            </div>
          </div>
          <div class="counter_no">
            <div>
            <p class="total_no">{{ $loan }}</p>
            <p class="head_couter">Pre-approved <br> Loan Application</p>
            </div>
          </div>
        </div>
      </a>
    </div>
   </div>

@endsection