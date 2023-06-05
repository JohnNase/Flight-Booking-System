<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
	header('Location: http://localhost/Flight-Booking-System/HTML/login.php');
    exit;
}

// User is logged in, continue with the payment process
?>

<!DOCTYPE html>
<html>
<head>
<style> 

.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #fff;
  width: 15%;
  height: 400px;
}

.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  font-size: 17px;
  transition: background-color 0.3s ease;
}

.tab button:hover {
  background-color: #f7f7f7;
}

.tab button.active {
  background-color: #ccc;
}

.tabcontent {
  float: left;
  padding: 30px 40px;
  border: none;
  width: 70%;
  border-left: none;
  height: 400px;
  background-color: #fff;
}

input[type="text"],
input[type="password"] {
  display: block;
  box-sizing: border-box;
  border: none;
  border-bottom: 2px solid #888888;
  background: #ffffff;
  padding: 5px;
  margin: 0px 0px 10px 0px;
  width: 50%;
  transition: border-bottom-color 0.3s ease;
}

input[type="text"]:focus,
input[type="password"]:focus {
  border-bottom-color: #333;
}

p {
  margin: 10px 0px 3px 0px;
  font-size: 17px;
  font-weight: bold;
}

input[type="submit"],
input[type="reset"] {
  background-color: #d9d9d9;
  color: black;
  padding: 10px 20px;
  margin: 15px 10px 20px 0;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  width: 15%;
  font-weight: bold;
  transition: background-color 0.3s ease;
}

input[type="submit"]:hover,
input[type="reset"]:hover {
  background-color: #ccc;
}

.tabcontent img {
  max-width: 100%;
  height: auto;
  margin-bottom: 20px;
}

</style>
</style>
</head>

<body>
    <?php
    include('navbarClient.php'); 
    ?>
    <br>
    <br>
    <br> 
	<div class="tab">
		<button class="tablinks" onclick="openCity(event, 'Credit Card')"id="defaultOpen">Credit Card</button>
		<button class="tablinks" onclick="openCity(event, 'Debit Card')">Debit Card</button>
		<button class="tablinks" onclick="openCity(event, 'Debit Card + ATM Pin')">Debit Card + ATM Pin</button>
		<button class="tablinks" onclick="openCity(event, 'Internet Banking')">Internet Banking</button>
		<button class="tablinks" onclick="openCity(event, 'Wallet/Cash Card')">Wallet/Cash Card</button>
		<button class="tablinks" onclick="openCity(event, 'IMPS')">IMPS</button>
	</div>	
	
	<div id="Credit Card" class="tabcontent">
		<h3>Pay by Credit Card</h3>
		<p>Card Number</p>
		<input type="text" name="card" placeholder="Enter Card Number">
	
		<p>Expiration Date</p>
		<input type="month" name="month" placeholder="Month">
	
		<p>CVV/CVC</p>
		<input type="text" name="cvv">
	
		<p>Card Holder Name</p>
		<input type="text" name="name" placeholder="Enter Card Holder Name">
		
		<input type="submit" value="Submit">
		<input type="reset" value="Reset">
	</div>
	
	<div id="Debit Card" class="tabcontent">
		<h3>Pay by Debit Card</h3>
		<p>Card Number</p>
		<input type="text" name="card" placeholder="Enter Card Number">
	
		<p>Expiration Date</p>
		<input type="month" name="month" placeholder="Month">
	
		<p>CVV/CVC</p>
		<input type="text" name="cvv">
	
		<p>Card Holder Name</p>
		<input type="text" name="name" placeholder="Enter Card Holder Name">
		
		<input type="submit" value="Submit">
		<input type="reset" value="Reset">
	</div>
	
	<div id="Debit Card + ATM Pin" class="tabcontent">
		<h3>Pay by Debit Card + ATM Pin</h3>
		<p>Card Number</p>
		<input type="text" name="card" placeholder="Enter Card Number">
	
		<p>Expiration Date</p>
		<input type="month" name="month" placeholder="Month">
	
		<p>CVV/CVC</p>
		<input type="text" name="cvv">
	
		<p>Card Holder Name</p>
		<input type="text" name="name" placeholder="Enter Card Holder Name">
		
		<p>Pin</p>
		<input type="password" name="pwd" placeholder="Enter Pin">
		
		<input type="submit" value="Submit">
		<input type="reset" value="Reset">
	</div>
	
	<div id="Internet Banking" class="tabcontent">
		<h3>Pay by Internet Banking</h3>
		<p>User ID</p>
		<input type="text" name="userid">
	
		<p>ATM Pin/Password</p>
		<input type="password" name="pwd">
		
		<input type="submit" value="Submit">
		<input type="reset" value="Reset">
	</div>
	
	<div id="Wallet/Cash Card" class="tabcontent">
		<h3>Pay by Wallet/Cash Card</h3>
		<p>Card Number</p>
		<input type="text" name="card" placeholder="Enter Card Number">
	
		<p>Pin</p>
		<input type="password" name="pwd" placeholder="Enter Pin">
		
		<input type="submit" value="Submit">
		<input type="reset" value="Reset">
	</div>
	
	<div id="IMPS" class="tabcontent">
		<h3>Pay by IMPS</h3>
		<p>Beneficiary Mobile Number</p>
		<input type="text" name="mobile">
	
		<p>Beneficiary MMID</p>
		<input type="text" name="mmid">
	
		<p>Amount</p>
		<input type="text" name="amount">
	
		<p>Remarks</p>
		<input type="text" name="remarks">
		
		<p>Transaction Password</p>
		<input type="password" name="pwd">
		
		<input type="submit" value="Submit">
		<input type="reset" value="Reset">
	</div>
	
	
	<script>
		function openCity(evt, mop) 
		{
			var i, tabcontent, tablinks;
			tabcontent = document.getElementsByClassName("tabcontent");
			for (i = 0; i < tabcontent.length; i++) 
			{
				tabcontent[i].style.display = "none";
			}
		
			tablinks = document.getElementsByClassName("tablinks");
			for (i = 0; i < tablinks.length; i++) 
			{
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