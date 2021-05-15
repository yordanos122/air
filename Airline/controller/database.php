
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "air";
// Create connectio
$conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
 
if (!$conn) {
	# code...
	echo("Connection failed: " . mysqli_connect_error());	
} 

?>  
