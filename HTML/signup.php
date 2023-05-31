<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign Up</title> 
</head>
<body>
<?php
	include('navbar.php');  
?>

<div class="container">
  <form action="http://localhost/Flight-Booking-System/HTML/authenticateSignUp.php" method="POST">
    <br>
    <br>
     
    <h2>Sign Up</h2>
    <?php $sendNotifications = false; // Initialize the variable

    if (isset($_POST['signup'])) {
      $fullName = $_POST['full_name'];
      $username = $_POST['username'];
      $password = $_POST['password'];
      $verifyPassword = $_POST['verify_password'];
      $birthdate = $_POST['birthdate'];
      $sendNotifications = isset($_POST['send_notifications']);

      if (!empty($errors)) { ?>
        <div class="error">
          <?php foreach ($errors as $error) { ?>
            <p><?php echo $error; ?></p>
          <?php } ?>
        </div>
      <?php } 
    }?>

    <div class="form-group">
      <label for="full-name">Full Name</label>
      <input type="text" id="full-name" name="full_name" value="<?php echo isset($fullName) ? $fullName : ''; ?>" required>
    </div>
    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" id="username" name="username" value="<?php echo isset($username) ? $username : ''; ?>" required>
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" value="<?php echo isset($email) ? $email : ''; ?>" required>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>
    </div>
    <div class="form-group">
      <label for="verify-password">Verify Password</label>
      <input type="password" id="verify-password" name="verify_password" required>
    </div>
    <div class="form-group phone-group">
      <label for="phone">Phone Number</label>
      <div class="input-group">
        <input type="text" id="phone" name="phone" required>
        <select id="country-code" name="country_code">
          <option value="1" data-flag="https://upload.wikimedia.org/wikipedia/en/thumb/a/a4/Flag_of_the_United_States.svg/1200px-Flag_of_the_United_States.svg.png">+1 (USA)</option>
          <option value="44" data-flag="https://upload.wikimedia.org/wikipedia/commons/4/42/Flag_of_the_United_Kingdom.png">+44 (UK)</option>
          <!-- Add more country options as needed -->
        </select>
      </div>
    </div>
    <div class="form-group">
      <label for="birthdate">Birthdate</label>
      <input type="date" id="birthdate" name="birthdate" value="<?php echo isset($birthdate) ? $birthdate : ''; ?>" required>
    </div>
    <div class="form-group">
      <label for="send-notifications">Send Notifications</label>
      <input type="checkbox" id="send-notifications" name="send_notifications" <?php echo $sendNotifications ? 'checked' : ''; ?>>
    </div>
    <button type="submit" name="signup">Sign Up</button>
  </form>
</div>

<script src="http://localhost/Flight-Booking-System/javascript/eventListeners.js"></script>  
</body>

<style>
  .container {
    width: 400px;
    margin: 0 auto;
    padding: 20px;
  }
  
  h2 {
    text-align: center;
  }
  
  .form-group {
    margin-bottom: 20px;
  }
  
  label {
    display: block;
    margin-bottom: 5px;
  }
  
  input[type="text"],
  input[type="password"],
  input[type="date"],
  input[type="email"]  {
    width: 100%;
    height: 30px;
    padding: 5px;
  }
  
  button[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #f23e3e;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
  
  .error {
    color: red;
    margin-bottom: 10px;
  }
  
</style>
</html>
