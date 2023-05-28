<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <title>Booking Form HTML Template</title>

  <link href="https://fonts.googleapis.com/css?family=PT+Sans:400" rel="stylesheet">
  
  <!-- Add Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

  <style>
    body {
      font-family: 'PT Sans', sans-serif;
    }

    /* Contact Us Section */
    .contact-section {
      background-color: #f8f8f8;
      padding: 50px;
      text-align: center;
    }

    .contact-section h2 {
      font-size: 30px;
      margin-bottom: 20px;
    }

    .contact-section p {
      font-size: 16px;
      margin-bottom: 40px;
    }

    .social-icons {
      margin-top: 20px;
    }

    .social-icons a {
      display: inline-block;
      margin: 0 10px;
      width: 40px;
      height: 40px;
      background-color: #ffaffb;
      border-radius: 50%;
      line-height: 40px;
      text-align: center;
      color: brown;
      text-decoration: none;
      font-size: 20px;
      transition: background-color 0.3s ease;
    }

    .social-icons a:hover {
      background-color: brown;
      color: #ffaffb;
    }
  </style>
</head>

<body>
<?php
		include('navbar.php'); 
	?>
  <!-- Rest of your HTML code -->

  <div class="contact-section">
    <h2>Contact Us</h2>
    <p>Have any questions or inquiries? Get in touch with us.</p>
    <div class="social-icons">
      <a href="https://www.facebook.com"><i class="fab fa-facebook"></i></a>
      <a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
      <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
    </div>
  </div>

  <!-- Rest of your HTML code -->

  <!-- Add Font Awesome Script -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
  <script src="http://localhost/Flight-Booking-System/javascript/eventListeners.js"></script>
</body>
</html>
