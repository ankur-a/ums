<?php

		
	//function to check for sql injectiion

	function InjectionCheck($value){
	    $value = htmlspecialchars($value);
	    $value = trim($value);

	    return $value;
	}

	  
	// function to get user firstname and lastname
	function findUser($rollno){

	  	$query = "select FirstName, LastName from studentDetails where RollNo = '$rollno'";
	  	$runQuery = mysql_query($query);

	  	$row = mysql_fetch_array($runQuery);

	  	return $row['FirstName']." ".$row['LastName'];
	}

	//function to get user batch and branch
	function findBatch($rollno){

		$query = "select yearOfJoining, Branch from studentDetails where RollNo = '$rollno'";
	  	$runQuery = mysql_query($query);

	  	$row = mysql_fetch_array($runQuery);

	  	return "Batch: ". $row['yearOfJoining'].", Branch: ".$row['Branch'];

	}



 ?>
