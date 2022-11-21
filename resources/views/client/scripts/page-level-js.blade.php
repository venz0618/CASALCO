  <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
  <script src="{{ asset('metronic/plugins/fancybox/source/jquery.fancybox.pack.js') }}" type="text/javascript"></script><!-- pop up -->
  <script src="{{ asset('metronic/plugins/owl.carousel/owl.carousel.min.js') }}" type="text/javascript"></script><!-- slider for products -->

  <script src="{{ asset('metronic/corporate/scripts/layout.js') }}" type="text/javascript"></script>
  <script src="{{ asset('metronic/pages/scripts/bs-carousel.js') }}" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="{{ asset('app.js')}}"></script>
  <script type="text/javascript">
    jQuery(document).ready(function() {
      Layout.init();
      Layout.initOWL();
      Layout.initTwitter();
      @if(!Request()->is('membership-application-form'))
        Layout.initFixHeaderWithPreHeader(); /* Switch On Header Fixing (only if you have pre-header) */
        Layout.initNavScrolling();
      @endif
    });
  </script>  <!-- END PAGE LEVEL JAVASCRIPTS -->

  <script>
    function text(x){
        if(x == 0) {
            document.getElementById('pcl').style.display = "block";
        }
        else if (x == 1) {
            document.getElementById('fcl').style.display = "block";
        } 
    }
  </script>
