<?php
require_once 'database.php';

$id = $_GET['id'];
$sql = "SELECT * FROM faculties WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$faculty = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $department = $_POST["department"];
    $position = $_POST["position"];
    $other_position = $position == "Others" ? $_POST["other_position"] : null;
    $image_path = $faculty['image_path'];

    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
        $target_dir = "facultyuploads/";
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $image_path = $target_file;
        } else {
            echo "Sorry, there was an error uploading your file.";
            exit;
        }
    }

    $stmt = $conn->prepare("UPDATE faculties SET name = ?, image_path = ?, department = ?, position = ?, other_position = ? WHERE id = ?");
    $stmt->bind_param("sssssi", $name, $image_path, $department, $position, $other_position, $id);

    if ($stmt->execute()) {
        header("Location: managefaculties.php");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Faculty</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #other_position_div {
            display: none;
        }
    </style>
</head>
<body>
<div class="container">
    <h1 class="text-center mt-5">Edit Faculty</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $faculty['name']; ?>" required>
        </div>

        <div class="form-group">
            <label for="image">Current Image:</label><br>
            <img src="<?php echo $faculty['image_path']; ?>" alt="Current Image" width="100"><br>
            <label for="image">Upload New Image:</label>
            <input type="file" class="form-control-file" id="image" name="image" accept="image/*" onchange="loadFile(event)">
            <img id="preview" width="100"/>
        </div>

        <div class="form-group">
            <label for="department">Department:</label>
            <select class="form-control" id="department" name="department" required>
                <option value="IT" <?php if ($faculty['department'] == 'IT') echo 'selected'; ?>>IT</option>
                <option value="EC" <?php if ($faculty['department'] == 'EC') echo 'selected'; ?>>EC</option>
                <option value="EEE" <?php if ($faculty['department'] == 'EEE') echo 'selected'; ?>>EEE</option>
                <option value="MECH" <?php if ($faculty['department'] == 'MECH') echo 'selected'; ?>>MECH</option>
                <option value="PT" <?php if ($faculty['department'] == 'PT') echo 'selected'; ?>>PT</option>
                <option value="SH" <?php if ($faculty['department'] == 'SH') echo 'selected'; ?>>SH</option>
                <option value="OTH" <?php if ($faculty['department'] == 'OTH') echo 'selected'; ?>>OTH</option>
            </select>
        </div>

        <div class="form-group">
            <label for="position">Position:</label>
            <select class="form-control" id="position" name="position" required onchange="showOtherPosition()">
                <option value="Teacher" <?php if ($faculty['position'] == 'Teacher') echo 'selected'; ?>>Teacher</option>
                <option value="HOD" <?php if ($faculty['position'] == 'HOD') echo 'selected'; ?>>HOD</option>
                <option value="Others" <?php if ($faculty['position'] == 'Others') echo 'selected'; ?>>Others</option>
            </select>
        </div>

        <div class="form-group" id="other_position_div">
            <label for="other_position">Specify Position:</label>
            <input type="text" class="form-control" id="other_position" name="other_position" value="<?php echo $faculty['other_position']; ?>">
        </div>

        <button type="submit" class="btn btn-primary btn-block">Update Faculty</button>
    </form>
</div>

<script>
    function showOtherPosition() {
        var position = document.getElementById("position").value;
        var otherPositionDiv = document.getElementById("other_position_div");
        if (position === "Others") {
            otherPositionDiv.style.display = "block";
        } else {
            otherPositionDiv.style.display = "none";
        }
    }

    var loadFile = function(event) {
        var preview = document.getElementById('preview');
        preview.src = URL.createObjectURL(event.target.files[0]);
        preview.onload = function() {
            URL.revokeObjectURL(preview.src) // free memory
        }
    };

    document.addEventListener('DOMContentLoaded', function() {
        showOtherPosition(); // Show or hide other position field based on initial position value
    });
</script>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
