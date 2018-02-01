<?php
session_start();

include 'dbconnection.php';
 if(isset($_POST["update"]))
 {
      $name = mysqli_real_escape_string($con, $_POST["name"]);
      $surname = mysqli_real_escape_string($con, $_POST["surname"]);
      $username = mysqli_real_escape_string($con, $_POST["username"]);
      $password = mysqli_real_escape_string($con, $_POST["password"]); //text password
      //password_hash
      $encrypt_pass = password_hash($password, PASSWORD_DEFAULT);

      $level = $_POST["level"];
      $id = $_POST['id'];

           $sql = mysqli_query($con,"UPDATE cms_user
           SET surname='$surname',
           name='$name',
           username='$username',
           password = '$encrypt_pass',
           user_level = '$level'
           WHERE id='$id'");
           header('Location:../dashboard_gebruikers.php');

      }

 ?>
