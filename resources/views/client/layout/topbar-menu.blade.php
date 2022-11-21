<!-- BEGIN TOP BAR MENU -->
<div class="col-md-6 col-sm-6 additional-nav">
  <ul class="list-unstyled list-inline pull-right">
    @guest
      <li><a href="login">Log In</a></li>
      <li><a href="register">Registration</a></li>
    @endguest

    @auth
      <li><a href="/client/dashboard">{{ Auth::user()->username }}</a></li>

      <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
      </form></li>
    @endauth


  </ul>
</div>
<!-- END TOP BAR MENU -->
