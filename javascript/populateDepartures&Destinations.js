function populateDepartures() {
  var destination = document.getElementById("destination").value;
  var departure = document.getElementById("departure");

  // Clear previous options
  departure.innerHTML = "";

  // Retrieve departures from the server
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
    if (this.readyState === 4 && this.status === 200) {
      var options = JSON.parse(this.responseText);
      for (var i = 0; i < options.length; i++) {
        var option = document.createElement("option");
        option.text = options[i];
        departure.add(option);
      }
    }
  };
  xhr.open("GET", "getDepartures.php?destination=" + destination, true);
  xhr.send();
}


  function populateDestinations() {
    var departure = document.getElementById("departure").value;
    var destination = document.getElementById("destination");
  
    // Clear previous options
    destination.innerHTML = "";
  
    // Retrieve destinations from the server
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
      if (this.readyState === 4 && this.status === 200) {
        var options = JSON.parse(this.responseText);
        for (var i = 0; i < options.length; i++) {
          var option = document.createElement("option");
          option.text = options[i];
          destination.add(option);
        }
      }
    };
    xhr.open("GET", "getDestinations.php?departure=" + departure, true);
    xhr.send();
  }
  
// // Add an event listener to the destination dropdown
// var destinationDropdown = document.getElementById("destination");
// destinationDropdown.addEventListener("change", populateDepartures);

// // Add an event listener to the departure dropdown
// var departureDropdown = document.getElementById("departure");
// departureDropdown.addEventListener("change", populateDestinations);
