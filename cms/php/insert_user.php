<?php
session_start();

include 'dbconnection.php';
 
      $name = $_POST['name'];
      $surname = $_POST['surname'];
      $username = $_POST['username'];
      $password = $_POST['password'];
      $level = $_POST['level'];
      $insert = $_POST['insert'];

        // $name = trim($name," ");
        // $surname = trim($surname," ");
        // $username = trim($username," ");
        // $password = trim($password," ");
        

        // $name=preg_replace('/\s+/', '', $name); //strip whitespaces(spaties)
        // $surname=preg_replace('/\s+/', '', $surname); //strip whitespaces(spaties)
        // $username=preg_replace('/\s+/', '', $username); //strip whitespaces(spaties)
        // $password=preg_replace('/\s+/', '', $password); //strip whitespaces(spaties)


        $encrypt_pass = password_hash($password, PASSWORD_DEFAULT);
        if(isset($insert)){
          $sql = "INSERT INTO cms_user(surname, name, username, password, user_level)
          VALUES('$surname', '$name', '$username', '$encrypt_pass', '$level')";
          $result = $con->query($sql);
          header('Location:../dashboard_gebruikers.php');
          


         }
         

 ?>
