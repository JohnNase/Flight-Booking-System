<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webproject";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$destination = $_GET['destination'];

$sql = "SELECT DISTINCT departure FROM flight WHERE destination = '$destination'";
$result = $conn->query($sql);
$departures = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $departures[] = $row['departure'];
    }
}

echo json_encode($departures);

$conn->close();
?>
