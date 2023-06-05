<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Perform login authentication here
    // If the login is successful, set the session and cookie

    $_SESSION['username'] = $user_id; // Store the user ID in the session

    $expiry = time() + (30 * 24 * 60 * 60); // Set the expiration time to a desired duration (30 days in this example)
    setcookie('username', $user_id, $expiry, '/'); // Set the cookie with the user ID

    // Redirect the user to the desired page
    header('Location: clientDashboard.php');
    exit;
}
 
session_start();

if (isset($_COOKIE['username']) && !isset($_SESSION['username'])) {
    // Restore the session if the cookie exists and the session does not
    $_SESSION['username'] = $_COOKIE['username'];
}
?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital@1&display=swap" rel="stylesheet">
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Login Page</title> 
        </head>
        <body>
        <?php
                include('navbar.php'); 
            ?>
            <br>
            <br>
            
            <div class="login-container">
                <h2>Login</h2>
                <form action=" http://localhost/Flight-Booking-System/HTML/authenticateLogin.php" method="POST">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Log In">
                    </div>
                    <div class="error-message">
                        <?php
                        if (isset($_GET['error'])) {
                            echo $_GET['error'];
                        }
                        ?>
                    </div>
                </form>
            </div>
            <style>
            body {
            background-color: #f1f1f1;
            font-family: Arial, sans-serif;
        }

        .login-container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            margin-top: 100px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }

        h2 { 
        font-family: 'Montserrat Alternates', sans-serif;
        font-weight: bolder;
        font-size: 25px;
        text-align: center; 
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            height: 30px;
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            width: 100%;
            height: 40px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .error-message {
            color: red;
            font-weight: bold;
            text-align: center;
            margin-top: 10px;
        }

            </style>
        </body>


        </html>
    <script>