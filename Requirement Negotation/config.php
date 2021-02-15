<?php
$databaseHost = 'localhost';
$databaseName = 'nego';
$databaseUsername = 'admin';
$databasePassword = 'user123';

$mysqli = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName) or die(mysqli_error($mysqli)); 



?>