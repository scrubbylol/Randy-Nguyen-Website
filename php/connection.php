<?php
	$servername = "192.168.0.10"; //replace it with your database server name
	$username = "dotf";  //replace it with your database username
	$password = "dotf";  //replace it with your database password
	$dbname = "dotf_hs";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
?>