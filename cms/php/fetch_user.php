<?php 
include 'dbconnection.php';

if(isset($_POST["id"])){
	
	$id = $_POST["id"];
	$query = "SELECT * FROM cms_user WHERE id = '$id'";
	$result = mysqli_query($con, $query);
	$row = mysqli_fetch_array($result);
	echo json_encode($row);
}
?>