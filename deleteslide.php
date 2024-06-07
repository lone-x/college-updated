<?php
// Include database connection
require_once 'database.php';
require_once 'restricted.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if slide ID is provided
    if (isset($_POST['id'])) {
        $id = $_POST['id'];

        // Prepare a delete statement
        $sql = "DELETE FROM slider_contents WHERE id = ?";
        
        if ($stmt = $conn->prepare($sql)) {
            // Bind slide ID parameter to the prepared statement
            $stmt->bind_param("i", $id);
            
            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                // Slide deleted successfully, redirect to slide.php or any other page
                header("Location: editslides.php");
                exit();
            } else {
                echo "Error deleting slide.";
            }
            
            // Close statement
            $stmt->close();
        } else {
            echo "Error preparing statement.";
        }
    } else {
        echo "Slide ID not provided.";
    }
} else {
    echo "Invalid request.";
}
?>
