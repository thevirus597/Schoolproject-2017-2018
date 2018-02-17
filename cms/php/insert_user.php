<?php
session_start();

include 'dbconnection.php';

if (isset($_POST['insert'])) {
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $encrypt_pass = password_hash($password, PASSWORD_DEFAULT);
  $level = $_POST['level'];
  $insert = $_POST['insert'];

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
    $path = "../img/" . $file_name;
    $photopath = "img/" . $file_name;
    move_uploaded_file($file_tmp, $path);
    
    $sql = "INSERT INTO cms_user(surname, name, photo, username, password, user_level)
    VALUES('$surname', '$name','$photopath' , '$username', '$encrypt_pass', '$level')";
    $result = $con->query($sql);
    
    
    if ($result) {
      echo "success";
      header('Location:../dashboard_gebruikers.php');
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

