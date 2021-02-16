<?php
$databaseHost = 'localhost';
$databaseName = 'sretool';
$databaseUsername = 'sre';
$databasePassword = 'Sretool2020';

$mysqli = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName) or die(mysqli_error($mysqli)); 



?>