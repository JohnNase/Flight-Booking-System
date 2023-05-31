<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Contact Us</title>

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital@1&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

  <style>
    body {
      font-family: 'PT Sans', sans-serif;
    }

    .contact-section {
      background-color: #f8f8f8;
      padding: 50px;
      text-align: center;
      margin-top: 50px;
    }

    .contact-section h2 {
      font-family: 'Montserrat Alternates', sans-serif;
      font-size: 40px;
      margin-bottom: 20px;
    }

    .contact-section p {
      font-size: 20px;
      margin-bottom: 40px;
    }

    .social-icons a {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      margin: 0 10px;
      width: 60px;
      height: 60px;
      background-color: #3B5998;
      border-radius: 50%;
      color: #ECEFF1;
      text-decoration: none;
      font-size: 30px;
      transition: background-color 0.3s ease;
    }

    .social-icons a:hover {
      background-color: #ECEFF1;
      color: #3B5998;
    }

    .social-icons {
      margin-top: 20px;
      margin-bottom: 40px;
      display: flex;
      justify-content: center;
    }

  </style>
</head>
<body>
<?php
  include('navbar.php'); 
?>

  <div class="contact-section">
    <h2>Contact Us</h2>
    <p>Have any questions or inquiries? Get in touch with us.</p>
    <div class="social-icons">
      <a href="https://www.facebook.com"><i class="fab fa-facebook"></i></a>
      <a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
      <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
  <script src="http://localhost/Flight-Booking-System/javascript/eventListeners.js"></script>
</body>
</html>
