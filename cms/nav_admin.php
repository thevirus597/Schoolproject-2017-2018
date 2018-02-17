<?php
if(!isset($_SESSION)){
  session_start();
  session_regenerate_id();
}
include 'php/dbconnection.php';

$id = $_SESSION['id'];
$sql = mysqli_query($con,"SELECT name,surname,photo,user_level FROM cms_user WHERE id='$id'");
while ($row = mysqli_fetch_assoc($sql)) {
    $voornaam = $row['name'];
    $familienaam = $row['surname'];
    $photo = $row['photo'];
    $level = $row['user_level'];
}
$currentpage = basename($_SERVER['PHP_SELF'],'.php');
?>
<div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                        <img alt="image" class="img-circle" src="<?php echo $photo ?>" width="50px" height="50px" />
                    </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $voornaam." ".$familienaam; ?></strong>
                        </span> <span class="text-muted text-xs block"><?php echo $level ?></span> </span> </a>
                    </div>
                    <div class="logo-element">
                        <i class="fa fa-star-o fa-3x" aria-hidden="true"></i>

                    </div>
                </li>
                <li class="home">
                    <a href="dashboard_home.php"><i class="fa fa-th-large"></i> <span class="nav-label">Home</span>
                    </a>                        
                </li>
                <li class="kamers">
                    <a href="dashboard_kamers.php"><i class="fa fa-bed"></i> <span class="nav-label">Kamers</span>
                    </a>                        
                </li>
                <li class="restaurant">
                    <a href="dashboard_restaurant.php"><i class="fa fa-cutlery"></i> <span class="nav-label">Restaurant</span>
                    </a>                        
                </li>
                <li class="evenementen">
                    <a href="dashboard_evenementen.php"><i class="fa fa-calendar"></i> <span class="nav-label">Evenementen</span>
                    </a>                        
                </li>
                <li class="deals">
                    <a href="dashboard_deals.php"><i class="fa fa-tags"></i> <span class="nav-label">Deals</span>
                    </a>                        
                </li>
                <li class="gebruikers">
                    <a href="dashboard_gebruikers.php"><i class="fa fa-user "></i> <span class="nav-label">Gebruikers</span>
                    </a>                        
                </li>
            </ul>

        </div>
    </nav>

    <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <span class="m-r-sm text-muted welcome-message">Welkom <?php echo $voornaam." ".$familienaam; ?></span>
                    </li>
                <!-- <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="">
                                </a>
                                <div class="media-body">
                                    <small class="pull-right">46h ago</small>
                                    <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right text-navy">5h ago</small>
                                    <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right">23h ago</small>
                                    <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                    <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="mailbox.html">
                                    <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li> -->
                <!-- <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="mailbox.html">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="profile.html">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="grid_options.html">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="notifications.html">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li> -->


                <li>
                    <a href="php/cms_logout.php">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
                <!-- <li>
                    <a class="right-sidebar-toggle">
                        <i class="fa fa-tasks"></i>
                    </a>
                </li> -->
            </ul>

        </nav>
    </div>