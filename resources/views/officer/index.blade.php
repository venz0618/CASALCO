<!DOCTYPE html>
<html lang="en">
<head>
	<!-- basic -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- mobile metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
	<!-- site metas -->
	<title>@yield('title')</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- site icon -->
	<link rel="icon" href="{{ asset('/pluto/images/fevicon.png') }}" type="image/png" />
	<!-- bootstrap css -->
	<link rel="stylesheet" href="{{ asset('/pluto/css/bootstrap.min.css') }}" />
	<!-- site css -->
	<link rel="stylesheet" href="{{ asset('/pluto/style.css') }}" />
	<!-- responsive css -->
	<link rel="stylesheet" href="{{ asset('/pluto/css/responsive.css') }}" />
	<!-- color css -->
	<link rel="stylesheet" href="{{ asset('/pluto/css/colors.css') }}" />
	<!-- select bootstrap -->
	<link rel="stylesheet" href="{{ asset('/pluto/css/bootstrap-select.css') }}" />
	<!-- scrollbar css -->
	<link rel="stylesheet" href="{{ asset('/pluto/css/perfect-scrollbar.css') }}" />
	<!-- custom css -->
	<link rel="stylesheet" href="{{ asset('/pluto/css/custom.css') }}" />
	<!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('/pluto/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/pluto/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/pluto/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
</head>
<body class="">
	<div id="body" class="dashboard dashboard_1">
		<div class="full_container">
			<div class="inner_container">
				@include('officer.sidebar')
				<div id="content">
					@include('officer.topbar')
					<div class="midde_cont">
						<div class="container-fluid">
							<div class="row column_title">
								<div class="col-md-12">
									 <div class="page_title">
											<h2>@yield('title')</h2>
									 </div>
								</div>
						 </div>
                         @if (!Request::is('/officer/dashboard'))
                            <div class="row">
                                @yield('officer_content')
                            </div>
                         @else
                            <div class="row column">
                                @yield('officer_content')
                            </div>
                         @endif
						</div>
						<div class="container-fluid">
							@include('officer.footer')
							@include('sweetalert::alert')
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- jQuery -->
	<script src="{{ asset('/pluto/js/jquery.min.js') }}"></script>
	<script src="{{ asset('/pluto/js/popper.min.js') }}"></script>
	<script src="{{ asset('/pluto/js/bootstrap.min.js') }}"></script>
	<!-- wow animation -->
	<script src="{{ asset('/pluto/js/animate.js') }}"></script>
	<!-- select country -->
	<script src="{{ asset('/pluto/js/bootstrap-select.js') }}"></script>
	<!-- owl carousel -->
	<script src="{{ asset('/pluto/js/owl.carousel.js') }}"></script>
	<!-- chart js -->
	<script src="{{ asset('/pluto/js/Chart.min.js') }}"></script>
	<script src="{{ asset('/pluto/js/Chart.bundle.min.js') }}"></script>
	<script src="{{ asset('/pluto/js/utils.js') }}"></script>
	<script src="{{ asset('/pluto/js/analyser.js') }}"></script>
	<!-- nice scrollbar -->
	<script src="{{ asset('/pluto/js/perfect-scrollbar.min.js') }}"></script>
	<script>
			var ps = new PerfectScrollbar('#sidebar');
	</script>
	<!-- custom js -->
	<script src="{{ asset('/pluto/js/custom.js') }}"></script>
	<script src="{{ asset('/pluto/js/chart_custom_style1.js') }}"></script>
	<!-- DataTables  & Plugins -->
	<!-- DataTables  & Plugins -->
	<script src="{{ asset('/pluto/datatables/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('/pluto/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('/pluto/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
	<script src="{{ asset('/pluto/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('/pluto/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
	<script src="{{ asset('/pluto/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('/pluto/jszip/jszip.min.js') }}"></script>
	<script src="{{ asset('/pluto/pdfmake/pdfmake.min.js') }}"></script>
	<script src="{{ asset('/pluto/pdfmake/vfs_fonts.js') }}"></script>
	<script src="{{ asset('/pluto/datatables-buttons/js/buttons.html5.min.js') }}"></script>
	<script src="{{ asset('/pluto/datatables-buttons/js/buttons.print.min.js') }}"></script>
	<script src="{{ asset('/pluto/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

	<script>
		$(function () {
    $("#example").DataTable({
      "responsive": true, "lengthChange": true, "autoWidth": true,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');




    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
			order: [[4, 'desc']]
    });

		$('#example5').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
			order: [[4, 'desc']]
    });
  });
	</script>
</body>
</html>
