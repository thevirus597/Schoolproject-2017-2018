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

  $stmt = $con->prepare('SELECT * FROM cms_user WHERE username =?'); //Prepared Statement For Extra Security
  $stmt->bind_param('s',$username);

  $username = $username;
  $stmt->execute();
  $result = $stmt->get_result();
  $rows= $result->num_rows; //Get number of rows

  if ($rows > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
     $hash_pwd = $row['password'];
     $id = $row['id'];
     }
     $hash = password_verify($password,$hash_pwd);

     if ($hash == 0) {
       header("");
     }else {
       $stmt = $con->prepare('SELECT * FROM  cms_user WHERE username =? AND password =?'); //Prepared Statement For Extra Security
       $stmt->bind_param('ss',$username,$password);

       $username = $username;
       $password = $hash_pwd;
       $stmt->execute();
       $result = $stmt->get_result();
       $rows= $result->num_rows; //Get number of rows

        if ($rows == 0) {
          
        }
         else {
             $_SESSION['id'] = $id;
             header("Location: ../dashboard_home.php");
           }
         }
  }else {
    
  }

  }






?>
