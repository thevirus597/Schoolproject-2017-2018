<?php
if(!isset($_SESSION)){
    session_start();
    session_regenerate_id();
}?>
<?php include 'php/dbconnection.php';
include'php/nav_check.php'; 
$sql = mysqli_query($con,"SELECT * FROM homepagina ORDER BY id ASC");?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>FEVIE STER | CMS</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">
</head>
<body>

    <div id="wrapper">
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Kamers</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="home.php">Home</a>
                    </li>
                    <li class="active">
                        <strong>Kamers</strong>
                    </li>
                </ol>
            </div>
            <div class="col-lg-2">

            </div>
        </div>
        <div class="content wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Kamers</h5>
                            <div class="ibox-tools">
                                <a class=" ">
                                    <button type="button" name="insert" id="insert" data-toggle="modal" data-target="#add_kamer_Modal" class="btn btn-warning btn-xs">
                                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Toevoegen
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">

                            <div class="table-responsive">
                                <table id="kamerstable" class="table table-striped table-bordered table-hover dataTables-example kamerstable" >
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Kamertype</th>
                                            <th>Acties</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = mysqli_query($con, 'SELECT * FROM kamerspagina');


                                        if (mysqli_num_rows($sql) > 0) {
                                         while ($row = mysqli_fetch_assoc($sql)) {
                                             ?>
                                             <tr class="gradeX">
                                                <td><?php echo $row['id']; ?></td>
                                                <td><?php echo $row['kamertype']; ?></td>       
                                                <td><button type="button" rel="tooltip" title="Bijwerken" id='<?php echo $row['id'] ?>' data-toggle="modal" data-target="#edit_kamer_Modal" class="btn btn-success btn-simple btn-xs update">
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
                                        <th>Kamertype</th>
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


</div>
<div id="add_kamer_Modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Slide Toevoegen</h4>
            </div>
            <div class="modal-body">
                <form action="php/insert_kamer.php" method="POST" enctype="multipart/form-data">
                    <label>Kamertype</label>
                    <input type="text" name="kamertype" id="kamertype" class="form-control" required="true" />
                    <br/>
                    <label>Kamer Info</label>
                    <textarea name="kamerinfo" id="kamerinfo" class="form-control" required="true"></textarea>
                    <br/>
                    <label>Prijs</label>
                    <input type="text" name="prijs" id="prijs" class="form-control caption" required="true" />
                    <br/>
                    <label>Photo</label>
                    <input type="file" name="image" id="image" class="form-control caption" required="true" />
                    <br/>
                    <label>Aantal bedden</label>
                    <input type="text" name="bedden" id="bedden" class="form-control caption" required="true" />
                    <br/>
                    <br>
                    <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />
                </form>
            </div>
        </div>
    </div>
</div>
<div id="edit_kamer_Modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Slide Toevoegen</h4>
            </div>
            <div class="modal-body">
                <form action="php/update_kamer.php" method="POST" enctype="multipart/form-data">
                    <center><img src="" alt="" class="center img-thumbnail image-tn"></center>
                    <label>Kamertype</label>
                    <input type="text" name="kamertype" id="kamertype" class="form-control kamertype" required="true" />
                    <br/>
                    <label>Kamer Info</label>
                    <textarea name="kamerinfo" id="kamerinfo" class="form-control kamerinfo" required="true"></textarea>
                    <br/>
                    <label>Prijs</label>
                    <input type="text" name="prijs" id="prijs" class="form-control caption prijs" required="true" />
                    <br/>
                    <label>Photo</label>
                    <input type="file" name="image" id="image" class="form-control caption image" required="true" />
                    <br/>
                    <label>Aantal bedden</label>
                    <input type="text" name="bedden" id="bedden" class="form-control caption bedden" required="true" />
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
<script src="js/jquery-2.1.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Flot -->
<script src="js/plugins/flot/jquery.flot.js"></script>
<script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="js/plugins/flot/jquery.flot.spline.js"></script>
<script src="js/plugins/flot/jquery.flot.resize.js"></script>
<script src="js/plugins/flot/jquery.flot.pie.js"></script>

<!-- Peity -->
<script src="js/plugins/peity/jquery.peity.min.js"></script>
<script src="js/demo/peity-demo.js"></script>

<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>

<!-- jQuery UI -->
<script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

<!-- GITTER -->
<script src="js/plugins/gritter/jquery.gritter.min.js"></script>

<!-- Sparkline -->
<script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>

<!-- Sparkline demo data  -->
<script src="js/demo/sparkline-demo.js"></script>

<!-- ChartJS-->
<script src="js/plugins/chartJs/Chart.min.js"></script>

<!-- Toastr -->
<script src="js/plugins/toastr/toastr.min.js"></script>

<script src="php/slideshow.js"></script>

<script src="php/kamers.js"></script>

<script src="js/plugins/jeditable/jquery.jeditable.js"></script>
<script src="js/plugins/dataTables/datatables.min.js"></script>




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
        $('.kamers').addClass('active');
    });
</script>
</body>
</html>