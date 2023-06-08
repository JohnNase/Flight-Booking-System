<!DOCTYPE html>
<html>
<head> 
<!-- <link rel="stylesheet" href="http://localhost/Flight-Booking-System/css/navbarStyleClient.css"> -->
<style>

.header {
    background-color: #293D2B;
    padding: 20px;
    text-align: center;
}

nav ul li {
    display: inline-block;
    margin-right: 30px;
    

}

nav ul li:last-child {
    margin-right: 0;
}

nav ul li a {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 18px;
    font-weight: 600;
    display: block;
    text-decoration: none;
    position: relative;
    color: #ABFAA9 !important;
}

nav ul li a::after {
    content: "";
    display: block;
    position: absolute;
    left: 0;
    bottom: 10;
    width: 0%;
    background-color: #F1C40F;
    height: 2px;
    transition: 300ms all;
}

nav ul li a:hover::after {
    width: 100%;

}
body {
  margin: 0;
}

</style>
</head>
<body>


<div class="header">
<nav>
        <ul>
<li><a id="logOut-btn" href="http://localhost/Flight-Booking-System/HTML/logout.php" color="white">LOG OUT</a></li>
<li><a id="home-btn" href="http://localhost/Flight-Booking-System/clientDashboard.php" color="white">SEARCH FLIGHTS</a></li>
<li><a id="myProfile-btn" href="http://localhost/Flight-Booking-System/HTML/myProfile.php" color="white">MY PROFILE</a></li>
<li><a id="myFlights-btn" href="http://localhost/Flight-Booking-System/HTML/myFlights.php" color="white">MY FLIGHTS</a></li>
<li style= "padding-left: 10px ;"> <?php include 'notifications.php'; ?> </li>
</li>    
</ul>
</nav>
      </div>

     
 
      
 <script src="http://localhost/Flight-Booking-System/javascript/eventListenersClient.js"></script>
</body>
</html>
