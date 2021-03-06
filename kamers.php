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

		<title>FEVIE STER | KAMERS</title>

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

		<style type="text/css">
		.info{
			text-align: justify;				
			margin: 0px !important;
		}
		.kamer-tn{
			height:300px;
		}
	}
</style>
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
											<li class="active">
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

	<div role="main" class="main">

		<section class="page-header">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb broodcrumb">
							<li><a href="index.php" class="broodcrumb">Home</a></li>
							<li class="active">Kamers</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h1>Kamers</h1>
					</div>
				</div>
			</div>
		</section>

		<div class="container">

			<ul class="nav nav-pills sort-source" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
				<li data-option-value="*" class="active"><a href="#">Show All</a></li>
				<?php 
				$sql = "SELECT * FROM kamerspagina ORDER BY id ASC";
				$result = mysqli_query($con,$sql);
				if(mysqli_num_rows($result)>0){
					while($row=mysqli_fetch_assoc($result)){
						?>
						<li data-option-value=".<?php echo $row['kamertype']; ?>"><a href="#"><?php echo $row['kamertype']; ?></a><?php }} ?></li>
					</ul>

					<div class="row">

						<div class="sort-destination-loader sort-destination-loader-showing">
							<ul class="portfolio-list sort-destination" data-sort-id="portfolio">
								<?php 
								$sql = "SELECT * FROM kamerspagina ORDER BY id ASC";
								$result = mysqli_query($con,$sql);
								if(mysqli_num_rows($result)>0){
									while($row=mysqli_fetch_assoc($result)){?>
									<li class="col-md-12 isotope-item mt-xl <?php echo $row['kamertype']; ?>">
										<div class="row">
											<div class="col-md-6">
												<div class="portfolio-item">
													<a href="">
														<span class="thumb-info thumb-info-no-zoom thumb-info-lighten">
															<span class="thumb-info-wrapper">
																<img src="<?php echo $row['photo_path']; ?>" class="img-responsive kamer-tn" alt="">
																<span class="thumb-info-action">
																	<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
																</span>
															</span>
														</span>
													</a>
												</div>
											</div>
											<div class="col-md-6">
												<div class="portfolio-info">
													<div class="row">
														<div class="col-md-12 center">
														</div>
													</div>
												</div>

												<h4 class="heading-primary"><?php echo $row['kamertype']; ?> Kamer</h4>
												<p class="mt-xlg info"><?php echo $row['kamer_info']; ?></p>

												<ul class="portfolio-details">
													<li>
														<p><strong>Bed(den): <?php echo $row['bedden']; ?></strong></p>
														<p><strong>Prijs: <?php echo $row['prijs']; ?></strong></p>
													</li>
												</ul>										
											</div>
										</div>
									</li><?php }} ?>							
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
				<script type="text/javascript">
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
