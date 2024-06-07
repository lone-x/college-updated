<?php
// Include database connection
require_once 'database.php';
require_once 'restricted.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if slide ID is provided
    if (isset($_POST['id'])) {
        $id = $_POST['id'];

        // Prepare variables for image, caption, and text content
        $image = $caption = $text_content = '';

        $sql = "SELECT * FROM slider_contents WHERE id = ?";
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("i", $id);
            if ($stmt->execute()) {
                $result = $stmt->get_result();
                if ($result->num_rows == 1) {
                    $row = $result->fetch_assoc();
                    // Your code here
                }
            }
            $stmt->close();
        } else {
            echo "Error preparing statement.";
        }
        // Check if image file is uploaded
        if (!empty($_FILES["image"]["name"])) {
            $image = $_FILES["image"]["name"];
            // Move uploaded image to directory (if needed)
            $target_dir = "slideruploads/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        }
        else{
             // Use the old image from the database
             $image = $row['image_url'];
        }

        // Validate and sanitize caption and text content
        $caption = trim($_POST["caption"]);
        $text_content = trim($_POST["text_content"]);

        // Update slide details in the database
        $sql = "UPDATE slider_contents SET image_url = ?, caption = ?, text_content = ? WHERE id = ?";
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("sssi", $image, $caption, $text_content, $id);
            if ($stmt->execute()) {
                // Slide updated successfully, redirect to slide.php or any other page
                header("Location: editslides.php");
                exit();
            } else {
                echo "Error updating slide.";
            }
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
