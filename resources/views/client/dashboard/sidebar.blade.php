<nav id="sidebar">
  <div class="sidebar_blog_1">
    <div class="sidebar-header">
      <div class="logo_section">
        <a href="/admin/dashboard"><img class="logo_icon img-responsive" src="../pluto/images/logo/logo_icon.png" alt="#" /></a>
      </div>
    </div>
    <div class="sidebar_user_info">
      <div class="icon_setting"></div>
      <div class="user_profle_side">
        <div class="user_img"><img class="img-responsive" src="../pluto/images/layout_img/user1.png" alt="#" /></div>
        <div class="user_info">
        <h6>{{ Auth::user()->username }}  </h6>
        <p><span class="online_animation"></span> Online</p>
        </div>
      </div>
    </div>
  </div>
  <div class="sidebar_blog_2">
    <ul class="list-unstyled components">
        <li><a href="/"><i class="fa fa-home red_color"></i> <span>Home</span></a></li>
      <li class="active"><a href="/client/dashboard"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a></li>
	    <li><a href="/client/active-loan"><i class="fa fa-check-circle green_color"></i> <span>Active Loans</span></a>
        {{-- <ul class="collapse list-unstyled" id="element1">
          <li><a class="fa fa-money green_color" href="/officer/pre-approved-membership">   <span> LAD </span></a></li>
          <li><a class="fa fa-money green_color" href="/client/active-loan">   <span>Express Loan</span></a></li>
          <li><a class="fa fa-money green_color" href="/officer/pre-approved-loans">   <span>Regular Loan</span></a></li>
          <li><a class="fa fa-money green_color" href="/officer/pre-approved-loans">   <span>Special Loan</span></a></li>
        </ul> --}}
      </li>
      <li><a href="/client/loan-history"><i class="fa fa-history blue_color"></i> <span>Loan History</span></a></li>
      <!-- <li>
        <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-folder-open orange_color"></i> <span>Applications</span></a>
        <ul class="collapse list-unstyled" id="element">
          <li><a href="/admin/membership">> <span>Membership</span></a></li>
          <li><a href="/admin/loan">> <span>Loan</span></a></li>
        </ul>
      </li>

      <li><a href="/admin/accounts"><i class="fa fa-users red_color"></i> <span>Accounts</span></a></li>
      <li>
        <a href="#element1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clipboard blue1_color"></i> <span>Reports</span></a>
        <ul class="collapse list-unstyled" id="element1">
          <li><a href="/admin/approved-membership">> <span>Approved Memberships</span></a></li>
          <li><a href="/admin/approved-loans">> <span>Approved Loans</span></a></li>
        </ul>
      </li> -->
    </ul>
  </div>
 </nav>
