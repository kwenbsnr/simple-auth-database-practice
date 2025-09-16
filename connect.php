<?php
$host = "localhost";   // XAMPP default
$user = "root";        // XAMPP default user
$pass = "";            // XAMPP default has no password
$db   = "alumtrak_experiment"; // Your database name

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
