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
				<h2>Evenementen</h2>
				<ol class="breadcrumb">
					<li>
						<a href="home.php">Home</a>
					</li>
					<li class="active">
						<strong>Evenementen</strong>
					</li>
				</ol>
			</div>
		</div>
		<div class="content wrapper wrapper-content animated fadeInRight">
			<div class="row">
				<div class="col-lg-12">
					<div class="ibox float-e-margins">
						<div class="ibox-title">
							<h5>Gebruikers</h5>

							<div class="ibox-tools">
								<a class=" ">
									<button type="button" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning btn-xs">
										<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Toevoegen
									</button>
								</a>
							</div>
						</div>
						<div class="ibox-content">

							<div class="table-responsive">
								<table id="usertable" class="table table-striped table-bordered table-hover dataTables-example usertable" >
									<thead>
										<tr>
											<th>#</th>
											<th>Evenement</th>
											<th>Acties</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$sql = mysqli_query($con, 'SELECT * FROM cms_user');


										if (mysqli_num_rows($sql) > 0) {
											while ($row = mysqli_fetch_assoc($sql)) {
												?>
												<tr class="gradeX">
													<td><?php echo $row['id']; ?></td>
													<td><?php echo $row['id']; ?></td>
													
													<td><button type="button" rel="tooltip" title="Bijwerken" id='<?php echo $row['id'] ?>' data-toggle="modal" data-target="#update_evenement_Modal" class="btn btn-success btn-simple btn-xs update">
														<i class="fa fa-edit"></i>
													</button>
													<button type="button" rel="tooltip" title="Verwijderen"  id='<?php echo $row['id'] ?>' class="btn btn-danger btn-simple btn-xs delete">
														<i class="fa fa-times"></i>
													</button></td>
												</tr>   
												<?php
											}
										}

										?>                 
									</tbody>
									<tfoot>
										<tr>
											<th>#</th>
											<th>Evenement</th>											
											<th>Acties</th>
										</tr>
									</tfoot>
								</table>
							</div>

						</div>
					</div>
				</div>
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
			$('.evenementen').addClass('active');
		});
	</script>

</body>
</html>