<?php
require 'database.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM posts WHERE id = $id");
    if ($result) {
        $post = $result->fetch_assoc();
    } else {
        die("Error fetching post: " . $conn->error);
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $slug = strtolower(str_replace(' ', '-', $title));

    // Handle image upload
    $image_url = $post['image_url'];
    if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
        $image = $_FILES['image'];
        $imagePath = 'postedimages/' . basename($image['name']);
        if (move_uploaded_file($image['tmp_name'], $imagePath)) {
            $image_url = $imagePath;
        } else {
            echo "Failed to upload image.";
        }
    }

    $stmt = $conn->prepare("UPDATE posts SET title = ?, content = ?, image_url = ?, slug = ? WHERE id = ?");
    if ($stmt) {
        $stmt->bind_param("ssssi", $title, $content, $image_url, $slug, $id);

        if ($stmt->execute()) {
            $stmt->close();
            // Update the PHP file for the post
            generatePostFile($id, $title, $content, $image_url, $slug);
            header("Location: manage_post.php");
            exit;
        } else {
            echo "Error executing statement: " . $stmt->error;
        }
    } else {
        echo "Error preparing statement: " . $conn->error;
    }
}

function generatePostFile($post_id, $title, $content, $image_url, $slug) {
    $template = file_get_contents('template.php');
    $template = str_replace('<?php echo htmlspecialchars($title); ?>', htmlspecialchars($title), $template);
    $template = str_replace('<?php echo htmlspecialchars($image_url); ?>', htmlspecialchars($image_url), $template);
    $template = str_replace('<?php echo $content; ?>', $content, $template);

    $filename = "posts/post_$post_id.php";
    if (file_put_contents($filename, $template) === false) {
        echo "Failed to write post file.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1>Edit Post</h1>
    <form method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($post['id']); ?>">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" value="<?php echo htmlspecialchars($post['title']); ?>" required>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" class="form-control" id="content" rows="5" required><?php echo htmlspecialchars($post['content']); ?></textarea>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control-file" id="image" accept="image/*" onchange="previewImage(event)">
            <p>Current image:</p>
            <img id="currentImage" src="<?php echo htmlspecialchars($post['image_url']); ?>" alt="Post Image" style="width: 200px; height: auto;">
        </div>
        <button type="submit" class="btn btn-primary">Update Post</button>
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
function previewImage(event) {
    const reader = new FileReader();
    reader.onload = function(){
        const output = document.getElementById('currentImage');
        output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
}
</script>
</body>
</html>
