<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>
    @if (Request()->is('/'))
      Capitol Savings and Loan Cooperative
    @else
      @yield('title') | Capitol Savings and Loan Cooperative
    @endif
  </title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta content="Metronic Shop UI description" name="description">
  <meta content="Metronic Shop UI keywords" name="keywords">
  <meta content="keenthemes" name="author">

  <meta property="og:site_name" content="-CUSTOMER VALUE-">
  <meta property="og:title" content="-CUSTOMER VALUE-">
  <meta property="og:description" content="-CUSTOMER VALUE-">
  <meta property="og:type" content="website">
  <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
  <meta property="og:url" content="-CUSTOMER VALUE-">

  <link rel="shortcut icon" href="{{ asset('sys_img/favicon.ico') }}">

  @include('client.styles.font')
  @include('client.styles.global')
  @include('client.styles.page-level-plugin')
  @include('client.styles.theme')


</head>
<body class="corporate">

  @if(Request()->is('membership-application-form') || Request()->is('express-loan-application-form'))
    @include('client.layout.header')
  @else
    @include('client.layout.topbar')
    @include('client.layout.header')
  @endif

  @if(Request::is('/'))
    @yield('client_content')
  @else
    <div class="main">
      <div class="container">
        @yield('client_content')
      </div>
    </div>
  @endif

  @include('client.layout.footer')


  @include('client.scripts.core-plugins')
  @include('client.scripts.page-level-js')
  @include('sweetalert::alert')


  <script>
    var state= false;
    function toggle(){
      if(state){
        document.getElementById('password').
        setAttribute("type","password");
        document.getElementById("eye").style.color='#7a797e';
        state = false;
      }
      else{
        document.getElementById('password').
        setAttribute("type","text");
        document.getElementById("eye").style.color='#5887ef';
        state = true;
      }
    } 
  </script>

</body>
</html>
