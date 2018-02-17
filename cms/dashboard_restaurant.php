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
				<h2>Restaurant</h2>
				<ol class="breadcrumb">
					<li>
						<a href="home.php">Home</a>
					</li>
					<li class="active">
						<strong>Restaurant</strong>
					</li>
				</ol>
			</div>	
		</div>
		<div class="ibox-content no-padding animated fadeInRight">
			<?php 
			$sql = "SELECT * FROM restaurantpagina ORDER BY id ASC";
			$result = mysqli_query($con,$sql);
			if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_assoc($result)){ ?>
				<form action="php/updaterestaurantinfo.php" method="POST">
					<textarea name="text" class="note-codable summernote"><?php echo $row['restaurant_info']; ?></textarea>
				</div>
				<input type="test" name="id" id="id" class="hidden id" value="<?php echo $row['id']; ?>">
				<input type="submit" name="update" id="update" class="update" value="Update">
			</form><?php }} ?>
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

	<!-- SUMMERNOTE -->
	<script src="js/plugins/summernote/summernote.min.js"></script>


	<script>
		$(document).ready(function(){

			$('.summernote').summernote();

		});
		var edit = function() {
			$('.click2edit').summernote({focus: true});
		};
		var save = function() {
            var aHTML = $('.click2edit').code(); //save HTML If you need(aHTML: array).
            $('.click2edit').destroy();
        };
    </script>

    <script>
    	$(function() {
    		$('.restaurant').addClass('active');
    	});
    </script>

</body>
</html>