<?php
// Include database connection
require_once 'database.php';
require_once 'restricted.php';

// Check if slide ID is provided in the POST data
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Fetch slide details from the database
    $sql = "SELECT * FROM slider_contents WHERE id = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $id);
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            if ($result->num_rows == 1) {
                $row = $result->fetch_assoc();
                // Display the form to edit slide details
                ?>

                <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Slide</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styles can be added here */
        .thumbnail {
            max-width: 200px;
            max-height: 200px;
        }
    </style>
</head>

<body>
    <?php include "sidebar4.php"; ?>
    <div class="container mt-5">
        <h2 class="mb-4">Edit Slide</h2>
        <div class="border p-4">
            <form action="updateslide.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="mb-3">
                    <label for="image" class="form-label">Current Image:</label><br>
                    <img id="currentImage" src="slideruploads/<?php echo htmlspecialchars($row['image_url']); ?>" alt="Current Image" class="thumbnail mb-2"><br>
                    <label for="image" class="form-label">Upload New Image:</label><br>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <div class="mb-3">
                    <label for="caption" class="form-label">Caption:</label>
                    <input type="text" class="form-control" id="caption" name="caption" value="<?php echo htmlspecialchars($row['caption']); ?>">
                </div>
                <div class="mb-3">
                    <label for="text_content" class="form-label">Text Content:</label>
                    <textarea class="form-control" id="text_content" name="text_content" rows="4"><?php echo htmlspecialchars($row['text_content']); ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="button" class="form-label">Button:</label>
                    <input type="text" class="form-control" id="button" name="button" value="<?php echo htmlspecialchars($row['button']); ?>">
                </div>
                <div class="mb-3">
                    <label for="location" class="form-label">Location:</label>
                    <input type="text" class="form-control" id="location" name="location" value="<?php echo htmlspecialchars($row['location']); ?>">
                </div>
                <button type="submit" class="btn btn-primary">Update Slide</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // JavaScript to preview the selected image
        document.getElementById('image').addEventListener('change', function(event) {
            const [file] = event.target.files;
            if (file) {
                document.getElementById('currentImage').src = URL.createObjectURL(file);
            }
        });
    </script>
</body>

</html>

                <?php
            } else {
                echo "Slide not found.";
            }
        } else {
            echo "Error executing query.";
        }
        $stmt->close();
    } else {
        echo "Error preparing statement.";
    }
} else {
    echo "Slide ID not provided in the form data.";
}
?>
