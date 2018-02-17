<?php include 'php/dbconnection.php' ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CMS | USERS</title>
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
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
                                    <th>Naam</th>
                                    <th>Familienaam</th>
                                    <th>Gebruikersnaam</th>
                                    <th>Rechten</th>
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
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['surname']; ?></td>
                                        <td><?php echo $row['username']; ?></td>
                                        <td><?php echo $row['user_level']; ?></td>
                                        <td><button type="button" rel="tooltip" title="Bijwerken" id='<?php echo $row['id'] ?>' data-toggle="modal" data-target="#update_data_Modal" class="btn btn-success btn-simple btn-xs update">
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
                                <th>Naam</th>
                                <th>Familienaam</th>
                                <th>Gebruikersnaam</th>
                                <th>Rechten</th>
                                <th>Acties</th>
                            </tr>
                        </tfoot>
                    </table>
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
<script src="js/plugins/jeditable/jquery.jeditable.js"></script>

<script src="js/plugins/dataTables/datatables.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="php/user.js"></script>

<!-- Page-Level Scripts -->
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

</body>

</html>