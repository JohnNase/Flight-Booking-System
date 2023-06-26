<?php 
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
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
 
    $username = $conn->real_escape_string($username);
    $password = $conn->real_escape_string($password);

    
    $sql = "SELECT passenger_username, passenger_id FROM passengers WHERE passenger_username = '$username' AND passenger_password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) { 
        $row = $result->fetch_assoc();
        $user_id = $row['passenger_id'];
        $usernamei = $row['passenger_username'];
        $user_id = $conn->real_escape_string($user_id);
 
        $message = "Logged in successfully"; 
        
        $insertSql = "INSERT INTO Notifications (passenger_id, message, Notification_datetime)
        VALUES ('$user_id', '$message', NOW())";
        $conn->query($insertSql);
 
        $_SESSION['username'] = $usernamei;
        $expiry = time() + (30 * 24 * 60 * 60); 
        setcookie('username', $usernamei, $expiry, '/');
 
    if (isset($_SESSION['redirect_url'])) { 
        $redirect_url = $_SESSION['redirect_url'];
        unset($_SESSION['redirect_url']); 
        header("Location: $redirect_url");
        exit;
    }


        header('Location: clientDashboard.php');
        exit;
    } 
    
    else {
       
        $error = "Invalid username or password.";
        header("Location: login.php?error=" . urlencode($error));
        exit;
    }
} elseif (isset($_COOKIE['username']) && !isset($_SESSION['username'])) {
    
    $_SESSION['username'] = $_COOKIE['username'];
}
?>
