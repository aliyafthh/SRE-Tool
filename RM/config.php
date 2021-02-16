<?php
$servername = "localhost";
$username = "sre";
$password = "Sretool2020";
$dbname = "sretool";

// Create connection
$mysqli = new mysqli($servername,$username,$password,$dbname);
// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>