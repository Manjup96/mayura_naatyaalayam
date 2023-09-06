


<?php
session_start();

if (!isset($_SESSION['loggedin'])) {
    header("Location: login.php");
} else {
    $_SESSION['url'] = $_SERVER['REQUEST_URI'];
}
include("config.php");

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} else {

    $id = $_GET["id"];

    $sql = "DELETE FROM contact_form WHERE id = '$id'";

    if ($con->query($sql) === TRUE) {
        echo '
        <script>
            function showModal() {
                var myModal = new bootstrap.Modal(document.getElementById("successfullyDeleted"));
                myModal.show();
            }
            window.onload = showModal;
        </script>
        ';
        echo '
        <!-- Modal -->
        <div class="modal fade" id="successfullyDeleted" tabindex="-1" aria-labelledby="successfullyDeleted" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="successfullyDeleted">Selected row data has been successfully deleted</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Thank you. </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Close</button>
                    </div>
                </div>
            </div>
        </div>
        ';
    } else {
        ?>
        <script>
            window.location = "contact_us_leads.php";
            alert("Failed to delete record. Please try again.");
        </script>
        <?php
    }
}
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
   document.addEventListener("DOMContentLoaded", function() {
        // Redirect after alert is closed
        const closeButton = document.querySelector("#successfullyDeleted .btn.btn-secondary");
        closeButton.addEventListener("click", function() {
            window.location.href = "contact_us_leads.php";
        });
    });
</script>
