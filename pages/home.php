<?php
  session_start();
  include '../connection/dbCon.php';
  include '../functions/function.php';

  if(isset($_SESSION['rollno'])){

      include '../includes/head.php';
    ?>


      <?php include '../includes/HomeHeader.php'; ?>

      <?php include '../includes/HomeSidebar.php';?>

      <?php include'../includes/HomeBottom.php'; ?>

<?php }else echo "Connection failed"?>
