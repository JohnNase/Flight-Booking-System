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
										<input type="text" id='adults' style="color: black;" class='form-control'>
										<span class="select-arrow"></span>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<span class="form-label" style="color: white;" >Children (0-12)</span>
										<input type="text" id='children' style="color: black;" class='form-control'>
										<span class="select-arrow"></span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label" style="color: white;">Travel class</span>
										<select class="form-control">
											<option style="color: black;">Economy class</option>
											<option style="color: black;">Business class</option>
											<option style="color: black;">First class</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-btn">
									<button class="show-flights">Show flights</button>
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