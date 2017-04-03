<?php
	

	define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_DATABASE', 'ums');


	mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die("Unable to connect to the database");
	mysql_select_db(DB_DATABASE) or die(mysql_error())  or die("Unable to connect to the database");
	
?>