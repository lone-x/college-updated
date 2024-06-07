<?php
require 'database.php';
require_once 'restricted.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['delete_image'])) {
        $image_id = $_POST['image_id'];
        $stmt = $conn->prepare("DELETE FROM images WHERE id = ?");
        $stmt->bind_param("i", $image_id);
        $stmt->execute();
        $stmt->close();
    }

    if (isset($_POST['update_all_tags'])) {
        foreach ($_POST['tags'] as $image_id => $new_tags) {
            $stmt = $conn->prepare("UPDATE images SET tags = ? WHERE id = ?");
            $stmt->bind_param("si", $new_tags, $image_id);
            $stmt->execute();
            $stmt->close();
        }
    }

    if (isset($_POST['toggle_featured'])) {
        $image_id = $_POST['image_id'];
        $current_featured = $_POST['current_featured'];
        $new_featured = $current_featured ? 0 : 1;

        $stmt = $conn->prepare("UPDATE images SET featured = ? WHERE id = ?");
        $stmt->bind_param("ii", $new_featured, $image_id);
        $stmt->execute();
        $stmt->close();
    }
}

$tags_result = $conn->query("SELECT * FROM tags");
$images_result = $conn->query("SELECT * FROM images");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Images</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php require 'sidebar4.php'; ?>
<div class="container mt-5">
    <h1>Manage Images</h1>
    <form method="post">
        <button type="submit" name="update_all_tags" class="btn btn-primary mb-3">Update All Tags</button>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Tags</th>
                    <th>Featured</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($image = $images_result->fetch_assoc()): ?>
                    <tr>
                        <td><img src="<?php echo htmlspecialchars($image['file_path']); ?>" style="width: 100px;"></td>
                        <td>
                            <select name="tags[<?php echo $image['id']; ?>]" class="form-control">
                                <?php
                                $tags_result = $conn->query("SELECT * FROM tags");
                                while ($tag = $tags_result->fetch_assoc()): ?>
                                    <option value="<?php echo htmlspecialchars($tag['name']); ?>" <?php echo $tag['name'] == $image['tags'] ? 'selected' : ''; ?>>
                                        <?php echo htmlspecialchars($tag['name']); ?>
                                    </option>
                                <?php endwhile; ?>
                            </select>
                        </td>
                        <td>
                            <form method="post" style="display: inline-block;">
                                <input type="hidden" name="image_id" value="<?php echo $image['id']; ?>">
                                <input type="hidden" name="current_featured" value="<?php echo $image['featured']; ?>">
                                <button type="submit" name="toggle_featured" class="btn btn-<?php echo $image['featured'] ? 'success' : 'secondary'; ?>">
                                    <?php echo $image['featured'] ? 'Featured' : 'Not Featured'; ?>
                                </button>
                            </form>
                        </td>
                        <td>
                            <form method="post" style="display: inline-block;">
                                <input type="hidden" name="image_id" value="<?php echo $image['id']; ?>">
                                <button type="submit" name="delete_image" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
