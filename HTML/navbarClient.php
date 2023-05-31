<!DOCTYPE html>
<html>
<head>
<style>
      body {
          margin: 0;
          padding: 0;
      }
      .header {
          position: fixed;
          top: 0;
          width: 100%;
          z-index: 999;
          overflow: hidden;
          background-color: #443257; 
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
          background-color: #cfbae6;
          color:#490099; 
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
</head>
<body>

<div class="header">
<a id="logOut-btn" href="http://localhost/Flight-Booking-System/HTML/logout.php" color="white">LOG OUT</a>
      <a id="home-btn" href="http://localhost/Flight-Booking-System/clientDashboard.php" color="white">HOME</a>
      <a id="myProfile-btn" href="http://localhost/Flight-Booking-System/clientDashboard.php" color="white">MY PROFILE</a>
      <a id="myFlights-btn" href="http://localhost/Flight-Booking-System/clientDashboard.php" color="white">MY FLIGHTS</a>
      <a id="Notifications-btn" href="http://localhost/Flight-Booking-System/clientDashboard.php" color="white">NOTIFICATIONS</a>
      
      
      </div>
 <script src="http://localhost/Flight-Booking-System/javascript/eventListeners.js"></script>
</body>
</html>
