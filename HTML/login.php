<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title> 
</head>
<body>
<?php
		include('navbar.php'); 
	?>
    <div class="login-container">
        <h2>Login</h2>
        <form action="HTML\validationLogIn.php" method="POST">
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
