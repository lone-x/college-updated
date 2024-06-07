<?php
// Include database connection or any other necessary files
require_once 'database.php'; // Include database configuration
require_once 'restricted.php'; 

// Define variables and initialize with empty values
$image = $caption = $text_content = $button = $location = '';
$image_err = $caption_err = '';

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate image
    if (empty($_FILES["image"]["name"])) {
        $image_err = "Please select an image file.";
    } else {
        // Check if file is an actual image
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check !== false) {
            $image = $_FILES["image"]["name"];
        } else {
            $image_err = "File is not an image.";
        }
    }
    
    // Validate caption
    if (empty(trim($_POST["caption"]))) {
        $caption_err = "Please enter a caption.";
    } else {
        $caption = trim($_POST["caption"]);
    }
    
    // Validate text content (optional)
    $text_content = trim($_POST["text_content"]);
    
    // Validate button
    $button = trim($_POST["button"]);

    // Validate location
    $location = trim($_POST["location"]);

    // Check input errors before inserting into database
    if (empty($image_err) && empty($caption_err)) {
        // Prepare an INSERT statement
        $sql = "INSERT INTO slider_contents (image_url, caption, text_content, button, location) VALUES (?, ?, ?, ?, ?)";
        
        if ($stmt = $conn->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("sssss", $param_image, $param_caption, $param_text_content, $param_button, $param_location);
            
            // Set parameters
            $param_image = $image;
            $param_caption = $caption;
            $param_text_content = $text_content;
            $param_button = $button;
            $param_location = $location;
            
            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                // File upload
                $target_dir = "slideruploads/";
                $target_file = $target_dir . basename($_FILES["image"]["name"]);
                move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

                // Redirect to index.php after successful submission
                header("location: index.php");
                exit();
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        } else {
            echo "Error: " . $conn->error;
        }
        
        // Close statement
        $stmt->close();
    }
}

// Close connection (not necessary here as it's done automatically at the end of the script)
//$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Slider Content</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="sidebar4.css">
   
</head>
<body>
    <?php include"sidebar4.php"?>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-primary">
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Add Slider Content</h2>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group <?php echo (!empty($image_err)) ? 'has-error' : ''; ?>">
                            <label for="image">Image:</label>
                            <input type="file" class="form-control-file" name="image" id="image" required>
                            <span class="text-danger"><?php echo $image_err; ?></span>
                        </div>
                        
                        <div class="form-group <?php echo (!empty($caption_err)) ? 'has-error' : ''; ?>">
                            <label for="caption">Title:</label>
                            <input type="text" class="form-control" name="caption" id="caption">
                            <span class="text-danger"><?php echo $caption_err; ?></span>
                        </div>
                        
                        <div class="form-group">
                            <label for="text_content">Text Content:</label>
                            <textarea class="form-control" name="text_content" id="text_content" rows="4" cols="50"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="button">Button:</label>
                            <input type="text" class="form-control" name="button" id="button">
                        </div>

                        <div class="form-group">
                            <label for="location">Location(href):</label>
                            <input type="text" class="form-control" name="location" id="location">
                        </div>
                        
                        <div class="text-center">
                            <input type="submit" class="btn btn-primary mt-3" value="Add Content">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
