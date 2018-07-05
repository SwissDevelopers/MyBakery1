<?php

$last_id = null;
$conn = null;
function connect(){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = 'order';
	// Create connection
	global $conn;
	$conn = new mysqli($servername, $username, $password,$database);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	
	
}




?>