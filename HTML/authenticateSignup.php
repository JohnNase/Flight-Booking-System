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
    $verify_password =  $_POST['verify-password'];
    $email = $_POST['email'];
    $phoneno = $_POST['phone'];
    $sendNotifications = isset($_POST['send_notifications']) ? 1 : 0;

    // Sanitize and validate the user input
    $fullName = $conn->real_escape_string($fullName);
    $username = $conn->real_escape_string($username);
    $password = $conn->real_escape_string($password);
    $email =  $conn->real_escape_string($email);
    $phoneno = $conn->real_escape_string($phoneno);
    // Perform any additional validation or checks if needed

    if($password == $verify_password){
          // Insert the user's data into the database
    $sql = "INSERT INTO passengers (passenger_fullname, passenger_username, passenger_email, passenger_password, passenger_phone, passenger_notifications) VALUES ('$fullName', '$username', '$email', '$password', '$phoneno', '$sendNotifications')";
    if ($conn->query($sql) === TRUE) {
        // User registered successfully, redirect to success page
         header('Location: passenger_page.php');
        exit();
    } else {
        // Error occurred while inserting data, handle the error
        $error = "Error: " . $conn->error;
        header("Location: signup.php?error=" . urlencode($error));
        exit();
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
