<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital@1&display=swap" rel="stylesheet">
  <title>Sign Up</title> 
</head>
<body>
<?php
	include('navbar.php');  
?>
<br>
<br>

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

    <br>
    <div class="form-group">
      <label for="full-name">Full Name</label>
      <input type="text" id="full-name" name="full_name" value="<?php echo isset($fullName) ? $fullName : ''; ?>" required>
    </div>
    <br>
    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" id="username" name="username" value="<?php echo isset($username) ? $username : ''; ?>" required>
    </div>
    <br>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" value="<?php echo isset($email) ? $email : ''; ?>" required>
    </div>
    <br>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>
    </div>
    <br>
    <div class="form-group">
      <label for="verify-password">Verify Password</label>
      <input type="password" id="verify-password" name="verify_password" required>
    </div>
    <br>
    <div class="form-group phone-group">
      <label for="phone">Phone Number</label>
      <div class="input-group">
        <input type="text" id="phone" name="phone" required>
        <select id="country-code" name="country_code" class="country-code">
      <?php
      $url = 'https://restcountries.com/v3.1/independent?status=true';
      $data = file_get_contents($url);
      $phpArr = json_decode($data, true);

      if ($phpArr) {
        foreach ($phpArr as $k) {
          if (isset($k['name'])) {
            echo '<option value="'.$k['name']['common'].' '.$k['idd']['root'].$k['idd']['suffixes'][0].'">'.$k['idd']['root'].$k['idd']['suffixes'][0].'</option>';
          }
        }
      } else {
        echo '<option value="">Error: Unable to retrieve country data.</option>';
      }
      ?>
    </select>
      </div>
    </div>
    <div class="form-group">
      <label for="birthdate">Birthdate</label>
      <input type="date" id="birthdate" name="birthdate" value="<?php echo isset($birthdate) ? $birthdate : ''; ?>" required>
    </div>
    <br>
    <div class="form-group">
      <label for="send-notifications">Send Notifications</label>
      <input type="checkbox" id="send-notifications" name="send_notifications" <?php echo $sendNotifications ? 'checked' : ''; ?>>
    </div>
    <br>
    <button type="submit" name="signup">Sign Up</button>
  </form>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="http://localhost/Flight-Booking-System/javascript/eventListeners.js"></script>  
 

<script>
$(document).ready(function() {
  // AJAX request to retrieve country codes
  $.ajax({
    url: 'http://localhost/Flight-Booking-System/HTML/getCountryCodes-api.php',
    method: 'GET',
    dataType: 'json',
    success: function(response) {
      // Process the response and populate the select element
      var select = $('#country-code');

      response.forEach(function(countryCode) {
        var option = $('<option></option>').val(countryCode).text(countryCode);
        select.append(option);
      });
    },
    error: function() {
      // Handle errors if the API request fails
      console.log('Failed to retrieve country codes.');
    }
  });
});
</script>

</body>

<style>
  body{
    background-color: whitesmoke;
  }
  .container {
    width: 400px;
    margin: 0 auto;
    padding: 20px;
  }
  
  h2 {
    font-family: 'Montserrat Alternates', sans-serif;
    font-weight: bolder;
    font-size: 35px;
    text-align: center; 
  }
  
  .form-group {
    margin-bottom: 20px;
  }
  
  label { 
    font-family: 'PT Sans', sans-serif;
    font-size: 20px;
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
  }
  
  input[type="text"],
  input[type="password"],
  input[type="date"],
  input[type="email"]{ 
    width: 100%;
    height: 30px;
    padding: 5px;  
  }
  
  button[type="submit"] {
    width: 100%;
    padding: 10px;
    font-size: 20px;
    background-color: #1e293b;
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
