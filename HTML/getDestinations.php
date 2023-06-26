<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webproject";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
$departure = $_GET['departure'];
 
$sql = "SELECT DISTINCT destination FROM flight WHERE departure = '$departure'";
$result = $conn->query($sql); 
$destinations = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $destinations[] = $row['destination'];
    }
}
 
echo json_encode($destinations);

$conn->close();
?>
