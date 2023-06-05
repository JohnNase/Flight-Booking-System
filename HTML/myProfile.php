<?php
include('navbarClient.php'); 
echo '<br>';
echo '<br>';

require_once('config.php'); // Include the database configuration file
session_start();

// Retrieve user data from the database based on the logged-in user
$username = $_SESSION['username']; // Assuming the username is stored in the session

try {
    $stmt = $conn->prepare('SELECT * FROM passengers WHERE passenger_username = :username');
    $stmt->bindParam(':username', $username);
    
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    // Extract user data from the fetched row
    $fullName = $user['passenger_fullname'];
    $email = $user['passenger_email'];
    $phoneNumber = $user['passenger_phone'];
    $memberships = $user['packages_no']; 
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>My Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            padding: 20px;
        }
        
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
        }
        
        .profile-header {
            text-align: center;
        }
        
        .profile-header h1 {
            margin: 0;
            font-size: 24px;
            color: #333;
        }
        
        .profile-info {
            margin-top: 20px;
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
            margin-top: 20px;
        }
        
        .profile-actions button {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
            font-size: 14px;
        }
        
        .profile-actions button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="profile-header">
            <h1>My Profile</h1>
        </div>
        <div class="profile-info">
            <!-- <img src="path/to/profile_photo.jpg" alt="Profile Photo"> -->
            <p><strong>Full Name:</strong> <?php echo $fullName; ?></p>
            <p><strong>Username:</strong> <?php echo $username; ?></p>
            <p><strong>Email:</strong> <?php echo $email; ?></p>
            <p><strong>Phone Number:</strong> <?php echo $phoneNumber; ?></p>
            <p><strong>Memberships Purchased:</strong> <?php echo $memberships; ?></p>
        </div>
        <div class="profile-actions" id="edit-profile" >
            <button class="edit-profile">Edit Profile</button>
        </div>
    </div>

    <script src="http://localhost/Flight-Booking-System/javascript/eventListenersProfile.js"></script>

 
</body>
</html>
