<?php
session_start(); 
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');

include('authenticateSignup.php'); ?> 
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
    <?php if (isset($_GET['error'])) { ?>
    <div class="error">
        <p><?php echo $_GET['error']; ?></p>
    </div>
<?php } ?>
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
      <input type="password" id="verify-password" name="verify-password" required>
    </div>
    <div class="form-group phone-group">
      <label for="phone">Phone Number</label>
      <div class="input-group">
        <input type="text" id="phone" name="phone" required>
        <select id="country" name="country"></select>

<script>
  function getAccessToken(getAuthorizedRequest){
    const httpRequest = new XMLHttpRequest();
  
    httpRequest.onreadystatechange = function(){
      if(this.status === 200 && this.readyState === 4){
        const response = JSON.parse(this.response);
        console.log(response, typeof response);
        if(typeof getAuthorizedRequest === 'function'){
          getAuthorizedRequest(response.auth_token);
        }
      }
    }
    httpRequest.open('GET','https://www.universal-tutorial.com/api/getaccesstoken');
    httpRequest.setRequestHeader('accept','application/json');
    httpRequest.setRequestHeader('api-token','L6Shm93M0qUlphwr3q4TIivgLPly0NggLB5Uazpu-3_xr_tbLZbXIrxcRXFB3HObNA4');
    httpRequest.setRequestHeader('user-email','sberberi21@epoka.edu.al');
    
    httpRequest.send();
  }
  
  function getCountriesCode(authToken){
    const httpRequest = new XMLHttpRequest();
  
    httpRequest.onreadystatechange = function(){
      if(this.readyState === 4 && this.status === 200){
        const countries = JSON.parse(this.response);

        const selectCountry = document.getElementById('country');
  
        countries.forEach((country)=>{
          const option = document.createElement('option');
          option.text = country.country_name + ' (+' + country.country_phone_code + ')';
          option.value = country.country_phone_code;
  
          selectCountry.appendChild(option);
        });
      }
    }
  
    httpRequest.open('GET','https://www.universal-tutorial.com/api/countries');
    httpRequest.setRequestHeader('accept', 'application/json');
    httpRequest.setRequestHeader('authorization',`Bearer ${authToken}`);
  
    httpRequest.send();
  }
  
  getAccessToken(getCountriesCode);
  
  const countryInput = document.getElementById('country');
  const phoneInput = document.getElementById('phone');
  
  countryInput.addEventListener('change',()=>{
    const countryCode = countryInput.value;
  
    phoneInput.placeholder = `+(${countryCode})`;
  });
</script>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="http://localhost/Flight-Booking-System/javascript/eventListeners.js"></script>  


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
    font-size: 30px;
    text-align: center; 
  }
  
  .form-group {
    margin-bottom: 20px;
  }
  
  label { 
    font-family: 'PT Sans', sans-serif;
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
