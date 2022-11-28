@extends('client.dashboard.index')
@section('title', 'Member Dashboard')
@section('client_dashboard_content')

<div class="row column1">
  <div class="col-md-6 col-lg-4">
    <a href="/client/active-loan">
      <div class="full counter_section margin_bottom_30">
        <div class="couter_icon">
          <div>
          <i class="fa fa-check-circle green_color"></i>
          </div>
        </div>
        <div class="counter_no">
          <div>
          <p class="total_no">0</p>
          <p class="head_couter">Active Loans</p>
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
          <i class="fa fa-history blue1_color"></i>
          </div>
        </div>
        <div class="counter_no">
          <div>
          <p class="total_no">0</p>
          <p class="head_couter">Loan History</p>
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
            <i class="fa fa-money yellow_color"></i>
            </div>
          </div>
          <div class="counter_no">
            <div>
            <p class="total_no">0</p>
            <p class="head_couter">Loan Application</p>
            </div>
          </div>
        </div>
      </a>
    </div>
</div>

@endsection