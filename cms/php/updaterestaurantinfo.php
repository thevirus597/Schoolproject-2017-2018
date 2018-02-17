<?php 
session_start();

include 'dbconnection.php';

if (isset($_POST["update"])){
	$id = $_POST['id'];
	$info = $_POST['text'];
	$update = $_POST['update'];

	$sql = mysqli_query($con,"UPDATE restaurantpagina
		SET restaurant_info='$info'
		WHERE id='$id'");
	if ($sql) {
		echo "success";
		header('Location:../dashboard_restaurant.php');
	}else{
		echo mysqli_error($con);
	} 
}
?>