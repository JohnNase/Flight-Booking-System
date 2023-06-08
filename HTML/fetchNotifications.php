<?php  
session_start(); // Start the session

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webproject";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the logged-in user's name from the session
$loggedInUser = $_SESSION['username'];

// Fetch the data from the Notifications table
$query = "SELECT message, Notification_datetime, passengers.passenger_fullname FROM Notifications JOIN Passengers ON Notifications.passenger_id = Passengers.passenger_id WHERE passengers.passenger_username = '$loggedInUser'";
$result = mysqli_query($conn, $query);
// var_dump($query);
// Prepare an array to hold the notification items
$notifications = array();

// Fetch each row from the result set
while ($row = mysqli_fetch_assoc($result)) {
    // Modify the message format
    $message = $row['passenger_fullname'] . ' you ' . $row['message']. '';

    // Add the modified message and datetime to the notifications array
    $notifications[] = array(
        'message' => $message.' ',
        'datetime' => $row['Notification_datetime']
    );
}

// Return the notifications array as JSON
echo json_encode($notifications);
?>
