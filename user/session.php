<?php
   include('../config/config.php');
   session_start();

   $user_check = $_SESSION['login_user_pet'];
   
   $ses_sql = mysqli_query($mysqli,"select username from admin where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user_pet'])){
      header("location:../index.php");
   }
?>