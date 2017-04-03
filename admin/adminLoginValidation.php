<?php
	include '../functions/function.php';
	if(isset($_POST['email1']) && isset($_POST['password1'])){
		// creating variable to store the value from the form
		$email = $_POST['email1'];
		$password = $_POST['password1'];
		
		// Checking for the SQL Injection
		$email = InjectionCheck($email);
		$password = InjectionCheck($password);
		
		// Converting the Password into hash code
		$password = ($password);
		
		// connecting to  the database
		include_once '../connection/dbCon.php';
		
		//Query to find a particular rows
		$query = "select Email from admindetails where Email='$email' AND Password = '$password'";
		//echo $email . $password;
		$runQuery = mysql_query($query);
		//echo "runQuery";
		// checking whether the email and password matched or NoRewindIterator
		
		if(mysql_num_rows($runQuery)==1){

			// If condition id satisfied then create a Session
			session_start();

			//fetching the row for the given query
			$row = mysql_fetch_array($runQuery);

			//creating a seeion variable to store current Session
			$_SESSION['Email'] = $row['Email'];

			header("Location: home.php");
			die();
		}
		else{
			echo "Incorrect credentials!!!";
		}
	}
	else{
		echo "Unathorized Access";
		print_r($_POST);
	}
	
?>