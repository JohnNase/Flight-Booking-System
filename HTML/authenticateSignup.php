<?php
// Establish database connection
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'webproject';

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['signup'])) {
    $fullName = $_POST['full_name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sendNotifications = isset($_POST['send_notifications']) ? 1 : 0;

    // Sanitize and validate the user input
    $fullName = $conn->real_escape_string($fullName);
    $username = $conn->real_escape_string($username);
    $password = $conn->real_escape_string($password);

    // Perform any additional validation or checks if needed

    // Insert the user's data into the database
    $sql = "INSERT INTO passengers (passenger_fullname, passenger_username, passenger_password,passenger_notifications) VALUES ('$fullName', '$username', '$password', $sendNotifications)";
    if ($conn->query($sql) === TRUE) {
        // User registered successfully, redirect to success page
        header("Location: http://localhost/Flight-Booking-System/HTML/passenger_page.html");
        exit();
    } else {
        // Error occurred while inserting data, handle the error
        $error = "Error: " . $conn->error;
        header("Location: signup.php?error=" . urlencode($error));
        exit();
    }
}

$conn->close();
?>
