<?php
$servername = "localhost:3366";
$username = "root";
$password = "";
$dbname = "new_project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else {
  echo "connection succesfull";
 }
?>