

<?php

include('navbarClient.php');
if (session_status() === PHP_SESSION_NONE) {
    session_start(); // Start the session if it's not already started
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webproject";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function getPassengerIdByUsername($username) {
    // Create a database connection
    $conn = mysqli_connect('localhost', 'root', '', 'webproject');

    // Check if the connection was successful
    if (!$conn) {
        die('Failed to connect to MySQL: ' . mysqli_connect_error());
    }

    // Prepare the SQL statement
    $query = "SELECT passenger_id FROM passengers WHERE passenger_username = '$username'";

    // Execute the SQL statement
    $result = mysqli_query($conn, $query);

    // Check if the query was successful and if any rows were returned
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $passengerId = $row['passenger_id'];
    } else {
        $passengerId = null; // User not found
    }

    // Close the database connection
    mysqli_close($conn);

    return $passengerId;
}

// Retrieve ticket details for the logged-in passenger and specific transaction
$passengerId = getPassengerIdByUsername($_SESSION['username']);

if ($passengerId) {
    $sql = "SELECT t.ticket_type, t.ticket_class, t.ticket_price, f.departure, f.destination, a.airline_name, p.passenger_fullname, t.ticket_no
            FROM Transactions tr
            INNER JOIN Ticket t ON tr.ticket_no = t.ticket_no
            INNER JOIN Flight f ON t.flight_no = f.flight_no
            INNER JOIN Airline a ON f.airline_no = a.airline_no
            INNER JOIN Passengers p ON tr.passenger_id = p.passenger_id
            WHERE tr.passenger_id = $passengerId
            GROUP BY t.ticket_type, t.ticket_class, t.ticket_price, f.departure, f.destination, a.airline_name, p.passenger_fullname, t.ticket_no";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            // Display ticket details
            while ($row = mysqli_fetch_assoc($result)) {
                $airline_name = $row['airline_name'];
                $imageUrl = "http://localhost/Flight-Booking-System/img/" . strtolower(str_replace(" ", "-", $airline_name)) . "-logo.png";

                // Access ticket details from the $row array
                $ticketType = $row['ticket_type'];
                $ticketClass = $row['ticket_class'];
                $ticketPrice = $row['ticket_price'];
                $departure = $row['departure'];
                $destination = $row['destination'];
                $passengerName = $row['passenger_fullname'];
                $ticketNo = $row['ticket_no'];

                // Generate HTML elements to display the flight item
                echo "<div class='flight-item'>";
                echo "<img src='$imageUrl' alt='$airline_name' style='max-width: 100px;margin-right: 20px;'>";
                echo "<h2>Flight from $departure to $destination</h2>";
                echo "<p>Type: $ticketType</p>";
                echo "<p>Class: $ticketClass</p>";
                echo "<p>Price: $ticketPrice</p>";
                echo "<div class='airline-logo'></div>";

      
            
                
                $downloadUrl = '..\HTML\src\ticketPrinted.php?passengerId=' . $passengerId . '&ticketNo=' . $ticketNo;
          
                $downloadFileName = 'myTicket.html';

                echo "<a class='buy-button' href='$downloadUrl' download='$downloadFileName'>Download Ticket</a>";
                echo "  "."<a class='buy-button' href='$downloadUrl' target='_blank'>View Ticket</a>";
                echo "</div>";
            }
        } else {
            echo "No tickets found.";
        }
    } else {
        echo "Error retrieving ticket details: " . mysqli_error($conn);
    }
} else {
    echo "Passenger ID not found.";
}

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Flights</title>
    <link rel="stylesheet" href="http://localhost/Flight-Booking-System/css/searchResultsStyle.css">
<body>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #333;
            color: #fff;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f4f4f4;
            border: 1px solid #ccc;
        }

        .flight-item {
            margin-bottom: 20px;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .flight-item .flight-logo {
            max-width: 100px;
            margin-right: 20px;
        }

        .flight-item .flight-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .flight-item .flight-info .flight-details {
            flex-grow: 1;
        }

        .flight-item .flight-info .flight-price {
            font-size: 24px;
            font-weight: bold;
        }

        .flight-item .flight-info .flight-airline {
            font-weight: bold;
        }

    </style>
</head>
</body>
</html>
