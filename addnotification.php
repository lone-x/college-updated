<?php
require_once 'database.php';
require_once 'restricted.php';
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $notification = $_POST['notification'];
    $url = $_POST['url'];
    $tags = implode(',', $_POST['tags']); // Convert array to comma-separated string

    // Insert new notification into database
    $sql = "INSERT INTO notification (notification, url, tags) VALUES ('$notification', '$url', '$tags')";
    if (mysqli_query($conn, $sql)) {
        // Redirect to managenotifications.php after successful update
        header("Location: managenotification.php");
        exit; // Ensure script stops execution after redirect
    } else {
        echo '<div class="alert alert-danger" role="alert">Error: ' . $sql . '<br>' . mysqli_error($conn) . '</div>';
    }

    // Close database connection
    mysqli_close($conn);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Notification</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'sidebar4.php'?>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h2>Add New Notification</h2>
            </div>
            <div class="card-body">
                <form method="post">
                    <div class="form-group">
                        <label for="notification">Notification:</label>
                        <input type="text" class="form-control" id="notification" name="notification" required>
                    </div>
                    <div class="form-group">
                        <label for="url">URL:</label>
                        <input type="text" class="form-control" id="url" name="url" required>
                    </div>
                    <div class="form-group">
                        <label for="tags">Tags:</label>
                        <select class="form-control" id="tags" name="tags[]" multiple required>
                            <option value="home" selected>Home</option>
                            <option value="it">IT</option>
                            <option value="ec">EC</option>
                            <option value="mech">Mech</option>
                            <option value="eee">EEE</option>
                            <option value="pt">PT</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

