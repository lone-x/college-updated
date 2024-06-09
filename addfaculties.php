<?php
require_once 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $department = $_POST["department"];
    $position = $_POST["position"];
    $other_position = $position == "Others" ? $_POST["other_position"] : null;
    $image_path = "";

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

    $stmt = $conn->prepare("INSERT INTO faculties (name, image_path, department, position, other_position) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $image_path, $department, $position, $other_position);

    if ($stmt->execute()) {
        echo "New faculty member added successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Faculty</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            max-width: 600px;
            margin-top: 50px;
        }
        #other_position_div {
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Add Faculty</h1>
        <form action="addfaculties.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            
            <div class="form-group">
                <label for="image">Upload Image:</label>
                <input type="file" class="form-control-file" id="image" name="image" accept="image/*" required>
            </div>
            
            <div class="form-group">
                <label for="department">Department:</label>
                <select class="form-control" id="department" name="department" required>
                    <option value="IT">IT</option>
                    <option value="EC">EC</option>
                    <option value="EEE">EEE</option>
                    <option value="MECH">MECH</option>
                    <option value="PT">PT</option>
                    <option value="SH">SH</option>
                    <option value="OTH">OTH</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="position">Position:</label>
                <select class="form-control" id="position" name="position" required onchange="showOtherPosition()">
                    <option value="Teacher">Teacher</option>
                    <option value="HOD">HOD</option>
                    <option value="Others">Others</option>
                </select>
            </div>
            
            <div class="form-group" id="other_position_div">
                <label for="other_position">Specify Position:</label>
                <input type="text" class="form-control" id="other_position" name="other_position">
            </div>
            
            <button type="submit" class="btn btn-primary btn-block">Add Faculty</button>
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
    </script>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

