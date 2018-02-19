<?php
session_start();

include 'dbconnection.php';

if (isset($_POST['update'])) {
  $name = $_POST['name'];
  $about = $_POST['about_deal'];
  $id = $_POST['id'];

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
    $path = "../../img/deals/" . $file_name;
    $photopath = "img/deals/" . $file_name;
    move_uploaded_file($file_tmp, $path);
    
    $sql = mysqli_query($con,"UPDATE dealspagina
     SET deal_naam='$name',
     over_deal='$about',
     photo_path='$photopath'
     WHERE id='$id'");
    
    
    if ($sql) {
      echo "success";
      header('Location:../dashboard_deals.php');
    }else{
      echo mysqli_error($con);
    } 
  }else {
    echo "Er is iets misgegaan!";
  }
}else {
  echo "Deze file mag niet opgeload worden!";
} 

?>