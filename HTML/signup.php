<?php
$sendNotifications = false; // Initialize the variable

if (isset($_POST['signup'])) {
  $fullName = $_POST['full_name'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $verifyPassword = $_POST['verify_password'];
  $birthdate = $_POST['birthdate'];
  $sendNotifications = isset($_POST['send_notifications']);


  $errors = [];

  // Check if any field is empty
  if (empty($fullName) || empty($username) || empty($password) || empty($verifyPassword) || empty($birthdate)) {
    $errors[] = "Please fill in all fields.";
  }

  // Check if password is less than 8 characters
  if (strlen($password) < 8) {
    $errors[] = "Password is too short. Minimum length is 8 characters.";
  }

  // Check if passwords match
  if ($password !== $verifyPassword) {
    $errors[] = "Passwords don't match.";
  }

  // Check age restriction (16 years or older)
  $today = new DateTime();
  $birthdateObj = new DateTime($birthdate);
  $age = $today->diff($birthdateObj)->y;

  if ($age < 16) {
    $errors[] = "You must be at least 16 years old to sign up.";
  }

  // If there are no errors, proceed with signup logic
  if (empty($errors)) {
    // Add your sign-up logic here
    // For example, you can store the user's data in a database or perform any other required actions

    // After successful signup, redirect to a success page
    header("Location: signup_success.html");
    exit();
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign Up</title> 
</head>
<body>
  <div class="container">
    <form action="register.php" method="POST">
      <h2>Sign Up</h2>
      <?php if (!empty($errors)) { ?>
        <div class="error">
          <?php foreach ($errors as $error) { ?>
            <p><?php echo $error; ?></p>
          <?php } ?>
        </div>
      <?php } ?>
      <div class="form-group">
        <label for="full-name">Full Name</label>
        <input type="text" id="full-name" name="full_name" value="<?php echo isset($fullName) ? $fullName : ''; ?>" required>
      </div>
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" value="<?php echo isset($username) ? $username : ''; ?>" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <label for="verify-password">Verify Password</label>
        <input type="password" id="verify-password" name="verify_password" required>
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
  input[type="date"] {
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
