<H1> Hello </H1>

<?php

$servername = "mysql";
$username = "docker_user";
$password = "docker_password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";



phpinfo();

?>