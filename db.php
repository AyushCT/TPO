<?php

//Your Mysql Config
$servername = "localhost";
$username = "at";
$password = "root";
$dbname = "tpo";

//Create New Database Connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Check Connection
if ($conn->connect_error) {
	die("Connection Failed: " . $conn->connect_error);
}
