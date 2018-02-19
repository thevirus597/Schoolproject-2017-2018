<?php 
session_start();
include 'dbconnection.php';

if ($_POST) {
	$name = $_POST['event_name'];
	$about = $_POST['about_event'];
	$cover = $_FILES['event_cover'];
	$cover_name = $_FILES['event_cover']['name'];
	$cover_size = $_FILES['event_cover']['size'];
	$cover_tmp = $_FILES['event_cover']['tmp_name'];
	$cover_type = $_FILES['event_cover']['type'];
	$cover_Error = $_FILES["event_cover"]["error"];

	$coverext = explode('.', $cover_name);
	$coverextension = strtolower(end($coverext));

	$coverextensions = array("jpeg", "jpg", "png");
	if (in_array($coverextension, $coverextensions)) {
		if ($cover_Error === 0) {
			$coverpath= "../../img/evenementen/covers/".$cover_name;
        $coverphotopath="img/evenementen/covers/".$cover_name; //DB
        move_uploaded_file($cover_tmp, $coverpath);
    }else {
    	echo "Er is iets misgegaan!(cover)";
    }
}	

$sql1 = "INSERT INTO evenementenpagina (evenement_naam,over_evenement,cover_photo) VALUES ('$name','$about','$coverphotopath')";
if ($con->query($sql1) === TRUE) {
	$last_id = $con->insert_id;

	for ($i=0; $i < count($_FILES["event_photo"]["name"]); $i++) {
		echo "I:". $i; 

		$photo = $_FILES["event_photo"];
		$photo_name = $_FILES["event_photo"]["name"]{$i};
		$photo_tmp = $_FILES["event_photo"]["tmp_name"]{$i};
		$photo_size = $_FILES["event_photo"]["size"]{$i};
		$photo_type = $_FILES["event_photo"]["type"]{$i};
		$photo_Error = $_FILES["event_photo"]["error"]{$i};


		$photoExt = explode('.', $photo_name);
		$photoActualExt = strtolower(end($photoExt));

		$allowed = array("jpg","jpeg","png");


		if(in_array($photoActualExt, $allowed)){
			if ($photo_Error === 0) {
				$photopath = "../../img/evenementen/" . $photo_name;
			$photospath = "img/evenementen/" . $photo_name; //DB
			move_uploaded_file($photo_tmp, $photopath);

			
			echo $name." ".$about." ".$coverphotopath ."   \n";

			echo "       ID: ". $last_id."  ".$photospath ."   ";
			$sql2 = mysqli_query($con,"INSERT INTO evenementen(evenement_id,photo_path) VALUES('$last_id','$photospath')");
			if ($sql2) {
					header('Location:../dashboard_evenementen.php');
			}
			// else {
			// 	echo mysqli_error($con);
			// }
		}
		// else {
		// 	echo mysqli_error($con);
		// }
	}
	// else {
	// 	echo "Er is iets misgegaan!(photos)";
	// }
}
// else {
// 	echo "Deze file mag niet opgeload worden!";
// }
}
}

?>