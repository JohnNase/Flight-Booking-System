
<?php  
if (!isset($_SESSION)) {
  session_start();
}

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
$query = "SELECT COUNT(*) AS numbers FROM Notifications JOIN Passengers ON Notifications.passenger_id = Passengers.passenger_id WHERE passengers.passenger_username = '$loggedInUser'";
$result = mysqli_query($conn, $query);
// var_dump($query);
// Prepare an array to hold the notification items
$notifications = array();

// Fetch each row from the result set
while ($row = mysqli_fetch_assoc($result)) {
    // Modify the message format
    $NUMBER = $row['numbers'];
}
?>
<style>
    ul {
        list-style: none;
        margin: 0;
        padding: 0;
      }
      
      .notification-drop {
        font-family: 'Ubuntu', sans-serif;
        color: #444;
      }
      .notification-drop .item {
        font-size: 18px;
        position: relative;
        border-bottom: 1px solid #ddd;
      }
      .notification-drop .item:hover {
        cursor: pointer;
      }
      .notification-drop .item i {
        margin-left: 10px;
      }
      .notification-drop .item ul {
        display: none;
        position: absolute;
        top: 100%;
        background: #fff;
        left: -200px;
        right: 0;
        z-index: 1;
        border-top: 1px solid #ddd;
      }
      .notification-drop .item ul li {
        font-size: 13px;
        padding: 15px 0 15px 25px;
      }
      .notification-drop .item ul li:hover {
        background: #ddd;
        color: rgba(0, 0, 0, 0.8);
      }
      
      @media screen and (min-width: 500px) {
        .notification-drop {
          display: flex;
          justify-content: flex-end;
        }
        .notification-drop .item {
          border: none;
        }
      }
      
      
      
      .notification-bell{
        font-size: 20px;
      }
      
      .btn__badge {
        background: #FF5D5D;
        color: white;
        font-size: 12px;
        position: absolute;
        top: 0;
        right: 0px;
        padding:  3px 10px;
        border-radius: 50%;
      }
      
      .pulse-button {
        box-shadow: 0 0 0 0 rgba(255, 0, 0, 0.5);
        -webkit-animation: pulse 1.5s infinite;
      }
      
      .pulse-button:hover {
        -webkit-animation: none;
      }
      
      @-webkit-keyframes pulse {
        0% {
          -moz-transform: scale(0.9);
          -ms-transform: scale(0.9);
          -webkit-transform: scale(0.9);
          transform: scale(0.9);
        }
        70% {
          -moz-transform: scale(1);
          -ms-transform: scale(1);
          -webkit-transform: scale(1);
          transform: scale(1);
          box-shadow: 0 0 0 50px rgba(255, 0, 0, 0);
        }
        100% {
          -moz-transform: scale(0.9);
          -ms-transform: scale(0.9);
          -webkit-transform: scale(0.9);
          transform: scale(0.9);
          box-shadow: 0 0 0 0 rgba(255, 0, 0, 0);
        }
      }
      
      .notification-text{
        font-size: 12px;
        font-weight: bold;
      }
      
      .notification-text span{
        float: right;
      }

      /* how to add color to the scrollbar */
.notification-drop .item ul::-webkit-scrollbar {
    width: 10px;
    background-color: #F5F5F5;
    }
/* Track */
.notification-drop .item ul::-webkit-scrollbar-track {
    box-shadow: inset 0 0 5px grey;
    border-radius: 10px;
    }
  
/* Handle */
.notification-drop .item ul::-webkit-scrollbar-thumb
{
    background: greenyellow;
    border-radius: 10px;
    }

/* Handle on hover */
.notification-drop .item ul::-webkit-scrollbar
:hover {
    background: greenyellow;
    
    }

      .notification-drop .item ul {
    max-height: 400px; 
    overflow-y: auto;

  }

</style>


<ul class="notification-drop">
    <li class="item" >
      <i class="fa fa-bell-o notification-bell" aria-hidden="true">
      <link href="https://fonts.googleapis.com/css?family=Schoolbell&v1" rel="stylesheet">
      </i> 
      <span class="btn__badge pulse-button "><?php echo $NUMBER; ?></span>     
      <ul style=" border-radius: 10px;box-shadow: 0 7px 9px grey; ">
        <!-- The fetched notifications will be dynamically added here -->
      </ul>
    </li>
  </ul>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $(".notification-drop .item").on('click', function() {
      var $ul = $(this).find('ul');
      if ($ul.children().length === 0) {
        // Fetch data from the server
        $.getJSON('fetchNotifications.php', function(data) {
          // Loop through the data and generate list items
          $.each(data, function(index, item) {
            var formattedDate = new Date(item.datetime).toLocaleString();
            var listItem = '<li>' + item.message + '<span>' + formattedDate + '</span></li>';
            $ul.append(listItem);
          });
        });
      }
      $ul.toggle();
    });
  });
</script>