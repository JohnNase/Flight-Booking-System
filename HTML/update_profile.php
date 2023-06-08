<?php
require_once('config.php'); // Include the database configuration file
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_SESSION['username']; // Assuming the username is stored in the session
    
    // Retrieve the submitted form data
    $fullName = $_POST['full_name'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phone_number'];
    $newUsername = $_POST['username']; // Get the new username
    
    try {
        // Update the user data in the database
        $stmt = $conn->prepare('UPDATE passengers SET passenger_fullname = ?, passenger_email = ?, passenger_phone = ?, passenger_username = ? WHERE passenger_username = ?');
        $stmt->bind_param('sssss', $fullName, $email, $phoneNumber, $newUsername, $username);
        
        $stmt->execute();
        
        // Update the username in the session if it has changed
        if ($newUsername !== $username) {
            $_SESSION['username'] = $newUsername;
        }
        
        echo 'Profile updated successfully!';
    } catch (mysqli_sql_exception $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo 'Invalid request!';
}
?>
