<?php
include('navbarClient.php');
?>
<html lang="en">
<head>
    <link rel="stylesheet" href="http://localhost/Flight-Booking-System/css/FailedPayment.scss">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

    <!-- Modal HTML -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="icon-box">
                        <i class="material-icons">&#xE5CD;</i> <!-- Red cross icon -->
                    </div>
                    <h4 class="modal-title w-100">Failed Payment</h4> <!-- Updated title for failed payment -->
                </div>
                <div class="modal-body">
                    <p class="text-center">Your transaction was not successful. Please try again.</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger btn-block" data-dismiss="modal">OK</button> <!-- Red button for failed payment -->
                </div>
            </div>
        </div>
    </div>

    <script>
        // Open the modal when the page loads
        $(window).on('load', function () {
            $('#myModal').modal('show');
        });
    </script>
</body>
</html>
