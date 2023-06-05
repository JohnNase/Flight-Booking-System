<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>
  <link rel="stylesheet" href="http://localhost/Flight-Booking-System/css/stylesForAboutUs.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital@1&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
     }

    .hero {
      background-image: url('http://localhost/Flight-Booking-System/img/hero-background.png');
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      padding: 160px 0 40px;
      text-align: center;
      position: relative;
      margin-top: 60px;
    }

   .hero h1 {
      font-family: 'Montserrat Alternates', sans-serif;
      font-size: 50px;
      font-weight: bold;
      margin: 0;
      color: white;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
    }

    .hero:after {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.4);
    }

    .content {
      padding: 40px 0;
    }

    .container {
      max-width: 900px;
      margin: 0 auto;
      padding: 0 20px;
    }

    h2 {
      font-family: 'Roboto Mono', monospace;
      font-size: 24px;
      color: #333;
      margin-bottom: 20px;
    }

    p {
      font-size: 19px;
      color: #666;
      line-height: 1.5;
      margin-bottom: 30px;
    }
    
    .values-paragraph {
      font-size: 18px;
      color: #666;
      line-height: 1.5;
    }
  </style>
</head>

<body>

<div class="navbar">
  <?php include('navbar.php'); ?>
</div>

<section class="hero">
  <div class="container">
    <h1>FlyEasy!</h1>
  </div>
</section>

<section class="content">
  <div class="container">
    <h2>Our Story</h2>
    <p>Welcome to FlyEasy! Founded by two driven software engineering students, John and Sara, 
      our journey began with a shared passion for travel and technology. As avid travelers ourselves,
       we understand the challenges and excitement that come with planning a trip. Fueled by our determination to simplify 
       the flight booking process, we set out to create a user-friendly platform that empowers travelers 
      to explore the world effortlessly.</p>

    <h2>Our Vision</h2>
    <p>At FlyEasy, our vision is to revolutionize the way people book flights. We strive to be 
      the go-to platform for travelers seeking seamless and hassle-free experiences. By leveraging
       our combined expertise in software engineering, we aim to provide a technologically advanced 
       solution that offers real-time, accurate, and transparent flight information. 
       Our goal is to make flight booking a delightful and personalized experience, connecting people 
       with their dream destinations and enabling them to create lasting memories.</p>

    <h2>Our Values</h2>
    <p>
      1. Customer Satisfaction: Your satisfaction is our top priority. We are dedicated to providing 
      you with exceptional service, from the moment you land on our website until you reach your destination. 
      We value your time and strive to make every interaction efficient and enjoyable. <br>
      2. Transparency: We believe in transparency and honesty. We provide you with all the necessary information 
      upfront, ensuring there are no hidden fees or surprises. We want you to make informed decisions confidently, 
      knowing the full details of your flight booking. <br>
      3. Innovation: As software engineering students, we are passionate about innovation. We continuously work 
      to enhance our platform, leveraging cutting-edge technology and industry best practices. We aim to stay 
      ahead of the curve and deliver a seamless and intuitive flight booking experience. <br>
      4. Reliability: Trust is the foundation of our business. We partner with leading airlines worldwide to 
      offer you reliable and trustworthy options. We understand the importance of a smooth journey and are 
      committed to providing you with the highest level of reliability in every aspect of our service. <br>
      5. Personalization: We recognize that every traveler is unique, and we strive to cater to your individual needs. 
      Our platform offers a range of customization options, allowing you to find flights that align with your 
      preferences and travel plans. <br>
      FlyEasy is not just a flight booking platform; it is a commitment to providing you with a remarkable 
      travel experience. Join us today and let us help you reach new heights. <br><br>
      John and Sara <br>
      Co-founders, FlyEasy</p>
  </div>
</section>

<footer>
    <div class="container">
      <p>&copy; 2023 FlyEasy. All rights reserved. | <a href="privacy-policy.html">Privacy Policy</a> | <a href="terms-of-service.html">Terms of Service</a></p>
    </div>
  </footer>

<script src="http://localhost/Flight-Booking-System/javascript/eventListeners.js"></script>
</body>

</html>
