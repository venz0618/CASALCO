<nav id="sidebar">
  <div class="sidebar_blog_1">
    <div class="sidebar-header">
      <div class="logo_section">
        <a href="/officer/officer/dashboard"><img class="logo_icon img-responsive" src="../pluto/images/logo/logo_icon.png" alt="#" /></a>
      </div>
    </div>
    <div class="sidebar_user_info">
      <div class="icon_setting"></div>
      <div class="user_profle_side">
        <div class="user_img"><img class="img-responsive" src="../pluto/images/layout_img/user1.png" alt="#" /></div>
        <div class="user_info">
        <h6>{{ Auth::user()->username }}</h6>
        <p><span class="online_animation"></span> Online</p>
        </div>
      </div>
    </div>
  </div>
  <div class="sidebar_blog_2">
    <ul class="list-unstyled components">
      <li class="">
        <a href="/officer/dashboard"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
      </li>
      <li>
        <a href="/product-loans">
            <i class="fa fa-money green_color"></i><span>Product Loans<span>
        </a>
      </li>
      <li>
        <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-folder-open orange_color"></i> <span>Applications</span></a>
        <ul class="collapse list-unstyled" id="element">
          <li><a href="/officer/membership-application">> <span>Membership Application</span></a></li>
          <li><a href="/officer/loan">> <span>Loan</span></a></li>
        </ul>
      </li>

      <li>
        <a href="#element1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-list-alt purple_color"></i> <span>Reports</span></a>
        <ul class="collapse list-unstyled" id="element1">
          <li><a href="/officer/pre-approved-membership">> <span>Pre-approve Membership </span></a></li>
          <li><a href="/officer/pre-approved-loans">> <span>Pre-approve Loan</span></a></li>
        </ul>
      </li>
      <!-- <li><a href="/officer/member"><i class="fa fa-users red_color"></i> <span>Members</span></a></li> -->
      <!-- <li><a href="/officer/approved-loans"><i class="fa fa-clipboard blue1_color"></i> <span>Reports</span></a></li> -->
      {{-- <li>
        <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clipboard blue2_color"></i> <span>Reports</span></a>
        <ul class="collapse list-unstyled" id="apps">
          <li><a href="email.html">> <span>Approved Loans</span></a></li>
          <li><a href="calendar.html">> <span>Calendar</span></a></li>
          <li><a href="media_gallery.html">> <span>Media Gallery</span></a></li>
        </ul>
      </li>
      <li>
        <a href="contact.html">
        <i class="fa fa-paper-plane red_color"></i> <span>Contact</span></a>
      </li>
      <li class="active">
        <a href="#additional_page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i> <span>Additional Pages</span></a>
        <ul class="collapse list-unstyled" id="additional_page">
          <li>
            <a href="profile.html">> <span>Profile</span></a>
          </li>
          <li>
            <a href="project.html">> <span>Projects</span></a>
          </li>
          <li>
            <a href="login.html">> <span>Login</span></a>
          </li>
          <li>
            <a href="404_error.html">> <span>404 Error</span></a>
          </li>
        </ul>
      </li>
      <li><a href="map.html"><i class="fa fa-map purple_color2"></i> <span>Map</span></a></li>
      <li><a href="charts.html"><i class="fa fa-bar-chart-o green_color"></i> <span>Charts</span></a></li>
      <li><a href="settings.html"><i class="fa fa-cog yellow_color"></i> <span>Settings</span></a></li> --}}
    </ul>
  </div>
 </nav>
