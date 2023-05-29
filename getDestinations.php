<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webproject";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the selected departure value from the request
$departure = $_GET['departure'];

// Prepare and execute a query to fetch destinations based on the selected departure
$sql = "SELECT DISTINCT destination FROM flight WHERE departure = '$departure'";
$result = $conn->query($sql);

// Fetch the destinations and store them in an array
$destinations = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $destinations[] = $row['destination'];
    }
}

// Return the destinations as a JSON response
echo json_encode($destinations);

$conn->close();
?>
