<?php 
// Establish database connection
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'webproject';
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['signup'])) {
    $fullName = $_POST['full_name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $verify_password =  $_POST['verify-password'];
    $email = $_POST['email'];
    $phone = $_POST['phone']; 
    $countryCode = $_POST['country'];
    $phoneno = '+' . $countryCode . $phone;
    $sendNotifications = isset($_POST['send_notifications']) ? 1 : 0;

    // Sanitize and validate the user input
    $fullName = $conn->real_escape_string($fullName);
    $username = $conn->real_escape_string($username);
    $password = $conn->real_escape_string($password);
    $email =  $conn->real_escape_string($email);
    $phoneno = $conn->real_escape_string($phoneno);
    $verify_password = $conn->real_escape_string($verify_password);
  

    if($password == $verify_password ){
        // Insert the user's data into the database
        // Check if the username already exists
$checkQuery = "SELECT * FROM passengers WHERE passenger_username = '$username'";
$result = $conn->query($checkQuery);

if ($result->num_rows > 0) {
    // Username already exists, handle the error
    $error = "Username already exists.";
    header("Location: signup.php?error=" . urlencode($error));
    exit();
} else {
    $sql = "INSERT INTO passengers (passenger_fullname, passenger_username, passenger_email, passenger_password, passenger_phone, passenger_notifications) VALUES ('$fullName', '$username', '$email', '$password', '$phoneno', '$sendNotifications')";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // Check if the insertion was successful
    if ($stmt->affected_rows > 0) {
        // User registered successfully, redirect to success page
        header('Location: clientDashboard.php');
        exit();
    } else {
        // Error occurred while inserting data, handle the error
        $error = "Error: " . $conn->error;
        header("Location: signup.php?error=" . urlencode($error));
        exit();
    }
}

}
else{
    $error = "Passwords don't match.";
    header("Location: signup.php?error=" . urlencode($error));
    exit();
}
}

$conn->close();
?>