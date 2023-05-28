<?php
// Establish database connection
 include('connectDBscript.php'); 

if (isset($_GET['email'])) {
  $email = $_GET['email'];
  $email = $conn->real_escape_string($email);

  $query = "SELECT COUNT(*) AS count FROM passengers WHERE email = '$email'";
  $result = $conn->query($query);

  if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $count = $row['count'];

    $response = [
      'available' => ($count === '0')
    ];

    header('Content-Type: application/json');
    echo json_encode($response);
    exit();
  }
}

// Close database connection
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'webproject';

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
