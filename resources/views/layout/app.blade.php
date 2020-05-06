<!DOCTYPE html>
<html lang="en">
<head>
	<title>Labs - Design Studio</title>
	<meta charset="UTF-8">
	<meta name="description" content="Exo7 - Labs">
	<meta name="keywords" content="lab, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700" rel="stylesheet">

	<!-- Stylesheets -->
	{{-- <link rel="stylesheet" href="css/bootstrap.min.css"/> --}}
	{{-- <link rel="stylesheet" href="css/font-awesome.min.css"/> --}}
	{{-- <link rel="stylesheet" href="css/flaticon.css"/> --}}
	{{-- <link rel="stylesheet" href="css/magnific-popup.css"/> --}}
	{{-- <link rel="stylesheet" href="css/owl.carousel.css"/> --}}

	<link href="{{asset('css/app.css')}}" rel="stylesheet"> 



	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>

	@yield('content')

	<!-- Page Preloder -->
	{{-- <div id="preloder">
		<div class="loader">
			<img src="img/logo.png" alt="">
			<h2>Loading.....</h2>
		</div>
	</div> --}}


	<!--====== Javascripts & Jquery ======-->

	{{-- <script src="js/jquery-2.1.4.min.js"></script> --}}
	{{-- <script src="js/bootstrap.min.js"></script> --}}
	{{-- <script src="js/magnific-popup.min.js"></script> --}}
	{{-- <script src="js/owl.carousel.min.js"></script> --}}


	{{-- <script src="js/circle-progress.min.js"></script> --}}

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo"></script>

	<script src="{{asset('js/app.js')}}"></script>

</body>
</html>
