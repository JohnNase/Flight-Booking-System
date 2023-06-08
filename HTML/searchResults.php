<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="http://localhost/Flight-Booking-System/css/searchResultsStyle.css">
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webproject";

// Check if the user is logged in
session_start();
$loggedIn = isset($_SESSION['username']);

// Include the appropriate navbar based on login status
if ($loggedIn) {
  include('navbarClient.php');
} else {
  include('navbar.php');
}
?> 

  <div class="container">
    <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "webproject";
 
      $conn = new mysqli($servername, $username, $password, $dbname);
 
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
 
      // Retrieve form data
      $departureDate = isset($_GET['departure_date']) ? date('Y-m-d', strtotime($_GET['departure_date'])) : '0000-00-00 00:00:00';
      
      $destination = $_GET['destination'];
      $returnDate = isset($_GET['return_date']) ? date('Y-m-d', strtotime($_GET['return_date'])) : '9999-12-31 23:59:59';
      $departure = $_GET['departure'];
      $adults = $_GET['adults'];
      $children = $_GET['children']; 
      $travelClass = $_GET['travel_class'];
      

      // SQL query using the form data
      $query = "SELECT DISTINCT f.departure, f.destination, fd.flight_date, t.ticket_type, t.ticket_no, t.ticket_price, a.airline_name
            FROM Flight f
            JOIN FlightDate fd ON fd.Flight_No = f.flight_no
            JOIN Ticket t ON t.flight_no = f.flight_no
            JOIN Airline a ON a.airline_no = f.airline_no
            WHERE fd.flight_date >= '".$departureDate. " 00:00:00'AND fd.flight_date <= '".$returnDate. " 23:59:59'
            AND t.ticket_class = '".$travelClass. "' AND f.departure = '".$departure. "' AND f.destination = '".$destination. "'";

  // Prepare the statement
  $stmt = $conn->prepare($query);
 
$stmt->execute(); 
      $result = $stmt->get_result();
     
$stmt->execute();
if ($stmt->error) {
  echo "Query Error: " . $stmt->error . "<br>";
}
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $airline_name = $row['airline_name']; 
    $imageUrl = "http://localhost/Flight-Booking-System/img/" . strtolower(str_replace(" ", "-", $airline_name)) . "-logo.png";
    $ticket_no = $row['ticket_no']; 

    echo '<div class="flight-item">';
    echo '<div class="flight-info">';
    echo '<img class="flight-logo" src="'.$imageUrl.'" alt="Airline Logo">';
    echo '<div class="flight-details">';
    echo '<h2>Flight from ' . $row["departure"] . ' to ' . $row["destination"] . '</h2>';
    echo '<p>Date: ' . $row["flight_date"] . '</p>';
    echo '<p>Ticket Type: ' . $row["ticket_type"] . '</p>';
    echo '</div>';
    echo '<div class="flight-price">  $' . $row["ticket_price"] .  '&nbsp</div>';
    echo '<br>';
    echo '<button class="buy-button" onclick="redirectToPayment(\''.$ticket_no.'\')">Buy Ticket</button>';
    echo '</div>';
    echo '</div>';
  }
  } else {
    echo "No flights found.";
  }
$conn->close();
?>
  </div>
  <script>
 function redirectToPayment(ticket_no) {
  var encodedTicketNo = encodeURIComponent(ticket_no);
  window.location.href = "http://localhost/Flight-Booking-System/HTML/payment.php?ticket_no=" + encodedTicketNo;
}
  </script>
</body>
</html>
