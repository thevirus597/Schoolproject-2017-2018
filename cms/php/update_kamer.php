<?php
session_start();

include 'dbconnection.php';

if (isset($_POST["update"])){
  $kamertype = $_POST['kamertype'];
  $kamerinfo = $_POST['kamerinfo'];
  $prijs = $_POST['prijs'];
  $bedden = $_POST['bedden'];
  $id = $_POST['id'];
  $update = $_POST['update'];

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
    print_r($error);
  }
  if(empty($error) == true){
   $path = "../../img/kamers/" . $file_name;
    $photopath = "img/kamers/" . $file_name;
    move_uploaded_file($file_tmp, $path);

    $sql = mysqli_query($con,"UPDATE kamerspagina
     SET kamertype='$kamertype',
     kamer_info='$kamerinfo',
     prijs='$prijs',
     photo_path='$photopath',
     bedden='$bedden'
     WHERE id='$id'");
          //$result = $con->query($sql);

    if ($sql) {
      echo "success";
      header('Location:../dashboard_kamers.php');
    }else{
      echo mysqli_error($con);
    } 
  }else {
    echo "Er is iets misgegaan!";
  }
}else{
  echo "Deze file mag niet opgeload worden!";
} 

?>
