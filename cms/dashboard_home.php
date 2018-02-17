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
</head>
<body>

    <div id="wrapper">
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Home</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="home.php">Home</a>
                    </li>
                </ol>
            </div>
        </div>
        <button type="button" name="upload" id="upload" data-toggle="modal" data-target="#add_slide_Modal" class="">Upload photo</button>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row"><?php while ($row = mysqli_fetch_assoc($sql)) {
                $photo = $row['photo_path'];?>
                <div class="col-md-4">
                    <div class="ibox">
                        <div class="ibox-content product-box">

                            <div class="product-imitation" >
                                <img id="slide_url_<?php echo $row['id'] ?>" src="../<?php echo $photo ?>" class="img-responsive">
                            </div>
                            <div class="product-desc">

                                <div class="product-name">
                                    <span id="slide_caption_<?php echo $row['id'] ?>"><?php echo $row['photo_caption']; ?></span>
                                </div>
                                <div class="m-t text-right">

                                    <button name="update" id='<?php echo $row['id'] ?>' class="btn btn-xs btn-outline btn-primary update_slide" data-toggle="modal" data-target="#edit_slide_Modal">Edit <i class="fa fa-long-arrow-right update"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><?php  }?>
            </div>
        </div>
    </div>
    <div id="add_slide_Modal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Slide Toevoegen</h4>
                </div>
                <div class="modal-body">
                    <form action="php/insert_slideshow.php" method="POST" enctype="multipart/form-data">
                        <label>Photo</label>
                        <input type="file" name="image" id="image" class="form-control" required="true" />
                        <br/>
                        <label>Caption</label>
                        <input type="text" name="caption" id="caption" class="form-control caption" required="true" />
                        <br/>
                        <br>
                        <input type="submit" name="upload" id="upload" value="Upload" class="btn btn-success" />
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="edit_slide_Modal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Slide Bewerken</h4>
                </div>
                <div class="modal-body">
                    <center><img id="slide_modal_image" src="" alt="" class="img-thumbnail"></center>
                    <br/>
                    <form action="php/update_slideshow.php" method="POST" enctype="multipart/form-data">
                        <input type="text" id="slide_modal_id" class="hidden" name="slide_id">
                        <label>Photo</label>
                        <input type="file" name="image" id="image" class="form-control image" required="true" />
                        <br/>
                        <label>Caption</label>
                        <input type="text" name="caption" id="slide_modal_caption" class="form-control caption" required="true" />
                        <br/>
                        <input type="text" name="id" id="id" class="id hidden" />
                        <br>
                        <input type="submit" name="update" id="update" value="Upload" class="btn btn-success" />
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
    <script>
        $(function() {
            $('.home').addClass('active');
      });
  </script>
</body>
</html>