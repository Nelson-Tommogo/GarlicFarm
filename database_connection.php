<?php
$host = "localhost"; // Database host
$username = "root"; // Database username
$password = "genius"; // Database password
$database = "HarvestHQ"; // Database name

// Create a connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Connection successful
echo "Connected to MySQL database successfully.";

// Close the connection
$conn->close();
?>
