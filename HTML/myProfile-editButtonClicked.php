<?php
include('navbarClient.php'); 
echo '<br>';
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
        
        .profile-info input {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
            transition: all 0.3s ease;
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
        
        .editable {
            background-color: #f2f2f2;
        }
    </style>
    <script>
        window.addEventListener('DOMContentLoaded', () => {
            const form = document.getElementById('profile-form');
            
            form.addEventListener('submit', (event) => {
                event.preventDefault();
                const inputs = form.querySelectorAll('input');
                const formData = new FormData(form);
                
                inputs.forEach((input) => {
                    input.readOnly = true;
                    input.classList.remove('editable');
                });
                
                const xhr = new XMLHttpRequest();
                xhr.open('POST', form.action, true);
                xhr.onload = function () {
                    if (xhr.status === 200) {
                        console.log('Profile updated successfully!');
                    } else {
                        console.error('Profile update failed.');
                    }
                };
                xhr.send(formData);
            });
        });
    </script>
</head>
<body>
    <div class="container">
        <div class="profile-header">
            <h1>My Profile</h1>
        </div>
        <form id="profile-form" action="update_profile.php" method="POST">
            <div class="profile-info">
                <p><strong>Full Name:</strong> <input type="text" name="full_name" value="<?php echo $fullName; ?>"></p>
                <p><strong>Username:</strong> <input type="text" name="username" value="<?php echo $username; ?>"></p>
                <p><strong>Email:</strong> <input type="email" name="email" value="<?php echo $email; ?>"></p>
                <p><strong>Phone Number:</strong> <input type="text" name="phone_number" value="<?php echo $phoneNumber; ?>"></p>

            </div>
            <div class="profile-actions">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
