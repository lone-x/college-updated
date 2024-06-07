<?php
require_once 'database.php';
require_once 'restricted.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $notification = $_POST['notification'];
    $url = $_POST['url'];
    $tags = implode(',', $_POST['tags']); // Convert array to comma-separated string

    // Update notification in the database
    $sql = "UPDATE notification SET notification='$notification', url='$url', tags='$tags' WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
         // Redirect to managenotifications.php after successful update
         header("Location: managenotification.php");
         exit; // Ensure script stops execution after redirect
    } else {
        echo '<div class="alert alert-danger" role="alert">Error updating notification: ' . mysqli_error($conn) . '</div>';
    }
}

// Retrieve notification details from database based on ID
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM notification WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $current_tags = explode(',', $row['tags']); // Split tags into an array
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Notification</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'sidebar4.php'; ?>
    <div class="container">
        <h2 class="mt-5">Edit Notification</h2>
        <form method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div class="form-group">
                <label for="notification">Notification:</label>
                <input type="text" class="form-control" id="notification" name="notification" value="<?php echo $row['notification']; ?>" required>
            </div>
            <div class="form-group">
                <label for="url">URL:</label>
                <input type="text" class="form-control" id="url" name="url" value="<?php echo $row['url']; ?>" required>
            </div>
            <div class="form-group">
                <label for="tags">Tags:</label>
                <select class="form-control" id="tags" name="tags[]" multiple required>
                    <option value="home" <?php echo in_array('home', $current_tags) ? 'selected' : ''; ?>>Home</option>
                    <option value="it" <?php echo in_array('it', $current_tags) ? 'selected' : ''; ?>>IT</option>
                    <option value="ec" <?php echo in_array('ec', $current_tags) ? 'selected' : ''; ?>>EC</option>
                    <option value="mech" <?php echo in_array('mech', $current_tags) ? 'selected' : ''; ?>>Mech</option>
                    <option value="eee" <?php echo in_array('eee', $current_tags) ? 'selected' : ''; ?>>EEE</option>
                    <option value="pt" <?php echo in_array('pt', $current_tags) ? 'selected' : ''; ?>>PT</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
