<!--Connects and logs into the database. Displays error message if connection fails.-->
<?php
    define('DB_HOST', '168.16.222.102');
	define('DB_NAME', 'capstone-eval-tool'); 
	define('DB_USER','capstone-eval-tool-user'); 
	define('DB_PASSWORD','Ca5tN0tJuDgET*3@ch!'); 

	$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
	$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
?>