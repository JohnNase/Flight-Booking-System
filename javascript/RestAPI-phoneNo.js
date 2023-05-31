 
$(document).ready(function() {
  // AJAX request to retrieve country codes
  $.ajax({
    url: 'https://restcountries.com/v3.1/independent?status=true', //  API endpoint URL
    method: 'GET',
    success: function(response) {
      // Process the response and populate the select element
      var select = $('#country-code');
      response.forEach(function(country) {
        var option = $('<option></option>').val(country.code).text(country.name);
        select.append(option);
      });
    },
    error: function() {
      // Handle errors if the API request fails
      console.log('Failed to retrieve country codes.');
    }
  });
});
