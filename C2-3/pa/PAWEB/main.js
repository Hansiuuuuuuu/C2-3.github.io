function submitBooking(event) {
    event.preventDefault(); // Prevent the default form submission
  
    var location = document.getElementById('location').value;
    var travellers = document.getElementById('travellers').value;
    var flightNumber = document.getElementById('flightNumber').value;
    var seatPreference = document.getElementById('seatPreference').value;
  
    // Validate form values
    if (!location || !travellers || !flightNumber) {
      alert('Please fill in all required fields.');
      return;
    }
  
    // Display a confirmation popup
    if (confirm('Do you want to proceed with the booking?')) {
      // Create FormData object to send form data to server
      var formData = new FormData();
      formData.append('location', location);
      formData.append('travellers', travellers);
      formData.append('flightNumber', flightNumber);
      formData.append('seatPreference', seatPreference);
  
      // Send form data to the server using AJAX
      var xhr = new XMLHttpRequest();
      xhr.open('POST', 'process_booking.php', true);
      xhr.onload = function() {
        if (xhr.status === 200) {
          alert('Booking successful!');
          // Optionally, you can redirect the user to a confirmation page here
        } else {
          alert('Error processing the booking. Please try again.');
        }
      };
      xhr.send(formData);
    }
  }
  