<?php
if(!isset($_SESSION)){
	session_start();
	session_regenerate_id();
}?>
<?php include 'php/dbconnection.php';
include'php/nav_check.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>FEVIE STER | CMS</title>


	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="font-awesome/css/font-awesome.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	<link href="css/plugins/summernote/summernote.css" rel="stylesheet">
	<link href="css/plugins/summernote/summernote-bs3.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
	<div id="wrapper">
		<div class="row wrapper border-bottom white-bg page-heading">
			<div class="col-lg-10">
				<h2>Deals</h2>
				<ol class="breadcrumb">
					<li>
						<a href="home.php">Home</a>
					</li>
					<li class="active">
						<strong>Deals</strong>
					</li>
				</ol>
			</div>
		</div>
	</div>


	<!-- Mainly scripts -->
	<script src="js/jquery-2.1.1.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
	<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

	<!-- Custom and plugin javascript -->
	<script src="js/inspinia.js"></script>
	<script src="js/plugins/pace/pace.min.js"></script>

    <script>
        $(function() {
            $('.deals').addClass('active');
      });
  </script>
</body>
</html>