<?php
	//Local Development Connection requirement
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "bank-system";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>
