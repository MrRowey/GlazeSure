<?php 
$conn = new mysqli('localhost','SaleAdmin','Hs-m*P-YBy0[[Uym','glazesure');

if ($conn ->connect_error) {
	// If there is an error with the connection, stop the script and display the error.
	die('Failed to connect to MySQL: ' . $conn->connect_error);
}
?>