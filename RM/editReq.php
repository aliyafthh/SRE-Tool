<?php
require_once "config.php";
$query = $mysqli->query("SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'requirements'");

while ($row = $query->fetch_assoc()) {
    $result2[] = $row;
}

// Array of all column names
$columnArr = array_column($result2, 'COLUMN_NAME');
$count = count($columnArr);
$success=0;

if (isset($_POST['updateReq'])) {

    $id = $_POST['update_id'];

    for ($r = 1; $r < $count; $r++) {

        $rslt = "UPDATE requirements SET " .$columnArr[$r]."=\"" . $_POST[$columnArr[$r]] . "\" WHERE id=$id";
        $query_run = mysqli_query($mysqli, $rslt);
    }

    header("Location: index.php");
             
    
}
