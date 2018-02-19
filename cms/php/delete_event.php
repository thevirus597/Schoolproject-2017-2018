<?php
include 'dbconnection.php';

$del_id = $_POST['id'];
echo $del_id;
$sql1 = mysqli_query($con, "DELETE FROM evenementenpagina WHERE id='$del_id'");
$sql2 = mysqli_query($con, "DELETE FROM evenementen WHERE evenement_id='$del_id'");
// $sql = mysqli_query($con, "DELETE FROM evenementenpagina JOIN evenementen WHERE id='$del_id' ");
if(!$sql){
	echo "error";
}else{
	echo "success";
}

?>