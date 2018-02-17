<?php
$con = mysqli_connect("localhost","root","","project_cms");


//connection checked
if (!$con) {
	die("Connectie Mislukt ".mysqli_connect_error());
}

?>
