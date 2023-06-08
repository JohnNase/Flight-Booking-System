<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect the user to the login page
    header('Location: login.php');
    exit;
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

 
// Check if the ticket_no value is passed via POST
if (!empty($_POST['ticket_no'])) {
    $ticket_no = $_POST['ticket_no'];
   
    // Check if the ticket number exists in the database
    if (!isTicketValid($ticket_no)) {
        echo "Invalid ticket number.";
        include('paymentFailed.php');
        exit;
    } else {
        // var_dump("inside else after exit");
        if (!empty($_POST['card_number']) && !empty($_POST['expiration_date']) && !empty($_POST['cvv']) && !empty($_POST['card_holder_name'])) {
            $payment_data = array(
                'card_number' => $_POST['card_number'],
                'expiration_date' => $_POST['expiration_date'],
                'cvv' => $_POST['cvv'],
                'card_holder_name' => $_POST['card_holder_name']
            );

            $eligibility = validatePaymentForm($payment_data);
            // var_dump("eligibility:".$eligibility);

            if ($eligibility) {
                $transaction_id = generateTransactionID();
                saveTransaction($transaction_id, 'Credit Card', getPassengerIdByUsername($_SESSION['username']), $ticket_no);
                // var_dump('Payment mode: Credit Card, Ticket No: '.$ticket_no.' PassengerID: '.$_SESSION['username']);

                // Display the transaction completion message
                include('PaymentSuccessful.php'); 
            } else {
                // Payment failed
                include('paymentFailed.php');
    
            }
        } else {
            var_dump("payment data empty");
            include('paymentFailed.php');
        }
    }
} else {
    echo 'No ticket found';
    include('paymentFailed.php');
    exit;
}

// Function to generate a random transaction ID that starts with TR and continues with 4 integers always
function generateTransactionID()
{
    $lastTransactionID = getLatestTransactionID();
    $numericPart = intval(substr($lastTransactionID, 2)) + 1;

    // Generate the new transaction ID
    $newTransactionID = 'TR' . str_pad($numericPart, 4, '0', STR_PAD_LEFT);
    return $newTransactionID;
}

function saveTransaction($transaction_id, $payment_mode, $passenger_id, $ticket_no)
{
    // Create a database connection
    $conn = mysqli_connect('localhost', 'root', '', 'webproject');

    // Check if the connection was successful
    if (!$conn) {
        die('Failed to connect to MySQL: ' . mysqli_connect_error());
    }

    // Prepare the SQL statement
    $query = "INSERT INTO transactions (transaction_id, paymentMode, passenger_id, ticket_no) 
              VALUES ('$transaction_id', '$payment_mode', '$passenger_id', '$ticket_no')";

    // Execute the SQL statement
    $result = mysqli_query($conn, $query);

    // Check if the query was successful
    if (!$result) {
        die('Error executing query: ' . mysqli_error($conn));
    }

    // Close the database connection
    mysqli_close($conn);
}

// Only variations of integer 1 are accepted
function validatePaymentForm($payment_data)
{
    $card_number = $payment_data['card_number'];
    $expiration_date = $payment_data['expiration_date'];
    $cvv = $payment_data['cvv'];
    $card_holder_name = $payment_data['card_holder_name'];

    if (!preg_match('/^1+$/', $card_number)) {
        return false;  
    }
    

    // Check if the expiration date is in the future
    $current_date = date('Y-m');
    if ($expiration_date < $current_date) {
        return false; 
    }

    // Check if the CVV is a 3-digit number
    if (!preg_match('/^1+$/', $cvv)) {
        return false; // CVV is not valid
    }

    // Check if the card holder name is not empty
    if (empty($card_holder_name)) {
        return false; // Card holder name is empty
    }

    return true; // Payment data is valid
}

function getLatestTransactionID()
{
    $conn = mysqli_connect('localhost', 'root', '', 'webproject');

    // Check if the connection was successful
    if (!$conn) {
        die('Failed to connect to MySQL: ' . mysqli_connect_error());
    }

    // Retrieve the last entered transaction ID from the database
    $query = "SELECT transaction_id FROM transactions ORDER BY transaction_id DESC LIMIT 1";
    $result = mysqli_query($conn, $query);

    // Check if the query was successful
    if (!$result) {
        die('Error executing query: ' . mysqli_error($conn));
    }

    // Fetch the last transaction ID from the result
    $row = mysqli_fetch_assoc($result);
    $lastTransactionID = $row['transaction_id'];

    // Close the database connection
    mysqli_close($conn);

    return $lastTransactionID;
}

function isTicketValid($ticket_no)
{
    // Create a database connection
    $conn = mysqli_connect('localhost', 'root', '', 'webproject');

    // Check if the connection was successful
    if (!$conn) {
        die('Failed to connect to MySQL: ' . mysqli_connect_error());
    }

    // Prepare the SQL statement
    $query = "SELECT ticket_no FROM Ticket WHERE ticket_no = '$ticket_no'";
    // var_dump($query);
    // Execute the SQL statement
    $result = mysqli_query($conn, $query);

    // Check if the query was successful and if any rows were returned
    if (mysqli_num_rows($result) > 0) {
        $valid = true;
    } else {
        $valid = false;
    }

    // var_dump($valid);

    // Close the database connection
    mysqli_close($conn);

    return $valid;
}
?>
