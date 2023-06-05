<?php
// Database configuration
$hostname = 'localhost'; // Replace with your database hostname
$username = 'root'; // Replace with your database username
$password = ''; // Replace with your database password
$database = 'webproject'; // Replace with your database name

// Create a PDO instance for database connection
try {
    $conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
