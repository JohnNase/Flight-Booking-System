
document.addEventListener('DOMContentLoaded', function() { 

const logoutButton = document.getElementById('logOut-btn'); 
logoutButton.addEventListener('click', function(event){
    event.preventDefault(); // Prevent the default link behavior
    // Redirect to the desired page
    window.location.assign('http://localhost/Flight-Booking-System/HTML/logout.php');
}); 
 
const homeButton = document.getElementById('home-btn'); 
homeButton.addEventListener('click', function(event){
   event.preventDefault(); // Prevent the default link behavior
  // Redirect to the desired page
  window.location.assign('http://localhost/Flight-Booking-System/HTML/clientDashboard.php');
}); 
 
const myProfileButton = document.getElementById('myProfile-btn');
myProfileButton.addEventListener('click', function(event) {
  event.preventDefault(); // Prevent the default link behavior
  // Redirect to the desired page
  window.location.assign('http://localhost/Flight-Booking-System/HTML/myProfile.php');
});
 
const myFlightsButton = document.getElementById('myFlights-btn');
myFlightsButton.addEventListener('click', function(event) {
  event.preventDefault(); // Prevent the default link behavior
  // Redirect to the desired page
  window.location.assign('http://localhost/Flight-Booking-System/HTML/inConstruction.php');
});

// const notificationsButton = document.getElementById('Notifications-btn');
// notificationsButton.addEventListener('click', function(event) {
//   event.preventDefault(); // Prevent the default link behavior
//   // Redirect to the desired page
//   window.location.assign('http://localhost/Flight-Booking-System/HTML/inConstruction.php');
// });


});

 
