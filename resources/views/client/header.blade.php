<header class="header-area header-sticky">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav class="main-nav">
          <!-- ***** Logo Start ***** -->
          <a href="/" class="logo">
            <img src="../klassy/images/CasalcoLogo-7.png" align="klassy cafe html template">
          </a>
          <!-- ***** Logo End ***** -->
          <!-- ***** Menu Start ***** -->
          @if(!Request::is("login") && !Request::is("register") && !Request::is("membership-application"))
          <ul class="nav">
            <li class="scroll-to-section"><a href="/" class="{{ (request()->is('/')) ? 'active' : '' }}">Home</a></li>
            <li class="scroll-to-section"><a href="/membership-information" class="{{ (request()->is('membership-information')) ? 'active' : '' }}">Be a Member</a></li>
            <li>
              <a href="/loans" class="{{ (request()->is('loans')) ? 'active' : '' }}">Loans</a>
              {{-- <ul>
                <li><a href="/regular-loans" class="{{ (request()->is('regular-loans')) ? 'active' : '' }}">Regular Loans</a></li>
                <li><a href="/express-loans" class="{{ (request()->is('express-loans')) ? 'active' : '' }}">Express Loans</a></li>
                <li><a href="/special-loans" class="{{ (request()->is('special-loans')) ? 'active' : '' }}">Special Loans</a></li>
              </ul> --}}
            </li>

            <li class="scroll-to-section"><a href="/about-us" class="{{ (request()->is('about-us')) ? 'active' : '' }}">About Us</a></li>

            <li class="scroll-to-section"><a href="/contact-us" class="{{ (request()->is('contact-us')) ? 'active' : '' }}">Contact Us</a></li> 
                

            <li class="submenu">
              @guest
                <a href="javascript:;">My Account</a>
                <ul>
                  <li><a href="/register">Register</a></li>
                  <li><a href="/login">Login</a></li>
                </ul>
              @endguest

              @auth
                <a href="javascript:;">{{ Auth::user()->username }}</a>
                <ul>

                  <li><a class="dropdown-item" href="/loan-history" ">Loan History</a></li>

                  <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                  
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
                </ul>
              @endauth
            </li>
          </ul>
          @endif
          <a class='menu-trigger'>
            <span>Menu</span>
          </a>
          <!-- ***** Menu End ***** -->
        </nav>
      </div>
    </div>
  </div>
</header>
