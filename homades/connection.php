<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "homades";

	$conn = "mysqli_connect($servername, $username, $password, $database)" or die("connection failed: %s\n" . $conn->error);

	echo "connection established";

?>