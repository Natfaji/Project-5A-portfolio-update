<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create and check connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (mysqli_connect_errno()) {
	echo "Error while connecting to database";
	exit;
}
