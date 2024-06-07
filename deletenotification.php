<?php
require_once 'database.php';
require_once 'restricted.php';
// Check if notification ID is provided
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete notification from database
    $sql = "DELETE FROM notification WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
         // Redirect to managenotifications.php after successful update
         header("Location: managenotification.php");
         exit; // Ensure script stops execution after redirect
    } else {
        echo '<div class="alert alert-danger" role="alert">Error deleting notification: ' . mysqli_error($conn) . '</div>';
    }

    // Close database connection
    mysqli_close($conn);
} else {
    echo '<div class="alert alert-danger" role="alert">No notification ID provided!</div>';
}
?>
