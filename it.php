<?php

// Include database connection
require_once 'database.php';

$sql = "SELECT * FROM faculties WHERE department = 'IT'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>IT Department</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .profile-card {
            margin: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 15px;
            text-align: center;
            box-shadow: 2px 2px 12px rgba(0,0,0,0.1);
        }
        .profile-card img {
            max-width: 100%;
            border-radius: 10%;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1 class="text-center mt-5">IT Department</h1>
    <h2 class="text-center mt-4">Faculties</h2>
    <div class="row">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $position = $row["position"] == "Others" ? $row["other_position"] : $row["position"];
                echo "<div class='col-md-4'>";
                echo "<div class='profile-card'>";
                echo "<img src='" . $row["image_path"] . "' alt='Faculty Image'>";
                echo "<h3>" . $row["name"] . "</h3>";
                echo "<p>" . $position . "</p>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "<p class='text-center'>No faculties found</p>";
        }
        ?>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
$conn->close();
?>
