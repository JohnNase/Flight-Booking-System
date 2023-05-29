<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webproject";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the selected destination value from the request
$destination = $_GET['destination'];

// Prepare and execute a query to fetch departures based on the selected destination
$sql = "SELECT DISTINCT departure FROM flight WHERE destination = '$destination'";
$result = $conn->query($sql);

// Fetch the departures and store them in an array
$departures = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $departures[] = $row['departure'];
    }
}

// Return the departures as a JSON response
echo json_encode($departures);

$conn->close();
?>
