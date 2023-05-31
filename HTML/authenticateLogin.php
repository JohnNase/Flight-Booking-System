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

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve username and password from the login form
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Sanitize and validate the user input
    $username = $conn->real_escape_string($username);
    $password = $conn->real_escape_string($password);

    // Query the database
    $sql = "SELECT passenger_username FROM passengers WHERE passenger_username = '$username' AND passenger_password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // User authenticated, retrieve the user ID
        $row = $result->fetch_assoc();
        $user_id = $row['passenger_username'];

        // Set the session and cookie with the user ID
        $_SESSION['username'] = $user_id;
        $expiry = time() + (30 * 24 * 60 * 60); // Set the expiration time to a desired duration (30 days in this example)
        setcookie('username', $user_id, $expiry, '/');
        
        // Redirect the user to the desired page
        header('Location: clientDashboard.php');
        exit;
    } else {
        // Authentication failed, redirect back to login page with error message
        $error = "Invalid username or password.";
        header("Location: login.php?error=" . urlencode($error));
        exit;
    }
} elseif (isset($_COOKIE['username']) && !isset($_SESSION['username'])) {
    // Restore the session if the cookie exists and the session does not
    $_SESSION['username'] = $_COOKIE['username'];
}
?>
