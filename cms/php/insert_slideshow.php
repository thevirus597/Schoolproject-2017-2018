<?php 
session_start();
include 'dbconnection.php';


if (isset($_POST['upload'])) {
	$caption = $_POST['caption'];
	$upload = $_POST['upload'];
	$file = $_FILES["image"];
	$error = array();
	$file_name = $_FILES['image']['name'];
	$file_size = $_FILES['image']['size'];
	$file_tmp = $_FILES['image']['tmp_name'];
	$file_type = $_FILES['image']['type'];

	$tmp = explode('.', $file_name);
	$file_ext = strtolower(end($tmp));

	$extensions = array("jpeg", "jpg", "png");
	if(in_array($file_ext, $extensions) == false){
		$error[] = "Please choose the image format bla bla bla";
	}
	print_r($error);
	if(empty($error) == true){
		$path = "../../img/slideshow/" . $file_name;
		$photopath = "img/slideshow/" . $file_name;
		move_uploaded_file($file_tmp, $path);


		$sql = "INSERT INTO homepagina (photo_path,photo_caption) VALUES ('$photopath','$caption')";
		$query = $con->query($sql);
		if($query){
			header('Location:../dashboard_home.php');
		}else{
			echo'failed';
		}
	}

	else{
			// echo'<script>console.log("PHP error: ' . $error . '")</script>';
	}
}


?>