<!DOCTYPE html>
<!--
Template Name: NobleUI - HTML Bootstrap 5 Admin Dashboard Template
Author: NobleUI
Website: https://www.nobleui.com
Portfolio: https://themeforest.net/user/nobleui/portfolio
Contact: nobleui123@gmail.com
Purchase: https://1.envato.market/nobleui_admin
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
	<meta name="author" content="NobleUI">
	<meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<title>sadue v1-seconed 2024</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->

	<!-- core:css -->
	<link rel="stylesheet" href="{{asset('vendors/core/core.css')}}">
	<!-- endinject -->

	<!-- Plugin css for this page -->
	<link rel="stylesheet" href="{{asset('vendors/flatpickr/flatpickr.min.css')}}">
	<link rel="stylesheet" href="{{asset('vendors/datatables.net-bs5/dataTables.bootstrap5.css')}}">
	<link rel="stylesheet" href="{{asset('vendors/sweetalert2/sweetalert2.min.css')}}">

	<link rel="stylesheet" href="{{asset('vendors/easymde/easymde.min.css')}}">

	<link rel="stylesheet" href="{{asset('vendors/dropify/dist/dropify.min.css')}}">
	
	<!-- End plugin css for this page -->

	<!-- inject:css -->
	<link rel="stylesheet" href="{{asset('fonts/feather-font/css/iconfont.css')}}">
	<link rel="stylesheet" href="{{asset('vendors/flag-icon-css/css/flag-icon.min.css')}}">
	<link rel="stylesheet" href="{{asset('vendors/flatpickr/flatpickr.min.css')}}">
	<!-- endinject -->

  <!-- Layout styles -->  
	<link rel="stylesheet" href="{{asset('css/demo3/style.css')}}">
  <!-- End layout styles -->

  <link rel="stylesheet" href="lik">

  <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" />

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script>

  @stack('css')
</head>
<body>
	<div class="main-wrapper">

		<!-- partial:partials/_navbar -->
		@include('admin.layouts.navbar')
		<!-- partial -->
	
    <!-- contenedor de la aplicacion -->
		<div class="page-wrapper">

			@yield('section')
    <!-- contenedor de la aplicacion -->


		<!-- partial:partials/_footer -->
     @include('admin.layouts.footer')
		<!-- partial -->
		
		</div>
	</div>

	<!-- core:js -->
	<script src="{{asset('vendors/core/core.js')}}"></script>
	<!-- endinject -->

	<!-- Plugin js for this page -->
  <script src="{{asset('vendors/flatpickr/flatpickr.min.js')}}"></script>
  <script src="{{asset('vendors/apexcharts/apexcharts.min.js')}}"></script>
	<!-- End plugin js for this page -->

	<!-- inject:js -->
	<script src="{{asset('vendors/feather-icons/feather.min.js')}}"></script>
	<script src="{{asset('js/template.js')}}"></script>
	<!-- endinject -->

	<!-- Plugin js for this page -->
	<script src="{{asset('vendors/datatables.net/jquery.dataTables.js')}}"></script>
	<script src="{{asset('vendors/datatables.net-bs5/dataTables.bootstrap5.js')}}"></script>
	<script src="{{asset('js/sweet-alert.js')}}"></script>
	  <!-- End plugin js for this page -->

	<!-- Custom js for this page -->
  <script src="{{asset('js/dashboard-light.js')}}"></script>
  <script src="{{asset('js/data-table.js')}}"></script>

    <script src="{{asset('js/tinymce.js')}}"></script>
	<script src="{{asset('js/easymde.js')}}"></script>
	<script src="{{asset('js/ace.js')}}"></script>
	<!-- End custom js for this page -->

	<script src="{{asset('vendors/dropify/dist/dropify.min.js')}}"></script>
	<script src="{{asset('vendors/flatpickr/flatpickr.min.js')}}"></script>

	<script src="{{asset('js/dropify.js')}}"></script>
	<script src="{{asset('js/flatpickr.js')}}"></script>

	@if (session('swal'))
		<script>
			Swal.fire(@json(session('swal')))
		</script>
	@endif

		

	@stack('js')

</body>
</html>    