    document.addEventListener('DOMContentLoaded', function() {
        const editProfileButton = document.getElementById('edit-profile');

        editProfileButton.addEventListener('click', () => {
            window.location.href = 'http://localhost/Flight-Booking-System/HTML/myProfile-editButtonClicked.php'; // Update the file path accordingly
        });
    });
  