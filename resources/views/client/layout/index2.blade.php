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

  @if(Request()->is('membership-application-form') || Request()->is('express-loan-application-form') || Request()->is('loan-application-form'))
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

                var video = document.getElementById("video");

                var timeStarted = -1;
                var timePlayed = 0;
                var duration = 0;
                // If video metadata is laoded get duration
                if(video.readyState > 0)
                  getDuration.call(video);
                //If metadata not loaded, use event to get it
                else
                {
                  video.addEventListener('loadedmetadata', getDuration);
                }
                // remember time user started the video
                function videoStartedPlaying() {
                  timeStarted = new Date().getTime()/1000;
                }
                function videoStoppedPlaying(event) {
                  // Start time less then zero means stop event was fired vidout start event
                  if(timeStarted>0) {
                    var playedFor = new Date().getTime()/1000 - timeStarted;
                    timeStarted = -1;
                    // add the new number of seconds played
                    timePlayed+=playedFor;
                  }
                  document.getElementById("played").innerHTML = Math.round(timePlayed)+"";
                  // Count as complete only if end of video was reached
                  if(timePlayed>=duration && event.type=="ended") {
                    document.getElementById("status").className="complete";
                  }
                }

                function getDuration() {
                  duration = video.duration;
                  document.getElementById("duration").appendChild(new Text(Math.round(duration)+""));
                  console.log("Duration: ", duration);
                }

                video.addEventListener("play", videoStartedPlaying);
                video.addEventListener("playing", videoStartedPlaying);

                video.addEventListener("ended", videoStoppedPlaying);
                video.addEventListener("pause", videoStoppedPlaying);

                
    </script>
    <style>
    #status span.status {
      display: none;
      font-weight: bold;
    }
    span.status.complete {
      color: green;
    }
    span.status.incomplete {
      color: red;
    }
    #status.complete span.status.complete {
      display: inline;
    }
    #status.incomplete span.status.incomplete {
      display: inline;
}
    </style>

  

</body>
</html>
