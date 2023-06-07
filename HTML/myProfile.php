<?php
include('navbarClient.php');
require_once('config.php');
session_start();
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

    $username = $_SESSION['username'];

    try {
        $stmt = $conn->prepare('SELECT * FROM passengers WHERE passenger_username = :username');
        $stmt->bindParam(':username', $username);

        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        $fullName = $user['passenger_fullname'];
        $email = $user['passenger_email'];
        $phoneNumber = $user['passenger_phone'];
        $memberships = $user['packages_no'];
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
else{
    exit(); 
}
?>



<!DOCTYPE html>
<html>

<head>
<link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital@1&display=swap" rel="stylesheet">

    <title>My Profile</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'PT Sans', sans-serif;
            background-color: #f7f7f7;
            font-size: 22px; 
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .profile-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .profile-header h1 {
            font-family: 'Montserrat Alternates', sans-serif;
            margin: 0;
            font-size: 40px;
            color: #333;
            letter-spacing: 2px;
        }

        .profile-info {
            margin-bottom: 20px;
        }

        .profile-info p {
            margin: 0;
            color: #666;
            line-height: 1.5;
        }

        .profile-info p strong {
            color: #333;
        }

        .profile-actions {
            text-align: center;
        }

        .profile-actions .edit-profile {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .profile-actions .edit-profile:hover {
            background-color: #555;
        }

        .profile-info img {
            display: block;
            margin: 0 auto;
            width: 200px;
            height: 200px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="profile-header">
            <h1>My Profile</h1>
            <br>
        </div>
        <div class="profile-info">
        <img src="http://localhost/Flight-Booking-System/img/Default_pfp.png" alt="Profile Photo">
        <br>
        <br>
            <p><strong>Full Name:</strong> <?php echo $fullName; ?></p>
            <br>
            <p><strong>Username:</strong> <?php echo $username; ?></p>
            <br>
            <p><strong>Email:</strong> <?php echo $email; ?></p>
            <br>
            <p><strong>Phone Number:</strong> <?php echo $phoneNumber; ?></p>
            <br>
            <br>
        </div>
        <div class="profile-actions" id="edit-profile">
            <button class="edit-profile">Edit Profile</button>
        </div>
    </div>

    <script src="http://localhost/Flight-Booking-System/javascript/eventListenersProfile.js"></script>
</body>

</html>
