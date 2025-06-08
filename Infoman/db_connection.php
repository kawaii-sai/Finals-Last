<?php
$servername = "localhost"; // Change to your server name if needed
$username = "root"; // Default username for XAMPP
$password = ""; // Default password for XAMPP (leave empty)
$database = "kotsi_db"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully"; // Uncomment to test connection
?>
