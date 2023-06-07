<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "webproject";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

?>
<!DOCTYPE html>
<html lang="en">

<head>

<style>
  .booking-form {
	padding: 40px;
	border-radius: 6px;
	background: transparent;
}

.section {
	position: relative;
	height: 100vh;
}

.booking-form .row {
	display: flex;
	flex-wrap: wrap;
}

.booking-form .col-md-6,
.booking-form .col-md-3,
.booking-form .col-md-2 {
	flex: 0 0 50%;
	max-width: 50%;
	padding: 0 10px;
	box-sizing: border-box;
}




.section .section-center {
	position: absolute;
	top: 50%;
	left: 0;
	right: 0;
	transform: translateY(-50%);
}

#booking {
	font-family: 'PT Sans', sans-serif; 
	background-color: cadetblue;
	background-size: cover;
	background-position: center;
	background-image: url('../img/background1.jpg');
}

.booking-form {
	background: rgba(0, 0, 0, 0.7);
	padding: 40px;
	border-radius: 6px;
}

.booking-form .form-group {
	position: relative;
	margin-bottom: 20px;
}

.booking-form .form-control {
	background-color: #fff;
	height: 50px;
	color: #ffffff;
	border: none;
	font-size: 16px;
	font-weight: 400;
	box-shadow: none;
	border-radius: 40px;
	padding: 0px 25px;
}

.booking-form .form-control::-webkit-input-placeholder {
	color: rgba(82, 82, 84, 0.4);
}

.booking-form .form-control:-ms-input-placeholder {
	color: rgba(82, 82, 84, 0.4);
}

.booking-form .form-control::placeholder {
	color: rgba(82, 82, 84, 0.4);
}

.booking-form input[type="date"].form-control:invalid {
	color: rgba(82, 82, 84, 0.4);
}

.booking-form select.form-control {
	appearance: none;
	-moz-appearance: none;
	-webkit-appearance: none;
}

.booking-form select.form-control+.select-arrow {
	position: absolute;
	right: 10px;
	bottom: 6px;
	width: 32px;
	line-height: 32px;
	height: 32px;
	text-align: center;
	pointer-events: none;
	color: rgba(0, 0, 0, 0.3);
	font-size: 14px;
}


</style>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form HTML Template</title>

	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400" rel="stylesheet">

	<link type="text/css" rel="stylesheet" href="css/style.css" />


	<style>
	.form-control {
		color: white;
	}
</style>

</head>

<body>
	<?php
	$sqlDepartures = "SELECT DISTINCT departure FROM flight";
	$departures = $conn->query($sqlDepartures);

	$sqlDestinations = "SELECT DISTINCT destination FROM flight";
	$destination = $conn->query($sqlDestinations);
	?>

	<title>UserHome</title>
	<?php
	include 'navbar.php';
	?>
	<div id="booking" class="section" style="margin-top: 0;">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<form action="HTML\searchResults.php" method="GET">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label" style="color: white;">Flying from</span>
										<select class="form-control" type="text" placeholder="City or airport" id="departure" name = "departure" onchange="populateDestinations()" style="color: black;">
										<option style="color: gredarkslategray;" >Select a departure:</option>
											<?php
											if ($departures->num_rows > 0) {
												while ($row = $departures->fetch_assoc()) {
													echo "<option>" . $row['departure'] . "</option>";
												}
											}
											?>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label" style="color: white;">Flying to</span>
										<select class="form-control" type="text" placeholder="City or airport" id="destination" name = "destination" onchange="populateDepartures()" style="color: black;">
										 <option style="color: gredarkslategray;" >Select a destination:</option>
											<?php
				
											if ($destination->num_rows > 0) {
												while ($row = $destination->fetch_assoc()) {
													echo "<option>" . $row['destination'] . "</option>";
												}
											}
											?>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label" style="color: white;">Departing</span>
										<input class="form-control" type="date" name="departure_date" style="color: black;">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label" style="color: white;">Returning</span>
										<input class="form-control" type="date" name="return_date" style="color: black;">
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<span class="form-label" style="color: white;">Adults (18+)</span>
										<input type="text" id='adults' name = 'adults' style="color: black;" class='form-control'>
										<span class="select-arrow"></span>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<span class="form-label" style="color: white;" >Children (0-12)</span>
										<input type="text" id='children' name = 'children' style="color: black;" class='form-control'>
										<span class="select-arrow"></span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label" style="color: white;">Travel class</span>
										<select class="form-control" name='travel_class' id="travel_class" style="color: black;" >
											<option style="color: black;">select a travel class:</option>
											<option style="color: black;" id="tc">economy</option>
											<option style="color: black;" id="tc">business</option>
											<option style="color: black;" id="tc">first class</option>
											<option style="color: black;" id="tc">all travel classes included</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-btn">
									<button type="submit" class="show-flights">Show flights</button>
									<style>

										.show-flights {
										background-color: #fff;
										border: 0 solid #e2e8f0;
										border-radius: 1.5rem;
										box-sizing: border-box;
										color: #0d172a;
										cursor: pointer;
										display: inline-block;
										font-family: "Basier circle",-apple-system,system-ui,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
										font-size: 1.1rem;
										font-weight: 600;
										line-height: 1;
										padding: 1rem 1.6rem;
										text-align: center;
										text-decoration: none #0d172a solid;
										text-decoration-thickness: auto;
										transition: all .1s cubic-bezier(.4, 0, .2, 1);
										box-shadow: 0px 1px 2px rgba(166, 175, 195, 0.25);
										user-select: none;
										-webkit-user-select: none;
										touch-action: manipulation;
										}

										.show-flights:hover {
										background-color: #1e293b;
										color: #fff;
										}

										@media (min-width: 768px) {
										.show-flights {
											font-size: 1.125rem;
											padding: 1rem 2rem;
										}
										}
  
									</style>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="http://localhost/Flight-Booking-System/javascript/populateDepartures&Destinations.js"></script>
</body>

</html>