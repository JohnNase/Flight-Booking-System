<?php
 
include('navbar.php'); 


// Sample database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webproject";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Query the database for memberships
$sql = "SELECT packages_name, packages_price FROM packages";
$result = $conn->query($sql);

// Prepare an array to hold the memberships
$memberships = array();

// Fetch the results and store them in the array
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $memberships[] = $row;
  }
}

// Close the database connection
$conn->close();
?>
<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:400,300,500,700);

body {
  font-family:'Roboto', Helvetica, Arial, sans-serif;
  font-weight:300;
  background:transparent;
}
h3 {
  font-size: 1.3em;
  margin:0;
}
p{
  font-size:0.9em;
}

/* Hover Card 
.......................................................................*/
div.catCard {
  border: solid 5px #e9e9e9;
  background: #d8d8d8;
  width: 221px;
  height: 400px;
  display: block;
  position: relative;
  overflow: hidden;
}
div.lowerCatCard {
  position: absolute; 
  background: #e9e9e9;
  padding: 5px 5px; 
  height: 200px;
  -webkit-transition: all 0.6s ease;
  -moz-transition:    all 0.6s ease;
  -o-transition:      all 0.6s ease;
  transition:         all 0.6s ease;
}
div.lowerCatCard:hover {
  opacity: 0.95;
  bottom: 0;
  height: 390px;
}
div.catCard  div.lowerCatCard { 
  left: 0; 
  bottom: -3%;
  width: 215px;
}
div.catCard:hover div.lowerCatCard { 
  bottom: 0;
}
li.catCardList {
  width:225px;
  display: inline-block;
  margin-right: 19px;
  margin-top: 25px;
}
li.catCardList-last {
  margin-right: 0;
  width:225px;
  display: inline-block;
}
ul.catCardList {
  margin: 0;
}
#catCardButton {
  position: absolute;
  width: 190px;
  bottom: 5px;
  -webkit-transition: all 0.6s ease;
  -moz-transition:    all 0.6s ease;
  -o-transition:      all 0.6s ease;
}
div.lowerCatCard:hover #catCardButton {
  bottom: 5px;
}
.startingPrice span {
  font-size: 16px;
  color: #c90c12;
  font-weight: 300;
}
div.startingPrice {
  margin-bottom: 5px;
  color: #000;
  font-weight: 300;
}
.catCard img {
  border: 1px solid #dddddd;
  width: 219px;
  height: 198px;
}
.catCard img:hover {
  border: 1px solid #bababa;
}

/* Button 
.......................................................................*/
.button {
  cursor: pointer;
  font-size: 14px !important;
  color: #ffffff;
  padding: 7px 10px !important;
  text-decoration: none !important;
  text-transform: uppercase !important;
  letter-spacing: 0 !important;
  background: #000;
  border: none;
  border-bottom: solid 1px #c90c12;
  text-align: center;
  margin-top: 10px;
}
.button:hover {
  background-color: #c90c12;
  border: none;
  border-bottom: solid 1px #000;
  box-shadow: 0 2px 3px #a8a8a8;
  transform: scale(1.04);
  -webkit-transform: scale(1.04);
  -moz-transform: scale(1.04);
  -o-transform: scale(1.04);
  -ms-transform: scale(1.04);
}
.button:active {
  background: #000;
}
.button a {
  color: #ffffff;
  padding: 7px 30px !important;
  text-decoration: none;
}
.button a:hover {
  color: #ffffff;
}
.button:hover {
	color: #fff;
}


</style>

<ul class="catCardList">
<?php  
        // Generate the membership cards dynamically
        foreach ($memberships as $membership) {
          $name = $membership['packages_name'];
          $price = $membership['packages_price'];
          $imageUrl = "http://localhost/Flight-Booking-System/img/Membership.png";
          $membershipUrl = "http://localhost/Flight-Booking-System/HTML/memberships/" . strtolower(str_replace(" ", "-", $name)) . ".php";
        ?>
    <li class="catCardList">
    <div class="catCard"><a href="#" ><img style="background-image: url('<?php echo $imageUrl; ?>');  background-size: 200px 220px; "></a>
    <div class="lowerCatCard">
    <h3><?php echo $name; ?></h3>
    <div class="startingPrice">Prices Starting At <span><?php echo $price; ?> ALL</span></div>
    <p>Unlock Exclusive Benefits with Our Airline Membership!

Experience priority boarding, luxurious airport lounges, extra legroom, and enhanced in-flight amenities. Enjoy special offers, discounts, and upgrades. Join today and elevate your travel experience</p>
  
  
    <div id="catCardButton" class="button"><a href="../HTML/comingSoon.php">View Product</a></div>
    </div>
    </div>
    </li> 
    <?php
        }
        ?>
    