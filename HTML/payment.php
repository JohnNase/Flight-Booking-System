<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) { 
    // Store the current page URL in a session variable
    $_SESSION['redirect_url'] = $_SERVER['REQUEST_URI'];

    // Redirect the user to the login page
    header('Location: login.php');
    exit;
}

if (!empty($_GET['ticket_no'])) {
    $ticket_no = $_GET['ticket_no'];
    // Echo the value to check if it is properly retrieved
    // echo $ticket_no;
}
// User is logged in, continue with the payment process
?>

<!DOCTYPE html>
<html>
<head>
<link type="text/css" rel="stylesheet" href="http://localhost/Flight-Booking-System/css/paymentStyle.css" />
</head>

<body>
    <?php
    include('navbarClient.php'); 
    ?>
	<div class="tab">
		<button class="tablinks" onclick="openCity(event, 'Credit Card')" id="defaultOpen">Credit Card</button> 
	</div>	

	<div id="popup" style="display: none;">
    <div id="popup-content">
        <span class="close" onclick="closePopup()">&times;</span>
        <p>Login first!</p>
        <button onclick="closePopup()">OK</button>
    </div>
	</div>
	<form id="payment-form" method="post" action="process_payment.php">
	<div id="Credit Card" class="tabcontent">
	<input type="hidden" name="ticket_no" value="<?php echo $ticket_no; ?>">
		<h3>Pay by Credit Card</h3>
		<p>Card Number</p>
		<input type="text" name="card_number" placeholder="Enter Card Number">
	
		<p>Expiration Date</p>
		<input type="month" name="expiration_date" placeholder="Month">
	
		<p>CVV/CVC</p>
		<input type="text" name="cvv">
	
		<p>Card Holder Name</p>
		<input type="text" name="card_holder_name" placeholder="Enter Card Holder Name">
		
		<input type="submit" value="Submit" onclick="confirmPayment()">
		<input type="reset" value="Reset">
	</div>
 
	<script>
		function confirmPayment() {
			if (window.confirm("Are you sure you want to buy this ticket?")) {
				document.getElementById("payment-form").submit();
			}
		}

		function openCity(evt, mop) {
			var i, tabcontent, tablinks;
			tabcontent = document.getElementsByClassName("tabcontent");
			for (i = 0; i < tabcontent.length; i++) {
				tabcontent[i].style.display = "none";
			}

			tablinks = document.getElementsByClassName("tablinks");
			for (i = 0; i < tablinks.length; i++) {
				tablinks[i].className = tablinks[i].className.replace(" active", "");
			}

			document.getElementById(mop).style.display = "block";
			evt.currentTarget.className += " active";
		}

		// Get the element with id="defaultOpen" and click on it
		document.getElementById("defaultOpen").click();
	</script>		
</body>
</html>
