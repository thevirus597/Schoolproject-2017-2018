<?php
include 'dbconnection.php';

$del_id = $_POST['id'];
echo $del_id;
$sql = mysqli_query($con, "DELETE FROM homepagina WHERE id='$del_id'");
if(!$sql){
	echo "error";
}else{
	echo "success";
}

?>