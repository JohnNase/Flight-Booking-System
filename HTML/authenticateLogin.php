<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

// Establish database connection
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'webproject';

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve username and password from the login form
$username = trim($_POST['username']);
$password = trim($_POST['password']);

// Sanitize and validate the user input
$username = $conn->real_escape_string($username);
$password = $conn->real_escape_string($password);

// Query the database
$sql_admin = "SELECT * FROM administrator WHERE administrator_username = '$username' AND administrator_password = '$password'";
$result_admin = $conn->query($sql_admin);

$sql_passenger = "SELECT * FROM passengers WHERE passenger_username = '$username' AND passenger_password = '$password'";
$result_passenger = $conn->query($sql_passenger);

if ($result_admin->num_rows == 1) {
    // User authenticated, set session variable or issue token
    $_SESSION['username'] = $username;

    // Redirect user to appropriate page based on role
    header('Location: admin_page.php');
} elseif ($result_passenger->num_rows == 1) {
    // User authenticated, set session variable or issue token
    $_SESSION['username'] = $username;

    // Redirect user to appropriate page based on role
    header('Location: passenger_page.php');
} else {
    // Authentication failed, redirect back to login page with error message
    $error = "Invalid username or password.";
    header("Location: login.php?error=" . urlencode($error));
}

$conn->close();
?>
