function populateDepartures() {
  var destination = document.getElementById("destination").value;
  var departure = document.getElementById("departure");

  // Store the current departure value
  var currentDeparture = departure.value;

  // Retrieve departures from the server
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
    if (this.readyState === 4 && this.status === 200) {
      var options = JSON.parse(this.responseText);

      // Clear all options
      departure.innerHTML = "";

      // Add the default option
      var defaultOption = document.createElement("option");
      defaultOption.text = "Select a departure";
      departure.add(defaultOption);

      // Add the retrieved departures
      for (var i = 0; i < options.length; i++) {
        var option = document.createElement("option");
        option.text = options[i];
        departure.add(option);
      }

      // Set the value of departure to the stored current departure value
      if (departure.value !== currentDeparture) {
        departure.value = currentDeparture;
      }
    }
  };
  xhr.open("GET", "getDepartures.php?destination=" + destination, true);
  xhr.send();
}

function populateDestinations() {
  var departure = document.getElementById("departure").value;
  var destination = document.getElementById("destination");

  // Store the current destination value
  var currentDestination = destination.value;

  // Retrieve destinations from the server
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
    if (this.readyState === 4 && this.status === 200) {
      var options = JSON.parse(this.responseText);

      // Clear all options
      destination.innerHTML = "";

      // Add the default option
      var defaultOption = document.createElement("option");
      defaultOption.text = "Select a destination";
      destination.add(defaultOption);

      // Add the retrieved destinations
      for (var i = 0; i < options.length; i++) {
        var option = document.createElement("option");
        option.text = options[i];
        destination.add(option);
      }

      // Set the value of destination to the stored current destination value
      if (destination.value !== currentDestination) {
        destination.value = currentDestination;
      }
    }
  };
  xhr.open("GET", "getDestinations.php?departure=" + departure, true);
  xhr.send();
}
