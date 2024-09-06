<?php
$servername = "localhost"; // actual server name
$username = "root"; // actual username
$password = ""; // password
$dbname = "all_participents"; // actual database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
