<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jay";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn)
 {
  echo "bad";
} 


?>