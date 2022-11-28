 <!-- BEGIN HEADER -->
 <div class="header">
  <div class="container">
    <a class="site-logo" href="/">
      <img src="../klassy/images/CasalcoLogo-7.png" width="120">
    </a>

    <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>
    @if(!Request()->is('membership-application-form') && !Request()->is('express-loan-application-form') && !Request()->is('loan-application-form'))
      @include('client.layout.navigation')
    @endif
  </div>
</div>
<!-- Header END -->
