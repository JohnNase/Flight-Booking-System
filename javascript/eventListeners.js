// The following event listeners from HTML will be created:

// from html:
//  <a id= "login-btn" href="login" color=white>LOGIN</a>
// // 		<a id= "register-btn" href="register" color="white">SIGN UP</a>
// // 		<a id= "availableflights-btn" href="showavailabileflights" color=white>AVAILABILE FLIGHTS</a>
// // 		<a id= "contactus-btn" href="contactus" color=white>CONTACT US</a>
// // 		<a id= "packages-btn" href="packages" color=white>PACKAGES</a> 
// // 		<a id= "aboutus-btn" href="aboutus" color=white>ABOUT US</a>

// Sara's Event Listeners:

// LOGIN
document.addEventListener('DOMContentLoaded', function() {
    const loginButton = document.getElementById("login-btn"); 
loginButton.addEventListener('click', function(event){
    event.preventDefault(); // Prevent the default link behavior
    // Redirect to the desired page
    window.location.assign('http://localhost/Flight-Booking-System/HTML/login.php');
}); 


// PACKAGES
const packagesButton = document.getElementById('packages-btn'); 
packagesButton.addEventListener('click', function(event){
    event.preventDefault(); // Prevent the default link behavior
    // Redirect to the desired page
    window.location.assign('http://localhost/Flight-Booking-System/HTML/packages.php');
}); 


// ABOUT US
const aboutusButton = document.getElementById('aboutus-btn'); 
aboutusButton.addEventListener('click', function(event){
   event.preventDefault(); // Prevent the default link behavior
  // Redirect to the desired page
  window.location.assign('http://localhost/Flight-Booking-System/HTML/aboutUs.php');
}); 


// JOHN'S EVENT LISTENERS:

// AVAILABLE FLIGHTS
const availableflightsButton = document.getElementById('availableflights-btn');
availableflightsButton.addEventListener('click', function(event) {
  event.preventDefault(); // Prevent the default link behavior
  // Redirect to the desired page
  window.location.assign('http://localhost/Flight-Booking-System/HTML/availableFlights.php');
});

// CONTACT US
const contactusButton = document.getElementById('contactus-btn');
contactusButton.addEventListener('click', function(event) {
  event.preventDefault(); // Prevent the default link behavior
  // Redirect to the desired page
  window.location.assign('http://localhost/Flight-Booking-System/HTML/contactUs.php');
});

// SIGNUP 

const registerButton = document.getElementById("register-btn"); 
registerButton.addEventListener('click', function(event) {
    event.preventDefault(); // Prevent the default link behavior
    // Redirect to the desired page
    window.location.assign('http://localhost/Flight-Booking-System/HTML/signup.php');
}); 



});

 
