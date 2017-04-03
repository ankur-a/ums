<?php

	include '../connection/dbCon.php';

	$facultName = array(
			"Aparajita Ojha", "Atul Gupta", "Ayan Seal",
			"Kusum Kumari Bharti", "Manish Kumar Bajpai",
			"Pritee Khanna", "Ruchir Gupta", "Sraban Kumar Mohanty",
			"Vinod Kumar Jain", "Anil Kumar", "Dinesh Kumar V", 
			"Biswajeet Mukherjee", "Jawar Singh", "Manoj Singh Parihar",
			"Matadeen Bansal", "P.N Kondekar", "Prabin Kumar Padhy", 
			"Sachin Kumar Jain", "Varun Bajaj", "Amarnath M.",
			"Goutam Dutta", "H. Chelladurai", "Mohd. Zahid Ansari",
			"Pavan Kumar Kankar", "Prashant K. Jaan", "Puneet Tandon",
			"Sujoy Mukherjee", "Sunil Agrawal", "Tanuja Sheorey", 
			"Vijay Kumar Gupta", "Amaresh Chandra Mishra", "Asish K. Kundu",
			"Bhupendra Gupta", "Deepmala", "Lokendra Balyan", "Mamta Anand", 
			"Manoj Kumar Panda", "Mukesh Kumar Roy", "Neeraj K. Jaiswal",
			"Nihar Kumar Mahato", "Nihar Ranjan Jena", "Subir Lamba",
			"Yashpal Singh Katharria", "Prabir Mukhopadhyay", "Sangeeta Pandit",
			"Shekhar Chatterjee"
			);
	
	$facultyEmail = array(
			"AOjha", "atul", "ayan", "kusum", "mkbajpai", "pkhanna",
			"rgupta", "sraban", "vkjain", "anilk", "dineshk", "b.mukherjee",
			"jawar", "mparihar", "mbansal", "pnkondekar", "prabin16",
			"skjain", "varunb", "amarnath", "gd", "chella", "zahid", 
			"kankar", "pkjain", "ptandon", "sujoy", "sa", "tanush",
			"vkgupta", "amresh", "asish.kundu", "bhupen", "deepmala",
			"balyan", "manand", "mkpanda", "mkroy", "neeraj", "nihar",
			"nrjena", "subirs", "yashpalk", "prabir", "s.pandit", "chatterjees"
			);

/*	for($i=0;$i<sizeof($facultyEmail); $i++)
{
	$query = "insert into faculty(Name, Email) values('$facultName[$i]', '$facultyEmail[$i]')";
	mysql_query($query);
}*/

	$courseCode = array(

	"NS101", "NS102", "HS101", "ES101", "ES102", "PR101"


	);
	$courseName = array(

	"Mathematics", "Engineering Mechanics", "Effective Communication Skills", "Fundamentals of Electrical & Electronics Engineering", "Fundamentals of Computing", "project"

	);

	$courseInstructor = array(

		"Nihar Kumar Mahato | Deepmala", "Mukesh Kumar Roy | Yashpal Singh Katharria", ""

	);
?>