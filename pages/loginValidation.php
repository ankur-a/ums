<?php
  include '../functions/function.php';
  if(isset($_POST['email']) && isset($_POST['password'])){
	  

    // creating variable to store the value from the form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Checking for the SQL Injection
    $email = InjectionCheck($email);
    $password = InjectionCheck($password);

    // Converting the Password into hash code
    $password = md5($password);

    // connecting to  the database
    include_once '../connection/dbCon.php';

    //Query to find a particular rows
    $query = "select RollNo from studentDetails where Email='$email' AND Password = '$password'";
    $runQuery = mysql_query($query);

    // checking whether the email and password matched or NoRewindIterator

    if(mysql_num_rows($runQuery)==1){

      // If condition id satisfied then create a Session
      session_start();

      //fetching the row for the given query
      $row = mysql_fetch_array($runQuery);

      //creating a seeion variable to store current Session
      $_SESSION['rollno'] = $row['RollNo'];

      header("Location: home.php");
      die();
    }else{
      echo "Incorrect credentials!!!";
    }


  }
  else{
	  echo "Unathorized Access";
	  echo $_POST;
  }


 ?>
