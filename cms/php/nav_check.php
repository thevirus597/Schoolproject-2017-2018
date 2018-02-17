<?php
include'dbconnection.php';
if(!isset($_SESSION)){
	session_start();
}
$id = $_SESSION['id'];
$sql = mysqli_query($con,"SELECT user_level FROM cms_user WHERE id='$id'");
$currentpage = basename($_SERVER['PHP_SELF'],'.php');
while ($row = mysqli_fetch_assoc($sql)) {
	$level = $row['user_level'];
}
// if ($currentpage == 'Admin' & $level == 'Beheerder') {
//   header("Location: home.php?NoAuth");
//   mysqli_exit();

// }

if ($level == 'Admin') {
	include 'nav_admin.php';
}
elseif ($level == 'Beheerder' ) {
	include 'nav_beheerder.php';
}
// else {
// header("Location: index.php?NoAuth");
// }




?>