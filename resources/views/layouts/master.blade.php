<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<title>Flycraft</title>
		<link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--Css Fils -->
		<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/flaticon.css">
		<link rel="stylesheet" href="assets/css/flaticon-02.css">
		<link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">
		<link rel="stylesheet" href="assets/css/jquery-ui.css">
		<link rel="stylesheet" href="assets/css/animate.css">
		<link rel="stylesheet" href="assets/css/fontawesome-all.css">
		<link rel="stylesheet" href="assets/css/custom-animate.css">
		<link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
		<link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="assets/css/responsive.css">
		<script src="assets/js/jquery.js"></script>
		
		<link href="assets/plugins/revolution/css/settings.css" rel="stylesheet" type="text/css">
		<link href="assets/plugins/revolution/css/layers.css" rel="stylesheet" type="text/css">
		<link href="assets/plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css">
		
	</head>

	<body class="nlhu-body">
		{{-- <div id="preloader"></div> --}}
		<div class="up">
			<a href="#" class="scrollup text-center"><i class="fas fa-chevron-up"></i></a>
		</div>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">
		
		<div class="nlhu-body-overlay"></div>

		<!-- Preloader-->
		<div class="loading-preloader">
			<div id="loading-preloader">
				<div class="line_shape"></div>
				<div class="line_shape"></div>
				<div class="line_shape"></div>
				<div class="line_shape"></div>
				<div class="line_shape"></div>
				<div class="line_shape"></div>
				<div class="line_shape"></div>
				<div class="line_shape"></div>
				<div class="line_shape"></div>
				<div class="line_shape"></div>
			</div>
		</div>
		<!-- Preloader End -->
		
		<!-- Main Header -->
        @include('layouts.header')
		<!-- End Main Header -->
		
        @yield('content')
		
		<!-- Footer Style Two -->
		@include('layouts.footer')
		
        <!-- For Js Library -->
		<!-- <script src="assets/js/appilo-js-plugin.js"></script> -->
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/appear.js"></script>
		<script src="assets/js/owl.carousel.min.js"></script>
		<script src="assets/js/isotope.pkgd.js"></script>
		<script src="assets/js/progress-bar.js"></script>
		<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
		
		<!-- Revolution Slider -->
		<script src="assets/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
		<script src="assets/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
		<script src="assets/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
		<script src="assets/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
		<script src="assets/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
		<script src="assets/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
		<script src="assets/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
		<script src="assets/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
		<script src="assets/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
		<script src="assets/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
		<script src="assets/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
		<script src="assets/plugins/revolution/js/main-slider-script.js"></script>
		<!-- For Js Library -->
		
		<script src="assets/js/jquery.fancybox.js"></script>
		<script src="assets/js/wow.js"></script>
		<script src="assets/js/jquery-ui.js"></script>
		<script src="assets/js/knob.js"></script>
		
		<script src="assets/js/tilt.jquery.min.js"></script>
		<script src="assets/js/script.js"></script>
		<script src="assets/js/script-two.js"></script>
		
	</body>
</html>