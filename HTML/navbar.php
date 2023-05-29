<body>
<style>
      body {
          margin: 0;
          padding: 0;
      }
      .header {
          overflow: hidden;
          background-color: black;
          font-family: Arial, Helvetica, sans-serif;
          margin: 0;
          padding: 0;
      }
      .header a {
          float: right;
          font-size: 20px;
          color: white;
          text-align: right;
          padding: 18px;
          text-decoration: none;
      }
      .header a:hover,
      .header dropbtn {
          background-color: rgb(255, 167, 251);
          color: brown;
      }

      /* smaller view */

      @media (max-width: 767px) {
        .header a{
            font-size: 17.5px;
            float: left;
            padding: 10px;
        }
      }

      /* mobile view  */

      @media (max-width: 400px) {
        .header a{
            font-size: 10px;
            float: left;
            padding: 5px;
        }
      }

      @media (max-height: 562px) {
        .header a{
            font-size: 10px;
            float: left;
            padding: 5px;
        }
      }

</style>

<div class="header">
      <a id="home-btn" href="http://localhost/Flight-Booking-System/index.php" color="white">HOME</a>
      <a id="login-btn" href="http://localhost/Flight-Booking-System/HTML/login.php" color="white">LOGIN</a>
      <a id="register-btn" href="http://localhost/Flight-Booking-System/HTML/signup.php" color="white">SIGN UP</a>
      <a id="availableflights-btn" href="http://localhost/Flight-Booking-System/HTML/availableflights.php" color="white">AVAILABLE FLIGHTS</a>
      <a id="contactus-btn" href="http://localhost/Flight-Booking-System/HTML/contactus.php" color="white">CONTACT US</a>
      <a id="packages-btn" href="http://localhost/Flight-Booking-System/HTML/packages.php" color="white">PACKAGES</a>
      <a id="aboutus-btn" href="http://localhost/Flight-Booking-System/HTML/aboutus.php" color="white">ABOUT US</a>
 </div>
 <script src="http://localhost/Flight-Booking-System/javascript/eventListeners.js"></script>
</body>
