<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

	<title>CASALCO - Capitol Savings And Loan Cooperative</title>
	<!--
	TemplateMo 558 Klassy Cafe
	https://templatemo.com/tm-558-klassy-cafe
	-->
	<!-- Additional CSS Files -->
	<link rel="stylesheet" type="text/css" href="../klassy/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../klassy/css/font-awesome.css">
	<link rel="stylesheet" href="../klassy/css/templatemo-klassy-cafe.css">
	<link rel="stylesheet" href="../klassy/css/owl-carousel.css">
	<link rel="stylesheet" href="../klassy/css/lightbox.css">
	
</head>
<body>
	@include('client.header')

	@yield('client_content')

	@if(!Request::is("login") && !Request::is("register") && !Request::is("membership-application") && !Request::is("pre_seminar") )
		@include('client.footer')
	@endif
	
	<!-- jQuery -->
	<script src="../klassy/js/jquery-2.1.0.min.js"></script>

	<!-- Bootstrap -->
	<script src="../klassy/js/popper.js"></script>
	<script src="../klassy/js/bootstrap.min.js"></script>

	<!-- Plugins -->
	<script src="../klassy/js/owl-carousel.js"></script>
	<script src="../klassy/js/accordions.js"></script>
	<script src="../klassy/js/datepicker.js"></script>
	<script src="../klassy/js/scrollreveal.min.js"></script>
	<script src="../klassy/js/waypoints.min.js"></script>
	<script src="../klassy/js/jquery.counterup.min.js"></script>
	<script src="../klassy/js/imgfix.min.js"></script> 
	<script src="../klassy/js/slick.js"></script> 
	<script src="../klassy/js/lightbox.js"></script> 
	<script src="../klassy/js/isotope.js"></script> 
	
	<!-- Global Init -->
	<script src="../klassy/js/custom.js"></script>


		{{-- Data table --}}

	{{-- <script src="{{ asset('/klassy/datatables/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('/klassy/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('/klassy/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
	<script src="{{ asset('/klassy/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('/klassy/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
	<script src="{{ asset('/klassy/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('/klassy/jszip/jszip.min.js') }}"></script>
	<script src="{{ asset('/klassy/pdfmake/pdfmake.min.js') }}"></script>
	<script src="{{ asset('/klassy/pdfmake/vfs_fonts.js') }}"></script>
	<script src="{{ asset('/klassy/datatables-buttons/js/buttons.html5.min.js') }}"></script>
	<script src="{{ asset('/klassy/datatables-buttons/js/buttons.print.min.js') }}"></script>
	<script src="{{ asset('/klassy/datatables-buttons/js/buttons.colVis.min.js') }}"></script> --}}

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

		$(function() {
			var selectedClass = "";
			$("p").click(function(){
			selectedClass = $(this).attr("data-rel");
			$("#portfolio").fadeTo(50, 0.1);
					$("#portfolio div").not("."+selectedClass).fadeOut();
			setTimeout(function() {
				$("."+selectedClass).fadeIn();
				$("#portfolio").fadeTo(50, 1);
			}, 500);
					
			});
		});

		

				$(function () {
			$("#example5").DataTable({
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
					order: [[3, 'desc']]
			});
		});

	</script>
	
</body>
</html>