<?php
$servername = "athena.nitc.ac.in";
$username = "b140390cs";
$password = "b140390cs";
$dbname = "db_b140390cs";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

?>
