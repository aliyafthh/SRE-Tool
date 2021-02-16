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

$query = $mysqli->query("SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'requirements'");

while($row = $query->fetch_assoc()){
    $result[] = $row;
}

// Array of all column names
$columnArr = array_column($result, 'COLUMN_NAME');

$sql = "SELECT * FROM requirements";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {

  echo "<table><tr>";
  foreach($columnArr as $string){
    echo "<th>$string</th>";
  }
  echo "</tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    foreach($columnArr as $string){
      echo "<td>" . $row[$string] . "</td>";
    }
    echo "</tr>";
  }

    echo "</table>";
} else {
    echo "0 results";
}

$mysqli->close();
?>