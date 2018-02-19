<?php
if(!isset($_SESSION)){
	session_start();
	session_regenerate_id();
}

if(isset($_SESSION['id'])){
}else{
	header("Location: index.php");
}
?>
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

	<link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">

	<link rel="stylesheet" href="css/plugins/sweetalert/sweetalert.css" />
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


		<div class="content wrapper wrapper-content animated fadeInRight">
			<div class="row">
				<div class="col-lg-12">
					<div class="ibox float-e-margins">
						<div class="ibox-title">
							<h5>Deals</h5>
							<div class="ibox-tools">
								<a class=" ">
									<button type="button" name="insert" id="insert" data-toggle="modal" data-target="#add_deal_Modal" class="btn btn-warning btn-xs">
										<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Toevoegen
									</button>
								</a>
							</div>
						</div>
						<div class="ibox-content">

							<div class="table-responsive">
								<table id="dealtable" class="table table-striped table-bordered table-hover dataTables-example dealtable" >
									<thead>
										<tr>
											<th>#</th>
											<th>Deal</th>
											<th>Acties</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$sql = mysqli_query($con, 'SELECT * FROM dealspagina');
										if (mysqli_num_rows($sql) > 0) {
											while ($row = mysqli_fetch_assoc($sql)) {
												?>
												<tr class="gradeX">
													<td><?php echo $row['id']; ?></td>
													<td><?php echo $row['deal_naam']; ?></td>    
													<td><button type="button" rel="tooltip" title="Bijwerken" id='<?php echo $row['id'] ?>' data-toggle="modal" data-target="#edit_deal_Modal" class="btn btn-success btn-simple btn-xs update">
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
											<th>Deal</th>
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

	<div id="add_deal_Modal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Deal Toevoegen</h4>
				</div>
				<div class="modal-body">
					<form id="add_deal" action="php/insert_deal.php" method="POST" enctype="multipart/form-data">
						<label>Deal Naam</label>
						<input type="text" name="name" id="name" data-msg-required="Vul dit veld in!" class="form-control" required="true" />
						<br/>
						<label>Over Deal</label>
						<textarea name="about_deal" id="about_deal" data-msg-required="Vul dit veld in!" class="form-control" required="true"></textarea>
						<br/>
						<label>Photo</label>
						<input type="file" name="image" id="image" data-msg-required="Vul dit veld in!" class="form-control" required="true"/>
						<br/>
						<input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />
					</form>
				</div>
			</div>
		</div>
	</div>

	<div id="edit_deal_Modal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Deal bewerken</h4>
				</div>
				<div class="modal-body">
					<form  method="POST" id="edit_deal" action="php/update_deal.php" enctype="multipart/form-data">
						<center><img src="" alt="" class="center img-thumbnail image-tn"></center>
						<br/>
						<label>Deal Naam</label>
						<input type="text" name="name" id="name" data-msg-required="Vul dit veld in!" class="form-control name" required="true" />
						<br/>
						<label>Over Deal</label>
						<textarea name="about_deal" id="about_deal" data-msg-required="Vul dit veld in!" class="form-control about_deal" required="true"></textarea>
						<br/>
						<label>Photo</label>
						<input type="file" name="image" id="image" data-msg-required="Vul dit veld in!" class="form-control" required="true"/>
						<br/>
						<div>
							<input hidden type="text" name="id" id="id" class="id" />
						</div>                               
						<br>
						<input type="submit" name="update" id="update" value="Update" class="btn btn-success" />
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Mainly scripts -->
	<script src="js/plugins/sweetalert/sweetalert.min.js"></script>
	<script src="js/jquery-2.1.1.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
	<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="js/plugins/jeditable/jquery.jeditable.js"></script>

	<!-- Custom and plugin javascript -->
	<script src="js/inspinia.js"></script>
	<script src="js/plugins/pace/pace.min.js"></script>

	<script src="js/plugins/dataTables/datatables.min.js"></script>

	
	<script src="js/jquery.validation/jquery.validation.min.js"></script>


	<script src="php/deals.js"></script>

	<script>
		function fnClickAddRow() {
			$('#editable').dataTable().fnAddData( [
				"Custom row",
				"New row",
				"New row",
				"New row",
				"New row" ] );

		}
	</script>
	<script>
		$(function() {
			$('.deals').addClass('active');
		});

		$('#add_deal').validate();
		$('#edit_deal').validate();

	</script>
</body>
</html>