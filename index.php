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
	include 'HTML\navbar.php';
	?>
	<div id="booking" class="section" style="margin-top: 0;">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<form>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label" style="color: white;">Flying from</span>
										<select class="form-control" type="text" placeholder="City or airport" id="departure" onchange="populateDestinations()" style="color: black;">
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
										<select class="form-control" type="text" placeholder="City or airport" id="destination" onchange="populateDepartures()" style="color: black;">
										 <option style="color: gredarkslategray;" >Select a departure:</option>
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
										<input class="form-control" type="date" required>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label" style="color: white;">Returning</span>
										<input class="form-control" type="date" required>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<span class="form-label" style="color: white;">Adults (18+)</span>
										<select class="form-control">
											<option>1</option>
											<option>2</option>
											<option>3</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<span class="form-label" style="color: white;" >Children (0-12)</span>
										<select class="form-control">
											<option>0</option>
											<option>1</option>
											<option>2</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label" style="color: white;">Travel class</span>
										<select class="form-control">
											<option>Economy class</option>
											<option>Business class</option>
											<option>First class</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-btn">
										<button class="show-flights" >Show flights</button>
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