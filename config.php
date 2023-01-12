<?php
$host = "localhost";
$user = "root";
$password = ""; 
$database="datapelajar";
$samb = mysqli_connect($host, $user, $password, $database);

// Check connection
if (!$samb) {
	echo "Connection failed!";
}
?>