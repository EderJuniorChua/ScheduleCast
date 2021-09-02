<?php

$hostname= "localhost";
$username= "root";
$password = "";
$database = "testLogin";
$port = "3306";

$conn = mysqli_connect($hostname, $username, $password, $database, $port);

if (!$conn) {
	echo "Connection failed!";
}
?>