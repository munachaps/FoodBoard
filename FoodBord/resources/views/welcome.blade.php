<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Keinz order wizard with online payment">
	<meta name="author" content="">
	<title>Keinz | Online Food Ordering</title>

	<!-- Favicon -->
	<link href="img/favicon.png" rel="shortcut icon">

	<!-- Google Fonts - Jost -->
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700&display=swap" rel="stylesheet">

	<!-- Font Awesome CSS -->
	<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">

	<!-- Custom Font Icons -->
	<link href="vendor/icomoon/css/iconfont.min.css" rel="stylesheet">

	<!-- Vendor CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="vendor/dmenu/css/menu.css" rel="stylesheet">
	<link href="vendor/hamburgers/css/hamburgers.min.css" rel="stylesheet">
	<link href="vendor/mmenu/css/mmenu.min.css" rel="stylesheet">
	<link href="vendor/magnific-popup/css/magnific-popup.css" rel="stylesheet">
	<link href="vendor/float-labels/css/float-labels.min.css" rel="stylesheet">

	<!-- Main CSS -->
	<link href="css/style.css" rel="stylesheet">

</head>

<body>

	<!-- Preloader -->
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- Preloader End -->

	<!-- Page -->
	<div id="page">

		<!-- Header -->
		<header class="main-header sticky">
			@include('layouts.header')
		</header>
		<!-- Header End -->

		<!-- Main -->
		<main>
			<!-- Hero -->
			<div class="hero-home bg-mockup hero-bottom-border">
				<div class="content">
				<img src="img/foodlogo.jpeg">
					<p class="animated-element"> Food ordering platform with online payment.</p>
					<a href="{{route('pay-online-menu')}}" class="btn-1 medium animated-element">Get Started</a>
					<a href="#orderFood" class="mouse-frame nice-scroll">
						<div class="mouse"></div>
					</a>
				</div>
			</div>
			<!-- Hero End -->

			<!-- Services -->
			<div class="services">
				<div class="container">
					<div class="main-title">
						<span><em></em></span>
						<h2 id="orderFood">Order Food</h2>
						<p>Choosing one of the payment methods</p>
					</div>
					<div class="row">
						<div class="col-lg-6 animated-element">
							<a href="{{route('online-menu')}}" class="service-link">
								<div class="box text-center">
									<div class="icon d-flex align-items-end"><i class="icon icon-credit-card2"></i></div>
									<h3 class="service-title">Pay Online</h3>
									<p>and wait for delivery</p>
								</div>
							</a>
						</div>
						<div class="col-lg-6 animated-element">
							<a href="{{route('cash-online-menu')}}" class="service-link">
								<div class="box text-center">
									<div class="icon d-flex align-items-end"><i class="icon icon-wallet"></i></div>
									<h3 class="service-title">Pay with cash</h3>
									<p>when food is arrived to you</p>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<!-- Services End -->

			

			<div class="banner animated-element">
				<div class="container">
					<div class="content">
						<div class="mask">
							<div class="textbox">
								<small>FoodBoard Delivery</small>
								<h2>FoodBoard</h2>
								<p>Food order wizard with online payment.</p>
								<a href="" class="btn-1">FAQ</a>
							</div>
						</div>
					</div>
				</div>
			</div>


		</main>
		<!-- Main End -->

		<!-- Footer -->
		@include('layouts.footer')
		<!-- Footer End -->

	</div>
	<!-- Page End -->

	<!-- Back to top button -->
	<div id="toTop"><i class="icon icon-chevron-up"></i></div>

	<!-- Vendor Javascript Files -->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/easing/js/easing.min.js"></script>
	<script src="vendor/parsley/js/parsley.min.js"></script>
	<script src="vendor/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendor/price-format/js/jquery.priceformat.min.js"></script>
	<script src="vendor/theia-sticky-sidebar/js/ResizeSensor.min.js"></script>
	<script src="vendor/theia-sticky-sidebar/js/theia-sticky-sidebar.min.js"></script>
	<script src="vendor/mmenu/js/mmenu.min.js"></script>
	<script src="vendor/magnific-popup/js/jquery.magnific-popup.min.js"></script>
	<script src="vendor/float-labels/js/float-labels.min.js"></script>
	<script src="vendor/jquery-wizard/js/jquery-ui-1.8.22.min.js"></script>
	<script src="vendor/jquery-wizard/js/jquery.wizard.js"></script>
	<script src="vendor/isotope/js/isotope.pkgd.min.js"></script>
	<script src="vendor/scrollreveal/js/scrollreveal.min.js"></script>
	<script src="vendor/lazyload/js/lazyload.min.js"></script>
	<script src="vendor/sticky-kit/js/sticky-kit.min.js"></script>

	<!-- Main Javascript File -->
	<script src="js/scripts.js"></script>

</body>

</html>