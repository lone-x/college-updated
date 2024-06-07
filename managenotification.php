<?php
require_once 'database.php';
require_once 'restricted.php';
// Fetch notifications from the database
$sql = "SELECT * FROM notification";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Notifications</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'sidebar4.php'; ?>
    <div class="container">
        <h2 class="mt-5">Manage Notifications</h2>
        <table class="table mt-3">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Notification</th>
                    <th>URL</th>
                    <th>Tags</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['notification']; ?></td>
                        <td><?php echo $row['url']; ?></td>
                        <td><?php echo $row['tags']; ?></td>
                        <td>
                            <a class="btn btn-primary" href="editnotification.php?id=<?php echo $row['id']; ?>">Edit</a>
                            <a class="btn btn-danger" href="deletenotification.php?id=<?php echo $row['id']; ?>">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
