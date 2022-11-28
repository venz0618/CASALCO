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
        <li><a href="/client/dashboard"><i class="fa fa-dashboard orange_color"></i> <span>Dashboard</span></a></li>
        <li><a href=""><i class="fa fa-money yellow_color"></i> <span>Loan Application</span></a></li>
	    <li><a href="/client/active-loan"><i class="fa fa-check-circle green_color"></i> <span>Active Loans</span></a></li>
      <li><a href="/client/loan-history"><i class="fa fa-history blue1_color"></i> <span>Loan History</span></a></li>
    </ul>
  </div>
 </nav>
