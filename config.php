<?php
	//Local Development Connection requirement
	// $servername = "localhost";
	// $username = "root";
	// $password = "";
	// $dbname = "bank-system";

	//Remote database connection
	$servername = "sql6.freemysqlhosting.net";
	$username = "sql6424599";
	$password = "BsQ5CdbIyr";
	$dbname = "sql6424599";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>
