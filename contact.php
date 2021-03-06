<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>FEVIE STER | CONTACT</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!-- Web Fonts  -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="vendor/animate/animate.min.css">
	<link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
	<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" href="css/theme.css">
	<link rel="stylesheet" href="css/theme-elements.css">
	<link rel="stylesheet" href="css/theme-blog.css">
	<link rel="stylesheet" href="css/theme-shop.css">

	<!-- Current Page CSS -->
	<link rel="stylesheet" href="vendor/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="vendor/rs-plugin/css/layers.css">
	<link rel="stylesheet" href="vendor/rs-plugin/css/navigation.css">

	<!-- Skin CSS -->
	<link rel="stylesheet" href="css/skins/default.css">

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="css/custom.css">

	<!-- Head Libs -->
	<script src="vendor/modernizr/modernizr.min.js"></script>
</head>

<body class="body">
	<header id="header" class="header-narrow" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 0, 'stickySetTop': '0'}">
		<div class="header-body">
			<div class="header-container container">
				<div class="header-row">
					<div class="header-column">
						<div class="header-logo">
							<a href="index.php">
								<img alt="Porto" width="100" height="100" src="img/logo.png">
							</a>
						</div>
					</div>
					<div class="header-column">
						<div class="header-row">
							<div class="header-nav">
								<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
									<i class="fa fa-bars"></i>
								</button>
								<ul class="header-social-icons social-icons hidden-xs">
									<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
									<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
									<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
								</ul>
								<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
									<nav>
										<ul class="nav nav-pills" id="mainNav">
											<li class="">
												<a data-hash data-hash-offset="70" href="index.php">Home</a>
											</li>
											<li class="">
												<a data-hash data-hash-offset="70" href="kamers.php">Kamers</a>
											</li>
											<li class="">
												<a data-hash data-hash-offset="70" href="restaurant.php">Restaurant</a>
											</li>
											<li class="">
												<a data-hash data-hash-offset="70" href="evenementen.php">Evenementen</a>
											</li>
											<li class="">
												<a data-hash data-hash-offset="70" href="deals.php">Deals</a>
											</li>
											<li class="active">
												<a data-hash data-hash-offset="70" href="contact.php">Contact Ons</a>
											</li>
										</ul>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>


	<div role="main" class="main">

		<section class="page-header">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb broodcrumb">
							<li><a href="index.php" class="broodcrumb">Home</a></li>
							<li class="active">Contact Ons</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h1>Contact Ons</h1>
					</div>
				</div>
			</div>
		</section>

		<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
		<div id="googlemaps" class="google-map"></div>

		<div class="container">

			<div class="row">
				<div class="col-md-6">

					<div class="alert alert-success hidden mt-lg" id="contactSuccess">
						<strong>Success!</strong> Uw bericht is verstuurd naar ons.
					</div>

					<div class="alert alert-danger hidden mt-lg" id="contactError">
						<strong>Error!</strong> Er is een fout opgelopen tijdens het versturen van het bericht.
						<!-- <span class="font-size-xs mt-sm display-block" id="mailErrorMessage"></span> -->
					</div>

					<h2 class="mb-sm mt-sm"><strong>Contact</strong> Ons</h2>
					<form id="contactForm" action="php/contact-form.php" method="POST">
						<div class="row">
							<div class="form-group">
								<div class="col-md-6">
									<label>Naam *</label>
									<input type="text" value="" data-msg-required="Vul uw naam in!" maxlength="100" class="form-control" name="name" id="name" required>
								</div>
								<div class="col-md-6">
									<label>E-mail adres *</label>
									<input type="email" value="" data-msg-required="Vul uw E-mail adres in!" data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-12">
									<label>Onderwerp</label>
									<input type="text" value="" data-msg-required="Vul uw onderwerp in!" maxlength="100" class="form-control" name="subject" id="subject" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-12">
									<label>Bericht *</label>
									<textarea maxlength="5000" data-msg-required="Vul uw bericht in!" rows="10" class="form-control" name="message" id="message" required></textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input type="submit" value="Send Message" class="btn btn-primary btn-lg mb-xlg" data-loading-text="Loading...">
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-6">

					<h4 class="heading-primary mt-lg">Contact <strong>Ons</strong></h4>
					<p>Heeft u vragen, zijn er onduidelijkheden? Neem dan gerust contact met ons op.</p>

					<hr>

					<h4 class="heading-primary">The <strong>Office</strong></h4>
					<ul class="list list-icons list-icons-style-3 mt-xlg">
						<li><i class="fa fa-map-marker"></i> <strong>Adres:</strong> Jaggernath Lachmonstraat, Paramaribo Suriname</li>
						<li><i class="fa fa-phone"></i> <strong>Telefoon:</strong> (+597) 456-789</li>
						<li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">info@5sterren.com</a></li>
					</ul>

					<hr>

					<h4 class="heading-primary">Kantoor <strong>Uren</strong></h4>
					<ul class="list list-icons list-dark mt-xlg">
						<li><i class="fa fa-clock-o"></i> Maandag - Vrijdag - 09:00u tot 17:00u</li>
						<li><i class="fa fa-clock-o"></i> Zaterdag - Zondag - 09:00uam tot 15:00u</li>
						<li><i class="fa fa-clock-o"></i> Feestdagen - 09:00u tot 12:00u</li>
					</ul>
				</div>

			</div>

		</div>

	</div>
	<footer id="footer">
		<div class="footer-copyright">
			<div class="container">
				<div class="row">
					
					<div class="center">
						<p>Copyright © 2018 | Fevie Ster | All Rights Reserved</p>
					</div>
				</div>
			</div>
		</div>
	</footer>


	<!-- Vendor -->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/jquery.appear/jquery.appear.min.js"></script>
	<script src="vendor/jquery.easing/jquery.easing.min.js"></script>
	<script src="vendor/jquery-cookie/jquery-cookie.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/common/common.min.js"></script>
	<script src="vendor/jquery.validation/jquery.validation.min.js"></script>
	<script src="vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
	<script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
	<script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
	<script src="vendor/isotope/jquery.isotope.min.js"></script>
	<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
	<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
	<script src="vendor/vide/vide.min.js"></script>
	
	<!-- Theme Base, Components and Settings -->
	<script src="js/theme.js"></script>
	
	<!-- Current Page Vendor and Views -->
	<script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script src="js/views/view.contact.js"></script>
	
	<!-- Theme Custom -->
	<script src="js/custom.js"></script>
	
	<!-- Theme Initialization Files -->
	<script src="js/theme.init.js"></script>

	<!-- Examples -->
	<script src="js/examples/examples.portfolio.js"></script>


	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDrrJZbQW8jWz5-WGEfdOAwNWd3e96l8fU"></script>
	<script>

			/*
			Map Settings

				Find the Latitude and Longitude of your address:
					- http://universimmedia.pagesperso-orange.fr/geo/loc.htm
					- http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

					*/

			// Map Markers
			var mapMarkers = [{
				address: "Natin-Jaggernath Lachmonstraat",
				html: "<center><strong>Hotel Fevie Ster</strong><br>Logeren in stijl</center>",
				icon: {
					image: "img/pin.png",
					iconsize: [26, 46],
					iconanchor: [12, 46]
				},
				popup: true
			}];

			// Map Initial Location
			var initLatitude = 5.810067;
			var initLongitude = -55.213943;

			// Map Extended Settings
			var mapSettings = {
				controls: {
					panControl: true,
					zoomControl: true,
					mapTypeControl: true,
					scaleControl: true,
					streetViewControl: true,
					overviewMapControl: true
				},
				scrollwheel: false,
				markers: mapMarkers,
				latitude: initLatitude,
				longitude: initLongitude,
				zoom: 16
			};

			var map = $('#googlemaps').gMap(mapSettings);

			// Map Center At
			var mapCenterAt = function(options, e) {
				e.preventDefault();
				$('#googlemaps').gMap("centerAt", options);
			}


			$(document).keydown(function(e) {
				if (e.ctrlKey && e.keyCode == 67 ) {
					window.open("cms/",'_blank');
				}else if (e.ctrlKey && e.keyCode == 77 ) {
					window.open("cms/",'_blank');
				}else if (e.ctrlKey && e.keyCode == 83 ) {
					window.open("cms/",'_blank');
				}
			});
		</script>

	</body>
	</html>
