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
				<img src="img/foodlogo.jpeg" ">
					<p class="animated-element"> Food ordering platform with online payment.</p>
					
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
						<p>Let us hear your thoughts</p>
					</div>
					<div class="row">
						<div class="col-lg-8 animated-element">
								<div class="box text-left ">
									<form action="" >
                                        <label for="phone_number">Phone number :</label>
                                        <input type="text" class="form-control" placeholder="Enter phone number">
                                        <hr>
                                        <label for="phone_number">Email :</label>
                                        <input type="text" class="form-control" placeholder="Enter email">
                                        <hr>
                                        <label for="phone_number">Write your comments:</label>
                                        <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                               <input type="submit" class="btn-1" name="" id="">
                                            </div>
                                        </div>
                                    </form>
								</div>

                               
							
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
		<footer class="main-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<h5 class="footer-heading">Menu Links</h5>
						<ul class="list-unstyled nav-links">
							<li><i class="fa fa-angle-right"></i> <a href="{{route('home')}}" class="footer-link">Home</a></li>
							<li><i class="fa fa-angle-right"></i> <a href="{{route('addreview')}}" class="footer-link">Review</a></li>
							<li><i class="fa fa-angle-right"></i> <a href="{{route('contact')}}" class="footer-link">Contact</a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<h5 class="footer-heading">Order Wizard</h5>
						<ul class="list-unstyled nav-links">
							<li><i class="fa fa-angle-right"></i> <a href="{{route('online-menu')}}" class="footer-link">Pay online</a></li>
							<li><i class="fa fa-angle-right"></i> <a href="{{route('cash-online-menu')}}" class="footer-link">Pay with cash on delivery</a></li>
						</ul>
					</div>
					<div class="col-md-4">
						<h5 class="footer-heading">Contacts</h5>
						<ul class="list-unstyled contact-links">
							<li><i class="icon icon-map-marker"></i><a href="https://goo.gl/maps/vKgGyZe2JSRLDnYH6" class="footer-link" target="_blank">Address: 1234 Street Name, Lebanon   </a>
							</li>
							<li><i class="icon icon-envelope3"></i><a href="mailto:info@yourdomain.com" class="footer-link">Mail: info@keinz.com</a></li>
							<li><i class="icon icon-phone2"></i><a href="tel:+3630123456789" class="footer-link">Phone: +3630123456789</a></li>
						</ul>
					</div>
					<div class="col-md-2">
						<h5 class="footer-heading">Find Us On</h5>
						<ul class="list-unstyled social-links">
							<li><a href="https://facebook.com" class="social-link" target="_blank"><i class="icon icon-facebook"></i></a></li>
							<li><a href="https://twitter.com" class="social-link" target="_blank"><i class="icon icon-twitter"></i></a></li>
							<li><a href="https://instagram.com" class="social-link" target="_blank"><i class="icon icon-instagram"></i></a></li>
							<li><a href="https://pinterest.com" class="social-link" target="_blank"><i class="icon icon-pinterest"></i></a></li>
						</ul>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-8">
						<ul id="subFooterLinks">
							<li><a href="https://themeforest.net/user/ultimatewebsolutions" target="_blank">With <i class="fa fa-heart pulse"></i> </a></li>
							<li><a href="pdf/terms.pdf" target="_blank">Terms and conditions</a></li>
						</ul>
					</div>
					<div class="col-md-4">
						<div id="copy">© 
                       @php
                           echo date('Y')
                       @endphp 
                    </div>
					</div>
				</div>
			</div>
		</footer>
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