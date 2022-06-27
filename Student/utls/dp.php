<?php 

$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "wt2020";

$conn = new mysqli($serverName, $userName, $password, $databaseName);

if($conn->connect_error) {
	die("Connection failed!");
}
