<?php 
$conn = new mysqli('localhost','SaleManager','zn25)RN1x5q*Kp[2','glazesure');

if ($conn ->connect_error) {
	// If there is an error with the connection, stop the script and display the error.
	die('Failed to connect to MySQL: ' . $conn->connect_error);
}
?>