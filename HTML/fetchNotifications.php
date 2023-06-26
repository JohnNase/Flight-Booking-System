<?php  
session_start();  

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webproject";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 
$loggedInUser = $_SESSION['username'];
 
$query = "SELECT message, Notification_datetime, passengers.passenger_fullname FROM Notifications JOIN Passengers ON Notifications.passenger_id = Passengers.passenger_id WHERE passengers.passenger_username = '$loggedInUser'";
$result = mysqli_query($conn, $query);
 
$notifications = array();
 
while ($row = mysqli_fetch_assoc($result)) {
 
    $message = $row['passenger_fullname'] . ' you ' . $row['message']. '';
 
    $notifications[] = array(
        'message' => $message.' ',
        'datetime' => $row['Notification_datetime']
    );
}

// Return the notifications array as JSON
echo json_encode($notifications);
?>
