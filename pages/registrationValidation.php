<?php
	// function file is included
	include('../functions/function.php');

	if(isset($_POST['contact']) && isset($_POST['address']) &&isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['rollNo']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['DOJ']) && isset($_POST['branch']) && isset($_POST['semester'])){

			// assigning value from the form to the variables
			$firstname 	= 	$_POST['firstName'];
			$lastname 	= 	$_POST['lastName'];
			$rollno 	= 	$_POST['rollNo'];
			$email 		= 	$_POST['email'];
			$password 	= 	$_POST['password'];
			$yoj 		= 	$_POST['DOJ'];
			$branch 	= 	$_POST['branch'];
			$semester 	= 	$_POST['semester'];
			$contact 	= 	$_POST['contact'];
			$address 	= 	$_POST['address'];

			// checking for the injection
			$firstname	= InjectionCheck($firstname);
			$lastname 	= InjectionCheck($lastname);
			$rollno		= InjectionCheck($rollno);
			$email		= InjectionCheck($email);
			$password	= InjectionCheck($password);
			$yoj		= InjectionCheck($yoj);
			$semester	= InjectionCheck($semester);
			$contact 	= InjectionCheck($contact);
			$address 	= htmlspecialchars($address);

			$password = md5($password);

			// Connecting to the database
			include '../connection/dbCon.php';

			// query to check for data duplication

			$query = "select Email, RollNo
								from studentDetails where Email = '$email' OR RollNo = '$rollno'";

			$runQuery = mysql_query($query);

			//check the number of rows found in the database

			if(mysql_num_rows($runQuery) > 0){
				echo "Email or roll no already exists";
			}else{
				// query to insert into student details

				$query = "INSERT INTO studentdetails (FirstName, LastName, RollNo, Email, Semester, yearOfJoining, Password, Branch, contactNum, address)
				 VALUES ('$firstname', '$lastname', '$rollno', '$email', '$semester', '$yoj', '$password', '$branch', '$contact', '$address')";


				$runQuery = mysql_query($query);
				if($runQuery){
					echo "Data successfuuly inserted into the databse";
				}else{
					echo "Some problem occured while inserting the data into student table".mysql_error();
				}
			}

		}
?>
