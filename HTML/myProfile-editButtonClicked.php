<?php
include('navbarClient.php');
require_once('config.php');
session_start();

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
?>

<!DOCTYPE html>
<html>

<head>
    <title>My Profile</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital@1&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'PT Sans', sans-serif;
            font-size: 22px;
            background-color: #f7f7f7;
            padding-top: 70px;
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

        .profile-info input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            transition: border-color 0.3s ease;
            font-size: 20px; 
        }

        .profile-info input:focus {
            outline: none;
            border-color: #555;
        }

        .profile-actions {
            text-align: center;
        }

        .profile-actions button {
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

        .profile-actions button:hover {
            background-color: #555;
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
            <br>
        </div>
        <form id="profile-form" action="update_profile.php" method="POST">
            <div class="profile-info">
                <p><strong>Full Name:</strong> <input type="text" name="full_name" value="<?php echo $fullName; ?>"></p>
                <br>
                <p><strong>Username:</strong> <input type="text" name="username" value="<?php echo $username; ?>" ></p>
                <br>
                <p><strong>Email:</strong> <input type="email" name="email" value="<?php echo $email; ?>"></p>
                <br>
                <p><strong>Phone Number:</strong> <input type="text" name="phone_number" value="<?php echo $phoneNumber; ?>"></p>
                <br>
                <br>
                <br>
            </div>
            <div class="profile-actions">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>
