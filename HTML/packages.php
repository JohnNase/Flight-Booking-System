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

<!DOCTYPE html>
<html>
<head>
  <title>Airline Ticket Memberships</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
    body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

header {
  background-color: #f2f2f2;
  padding: 20px;
}

main {
  padding: 20px;
}

footer {
  background-color: #f2f2f2;
  padding: 10px;
  text-align: center;
}

#new-arrivals {
  padding: 40px 0;
}

.container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
  max-width: 1200px;
  margin: 0 auto;
}

.membership-card {
  background-color: #f9f9f9;
  border-radius: 4px;
  padding: 20px;
  width: 300px;
  margin-bottom: 40px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease;
}

.membership-card:hover {
  transform: translateY(-5px);
}

.membership-image {
  width: 100%;
  height: 200px;
  background-size: cover;
  background-position: center;
  border-radius: 4px;
  margin-bottom: 20px;
}

.membership-name {
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 10px;
}

.membership-price {
  font-size: 16px;
  color: #666;
}

</style>
</head>
<body>
  <header>
    <h1>Airline Ticket Memberships</h1>
  </header>

  <main>
    <section id="new-arrivals">
      <div class="container">
        <?php  
        // Generate the membership cards dynamically
        foreach ($memberships as $membership) {
          $name = $membership['packages_name'];
          $price = $membership['packages_price'];
          $imageUrl = "http://localhost/Flight-Booking-System/img/" . strtolower(str_replace(" ", "-", $name)) . ".png";
        ?>
          <div class="membership-card">
            <div class="membership-image" style="background-image: url('<?php echo $imageUrl; ?>');"></div>
            <h2 class="membership-name"><?php echo $name; ?></h2>
            <p class="membership-price">$<?php echo $price; ?></p>
          </div>
        <?php
        }
        ?>
      </div>
    </section>
  </main>

  <footer>
    <p>&copy; 2023 Your Company. All rights reserved.</p>
  </footer>
</body>
</html>
