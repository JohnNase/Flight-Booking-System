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

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve username and password from the login form
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Sanitize and validate the user input
    $username = $conn->real_escape_string($username);
    $password = $conn->real_escape_string($password);

    // Query the database
    $sql = "SELECT passenger_username, passenger_id FROM passengers WHERE passenger_username = '$username' AND passenger_password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // User authenticated, retrieve the user ID
        $row = $result->fetch_assoc();
        $user_id = $row['passenger_id'];
        $user_id = $conn->real_escape_string($user_id);

        // Insert the login message into the database
        $message = "Logged in successfully"; 
        
        $insertSql = "INSERT INTO Notifications (passenger_id, message, Notification_datetime)
        VALUES ('$user_id', '$message', NOW())";
        $conn->query($insertSql);

        // Set the session and cookie with the user ID
        $_SESSION['username'] = $user_id;
        $expiry = time() + (30 * 24 * 60 * 60); // Set the expiration time to a desired duration (30 days in this example)
        setcookie('username', $user_id, $expiry, '/');

        // Check if there is a redirect URL stored in the session
    if (isset($_SESSION['redirect_url'])) {
        // Redirect the user back to the stored URL
        $redirect_url = $_SESSION['redirect_url'];
        unset($_SESSION['redirect_url']); // Remove the stored URL from the session
        header("Location: $redirect_url");
        exit;
    }

    // If there is no redirect URL, redirect the user to a default page

        header('Location: clientDashboard.php');
        exit;
    } 
    
    else {
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
