<?php
require 'database.php';
require_once 'restricted.php';

$tags_result = $conn->query("SELECT * FROM tags");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['upload'])) {
    $featured = isset($_POST['featured']) ? 1 : 0;
    $tags = $_POST['tags'] ? $_POST['tags'] : 'misc';

    if (isset($_FILES['images'])) {
        if (!is_dir('uploads')) {
            mkdir('uploads', 0755, true);
        }

        foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
            $file_name = basename($_FILES['images']['name'][$key]);
            $file_path = "uploads/" . $file_name;

            if (move_uploaded_file($tmp_name, $file_path)) {
                $stmt = $conn->prepare("INSERT INTO images (file_path, featured, tags) VALUES (?, ?, ?)");
                $stmt->bind_param("sis", $file_path, $featured, $tags);
                $stmt->execute();
            } else {
                echo "Failed to upload image: $file_name";
            }
        }

        // Redirect to manage_images.php after successful upload
        header("Location: manage_images.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Images</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php include 'sidebar4.php'; ?>
<div class="container mt-5">
    <h1>Upload Images</h1>
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="images">Upload Images</label>
            <input type="file" name="images[]" class="form-control-file" id="images" multiple required onchange="previewImages()">
        </div>
        <div class="form-group">
            <label for="tags">Tags</label>
            <select name="tags" class="form-control" id="tags">
                <option value="misc">Misc</option>
                <?php while ($tag = $tags_result->fetch_assoc()): ?>
                    <option value="<?php echo htmlspecialchars($tag['name']); ?>"><?php echo htmlspecialchars($tag['name']); ?></option>
                <?php endwhile; ?>
            </select>
        </div>
        <div class="form-check">
            <input type="checkbox" name="featured" class="form-check-input" id="featured">
            <label class="form-check-label" for="featured">Feature this image</label>
        </div>
        <button type="submit" name="upload" class="btn btn-primary mt-3">Upload</button>
    </form>

    <h2 class="mt-5">Newly Selected Images</h2>
    <div class="row" id="imagePreview"></div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
function previewImages() {
    var preview = document.getElementById('imagePreview');
    preview.innerHTML = '';
    var files = document.getElementById('images').files;

    for (var i = 0; i < files.length; i++) {
        var reader = new FileReader();

        reader.onload = function(event) {
            var imgElement = document.createElement('img');
            imgElement.src = event.target.result;
            imgElement.className = 'img-thumbnail col-md-3 mb-3';
            preview.appendChild(imgElement);
        }

        reader.readAsDataURL(files[i]);
    }
}
</script>
</body>
</html>
