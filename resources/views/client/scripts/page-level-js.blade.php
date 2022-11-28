  <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
  <script src="{{ asset('metronic/plugins/fancybox/source/jquery.fancybox.pack.js') }}" type="text/javascript"></script><!-- pop up -->
  <script src="{{ asset('metronic/plugins/owl.carousel/owl.carousel.min.js') }}" type="text/javascript"></script><!-- slider for products -->
  <script src="http://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap" type="text/javascript"></script>
  <script src="{{ asset('metronic/corporate/scripts/layout.js') }}" type="text/javascript"></script>
  <script src="assets/plugins/gmaps/gmaps.js" type="text/javascript"></script>
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

<script type="text/javascript">
    function initMap() {
      const myLatLng = { lat: 22.2734719, lng: 70.7512559 };
      const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 5,
        center: myLatLng,
      });

      new google.maps.Marker({
        position: myLatLng,
        map,
        title: "Hello Rajkot!",
      });
    }

    window.initMap = initMap;
</script>
