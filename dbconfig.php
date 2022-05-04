<?php 
$conn = mysqli_connect('localhost','SaleManager','77!v(ZOzVlLSIAX1','glazesure');

if ($conn === false) {
	// If there is an error with the connection, stop the script and display the error.
	die('Failed to connect to MySQL: ' . mysqli_connect_error());
}
?>