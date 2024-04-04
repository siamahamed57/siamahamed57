<?php
$host = "localhost"; // Host name
$username = "root"; // MySQL username
$password = ""; // MySQL password
$database = "testing"; // Name of the database

// Create connection
$con = new mysqli($host, $username, $password, $database);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>
