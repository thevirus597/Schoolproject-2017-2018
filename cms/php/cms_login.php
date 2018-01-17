<?php
session_start();
include 'dbconnection.php';

if (isset($_POST['login'])) {

  $username = mysqli_real_escape_string($con,$_POST['username']); //prevent SQL-Injection
  $password = mysqli_real_escape_string($con,$_POST['password']);

  $username = stripslashes($username);
  $password = stripslashes($password);

  $username = htmlspecialchars($username);
  $password = htmlspecialchars($password);

  $query = mysqli_query($con, "SELECT * FROM cms_user WHERE username='$username' AND password='$password'");
  $row = mysqli_fetch_assoc($query);
   $rows = mysqli_num_rows($query);

   if($rows>0 ){
      header('Location: ../dashboard_home.php');
  }else
   {

   }
   mysqli_close($con); // Closing connection
   }