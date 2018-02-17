	<?php 
	include 'php/dbconnection.php';
	?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>FEVIE STER | HOME</title>

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

		<link href="css/bootstrap-datepicker.css" rel="stylesheet" />
		

		
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
												<li class="active">
													<a data-hash data-hash-offset="70" href="index.php">Home</a>
												</li>
												<li>
													<a data-hash data-hash-offset="70" href="kamers.php">Kamers</a>
												</li>
												<li>
													<a data-hash data-hash-offset="70" href="restaurant.php">Restaurant</a>
												</li>
												<li>
													<a data-hash data-hash-offset="70" href="evenementen.php">Evenementen</a>
												</li>
												<li>
													<a data-hash data-hash-offset="70" href="deals.php">Deals</a>
												</li>
												<li>
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
		
		<div class="slider-container rev_slider_wrapper" style="height: 1000px;">
			<div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'sliderLayout': 'fullscreen', 'fullScreenOffset': '0'}">
				<ul><?php 
				$sql = "SELECT * FROM homepagina ORDER BY id ASC";
				$result = mysqli_query($con,$sql);
				if(mysqli_num_rows($result)>0){
					while($row=mysqli_fetch_assoc($result)){
						?>
						<li data-transition="fade">
							
							<img src="<?php echo $row['photo_path']; ?>"  
							alt=""
							data-bgposition="center center" 
							data-bgfit="cover" 
							data-bgrepeat="no-repeat" 
							class="rev-slidebg">
							
							<div class="tp-caption"
							data-x="center" data-hoffset="-150"
							data-y="center" data-voffset="-95"
							data-start="1000"
							style="z-index: 5"
							data-transform_in="x:[-300%];opacity:0;s:500;"><img src="" alt=""></div>
							
							<div class="tp-caption top-label"
							data-x="center" data-hoffset="0"
							data-y="center" data-voffset="-95"
							data-start="500"
							style="z-index: 5"
							data-transform_in="y:[-300%];opacity:0;s:500;"></div>
							
							<div class="tp-caption"
							data-x="center" data-hoffset="150"
							data-y="center" data-voffset="-95"
							data-start="1000"
							style="z-index: 5"
							data-transform_in="x:[300%];opacity:0;s:500;"><img src="" alt=""></div>
							
							<div class="tp-caption main-label"
							data-x="center" data-hoffset="0"
							data-y="center" data-voffset="-45"
							data-start="1500"
							data-whitespace="nowrap"						 
							data-transform_in="y:[100%];s:500;"
							data-transform_out="opacity:0;s:500;"
							style="z-index: 5"
							data-mask_in="x:0px;y:0px;"><?php echo $row['photo_caption']; ?></div>
							
							<div class="tp-caption bottom-label"
							data-x="center" data-hoffset="0"
							data-y="center" data-voffset="5"
							data-start="2000"
							style="z-index: 5"
							data-transform_in="y:[100%];opacity:0;s:500;"></div>
							
							<a class="tp-caption btn btn-lg btn-primary btn-slider-action"
							data-hash
							data-hash-offset="85"
							href="#contact"
							data-x="center" data-hoffset="0"
							data-y="center" data-voffset="80"
							data-start="2200"
							data-whitespace="nowrap"						 
							data-transform_in="y:[100%];s:500;"
							data-transform_out="opacity:0;s:500;"
							style="z-index: 5"
							data-mask_in="x:0px;y:0px;">Boek Nu!</a>
							
						</li><?php }} ?>
					</ul>
				</div>
			</div>
			
			<section id="contact">
				<div class="container">
					<div class="row mt-xlg">
						<div class="col-md-6">

							<h2 class="mb-sm mt-sm"><strong>Reserveer een Kamer</h2></strong>
							<form id="contactForm" action="php/contact-form.php" method="POST">
								<div class="row">
									<div class="form-group">
										<div class="col-md-6">
											<label>Naam *</label>
											<input type="text" value="" data-msg-required="Vul hier uw naam in." maxlength="100" class="form-control" name="naam" id="naam" required>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="form-group">
										<div class="col-md-6">
											<label>Voornaam *</label>
											<input type="text" value="" data-msg-required="Vul hier uw voornaam." maxlength="100" class="form-control" name="voornaam" id="voornaam" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-6">
											<label>Email address *</label>
											<input type="email" value="" data-msg-required="Vul hier uw email address." data-msg-email="Vul a.u.b een geldige email addres in." maxlength="100" class="form-control" name="email" id="email" required>
										</div>
									</div>
								</div>


								<div class="row">
									<div class="form-group">
										<div class="col-md-6">
											<label>ID Nummer *</label>
											<input type="text" value="" data-msg-required="Vul hier uw ID nummer in." maxlength="10" class="form-control" name="id_nummer" id="id_nummer" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-6">
											<label>Adres *</label>
											<input type="text" value="" data-msg-required="Vul hier uw adres in." maxlength="100" class="form-control" name="adres" id="adres" required>
										</div>
									</div>
								</div>
								<!-- <div class="row">
									<div class=" col-md-6 form-group">
	                  <div class="col-md-12">

	                  </div>
	                </div>

	                <div class="form-group col-md-6">
	                  <div class="col-md-12">

	                  </div>
	                </div>
	            </div> -->
	            <div class="row">
	            	<div class="form-group">
	            		<div class="col-md-6">
	            			<label>Check out</label>
	            			<input type="text" value=""  maxlength="100" class="form-control" name="date" id="date" required>
	            		</div>
	            		<div class="row">
	            			<div class="form-group">
	            				<div class="col-md-6">
	            					<label>Check in</label>
	            					<input type="text" value="" maxlength="10" class="form-control" name="date" id="date" required>
	            				</div>
	            			</div>
	            		</div>
	            	</div>
	            </div>

	            <div class="row">
	            	<div class="dropdown">
	            		<div class="form-group">
	            			<div class="col-md-12">
	            				<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Type Kamer
	            					<span class="caret"></span></button>
	            					<ul class="dropdown-menu">
	            						<li><a href="#">Eenpersoonskamer</a></li>
	            						<li><a href="#">Tweepersoonskamer</a></li>
	            						<li><a href="#">Familiekamer</a></li>
	            					</ul>
	            				</div>
	            			</div>
	            		</div>
	            	</div>
	            	<br>
	            	<br>
	            	<div class="row">
	            		<div class="col-md-3"></div>
	            		<div class="col-md-6">
	            			<input type="submit" value="Plaats Reservering" class="btn btn-primary btn-lg mb-xlg" data-loading-text="Laden...">
	            		</div>
	            	</div>
	            </form>
	        </div>
	        <div class="col-md-6">

	        	<h4 class="heading-primary mt-lg">"We welcome your<strong> stay"</strong></h4>
	        	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

	        	<hr>

	        	<h4 class="heading-primary">Voor meer <strong>Info</strong></h4>
	        	<ul class="list list-icons list-icons-style-3 mt-xlg">
	        		<li><i class="fa fa-map-marker"></i> <strong>Addres:</strong> Antondrachtenweg # 257, Paramaribo, Suriname</li>
	        		<li><i class="fa fa-phone"></i> <strong>Telefoon:</strong> (+597) 456-789</li>
	        		<li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">info@5sterren.com</a></li>
	        	</ul>

	        	<hr>

	        	<h4 class="heading-primary">Openings<strong>Tijden</strong></h4>
	        	<ul class="list list-icons list-dark mt-xlg">
	        		<li><i class="fa fa-clock-o"></i> Maandag - Vrijdag - 9am tot 5pm</li>
	        		<li><i class="fa fa-clock-o"></i> Zaterdag - Zondag - 9am tot 3pm</li>
	        		<li><i class="fa fa-clock-o"></i> Feestdagen - 9am tot 12pm</li>
	        	</ul>

	        </div>

	    </div>
	</div>
</div>
</div>
</section>


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

<script src="js/bootstrap-datepicker.js"></script>

<!-- Head Libs -->
<script src="vendor/modernizr/modernizr.min.js"></script>


<script>

	$(document).ready(function () {

		$('body').scrollspy({
			target: '.navbar-fixed-top',
			offset: 80
		});

        // Page scrolling feature
        $('a.page-scroll').bind('click', function(event) {
        	var link = $(this);
        	$('html, body').stop().animate({
        		scrollTop: $(link.attr('href')).offset().top - 50
        	}, 500);
        	event.preventDefault();
        	$("#navbar").collapse('hide');
        });
    });

	var cbpAnimatedHeader = (function() {
		var docElem = document.documentElement,
		header = document.querySelector( '.navbar-default' ),
		didScroll = false,
		changeHeaderOn = 200;
		function init() {
			window.addEventListener( 'scroll', function( event ) {
				if( !didScroll ) {
					didScroll = true;
					setTimeout( scrollPage, 250 );
				}
			}, false );
		}
		function scrollPage() {
			var sy = scrollY();
			if ( sy >= changeHeaderOn ) {
				$(header).addClass('navbar-scroll')
			}
			else {
				$(header).removeClass('navbar-scroll')
			}
			didScroll = false;
		}
		function scrollY() {
			return window.pageYOffset || docElem.scrollTop;
		}
		init();

	})();

	$(document).ready(function(){
      var date_input=$('input[name="date"]'); //Checkin en Checkout veld hebben de naam "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
      	format: 'dd/mm/yyyy',
      	container: container,
      	clearBtn: true,
      	todayHighlight: true,
      	orientation: "top auto",
      	toggleActive: true
      };
      date_input.datepicker(options);
  });

</script>

</body>
</html>
