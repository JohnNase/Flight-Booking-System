<?php
session_start();
$loggedIn = isset($_SESSION['username']);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webproject";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_GET['passengerId']) && isset($_GET['ticketNo'])) {
    $passengerId = $_GET['passengerId'];
    $ticketNo = $_GET['ticketNo'];
    // Rest of your code
} else {
    // Handle the case when the parameters are not provided
    echo "Passenger ID or ticket number not provided";
}
// Fetch ticket data from the database based on the ticket number
$sql = "SELECT * FROM Ticket 
        INNER JOIN Passengers ON Ticket.passenger_id = Passengers.passenger_id
        INNER JOIN Flight ON Ticket.flight_no = Flight.flight_no
        WHERE ticket_no = '$ticketNo'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $ticket = $result->fetch_assoc();
    $passengerId = $ticket['passenger_id'];
    $firstName = $ticket["passenger_fullname"];
    $lastName = $ticket["passenger_username"];
    $departureAirportCode = $ticket["departure"];
    $arrivalAirportCode = $ticket["destination"];
    $dateOfDeparture = date('d M Y', strtotime($ticket["flight_date"]));
    $timeOfDeparture = substr(strtoupper($ticket["time_of_departure"]), -5) . 'UTC';
    $classType = $ticket["ticket_type"];
    $fareClass = $ticket["ticket_class"];
    $totalFareAmount = "$" . $ticket["ticket_price"] . ".98";

    // Display the retrieved data
    echo "Passenger ID: " . $passengerId . "<br>";
    echo "First Name: " . $firstName . "<br>";
    echo "Last Name: " . $lastName . "<br>";
    echo "Departure Airport Code: " . $departureAirportCode . "<br>";
    echo "Arrival Airport Code: " . $arrivalAirportCode . "<br>";
    echo "Date of Departure: " . $dateOfDeparture . "<br>";
    echo "Time of Departure: " . $timeOfDeparture . "<br>";
    echo "Class Type: " . $classType . "<br>";
    echo "Fare Class: " . $fareClass . "<br>";
    echo "Total Fare Amount: " . $totalFareAmount . "<br>";
} else {
    echo "Ticket not found";
}
?>

<head>
  <link rel="stylesheet" href="http://localhost/Flight-Booking-System/css/ticketStyle.css">
</head>
<div class="ticket">
	<div id="banner">
		<div id="topbanner"></div>
		<span id="mainbanner">
			 

			<img src="https://lukw4l.de/utils/media/assets/flightticket/plane_logo.png">
			LUKW4L Airlines
		</span>
		<span id="tearoffbanner">
			<img src="https://lukw4l.de/utils/media/assets/flightticket/plane_logo.png">
			LUKW4L Airlines
		</span>
	</div>
	<div id="barcode">
		XYZASDASDXYZ
	</div>
	<div id="data">
		<div id="maindata">
			<div class="box">
				<span class="header">
				<?php echo $passengerId; ?>
				</span>
				<span class="body">
				 <?php echo $ticketNo;  ?>
				</span>
			</div>
			<div class="box">
				<span class="header">
					Flight Number
				</span>
				<span class="body">
					LUKW4L 3345
				</span>
			</div>
			<div class="box">
				<span class="header">
					From
				</span>
				<span class="body">
					CGN (Germany)
				</span>
			</div>
			<div class="box">
				<span class="header">
					Date
				</span>
				<span class="body">
					11 AUG 2021
				</span>
			</div>
			<div class="box">
				<span class="header">
					To
				</span>
				<span class="body">
					SYD (Australia)
				</span>
			</div>
			<div class="box">
			</div>
			<div class="box">
				<span class="header">
					Gate
				</span>
				<span class="body">
					B-10
				</span>
			</div>
			<div class="box boarding">
				<span class="header">
					Boarding Time
				</span>
				<span class="body">
					12:00
				</span>
			</div>

			<div id="tearoffdata">
				<div class="box">
					<span class="header">
						Passenger Name
					</span>
					<span class="body">
						Mr. Lorem Ipsum
					</span>
				</div>
				<div class="box">
					<span class="header">
						Flight Number
					</span>
					<span class="body">
						LUKW4L 3345
					</span>
				</div>
				<div class="box">
					<span class="header">
						Date
					</span>
					<span class="body">
						11 AUG 2021
					</span>
				</div>
				<div class="box">
					<span class="header">
						Gate
					</span>
					<span class="body">
						B-10
					</span>
				</div>
				<div class="box seat">
					<span class="header">
						Seat
					</span>
					<span class="body">
						<b>23F</b>
					</span>
				</div>
			</div>
		</div>

		<div id="holes">
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
		</div>
	</div>
</div> 

