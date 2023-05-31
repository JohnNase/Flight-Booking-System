<?php
// Start the session
session_start();

// Unset session variables
unset($_SESSION['username']);

// Destroy the session
session_destroy();

// Delete the user cookie (if set)
if (isset($_COOKIE['username'])) {
    setcookie('username', '', time() - 3600, '/');
}

// Redirect the user back to the login page or any other desired page
header('Location: http://localhost/Flight-Booking-System/index.php');
exit;
?>
