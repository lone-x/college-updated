<?php
// Include database connection
require_once 'database.php';
require_once 'restricted.php';

// Fetch all slides from the database
$sql = "SELECT * FROM slider_contents ORDER BY sort_order";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Slides</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./sidebar.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
    <?php include 'sidebar4.php' ?>
    <div class="container mt-5">
        <h2>Edit Slides</h2>
        <?php if ($result->num_rows > 0): ?>
            <table class="table" id="sortable">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Caption</th>
                        <th>Text Content</th>
                        <th>Button</th>
                        <th>Location</th>
                        <th>Active</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr data-id="<?php echo $row['id']; ?>">
                            <td><img src="slideruploads/<?php echo htmlspecialchars($row['image_url']); ?>" alt="Slide Image" width="100"></td>
                            <td><?php echo htmlspecialchars($row['caption']); ?></td>
                            <td><?php echo htmlspecialchars($row['text_content']); ?></td>
                            <td><?php echo !empty($row['button']) ? htmlspecialchars($row['button']) : 'No Button'; ?></td>
                            <td><?php echo !empty($row['location']) ? htmlspecialchars($row['location']) : 'No Location'; ?></td>
                            <td>
                            <button class="btn btn-<?php echo $row['active'] ? 'success' : 'secondary'; ?> toggle-active" data-id="<?php echo $row['id']; ?>">
                                    <?php echo $row['active'] ? 'Active' : 'Inactive'; ?>
                                </button>
                            </td>
                            <td>
                                <form action="editslide.php" method="post" style="display: inline;">
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                    <button type="submit" class="btn btn-primary">Edit</button>
                                </form>
                                <form action="deleteslide.php" method="post" style="display: inline;">
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No slides found.</p>
        <?php endif; ?>
    </div>

    <script>
        $(document).ready(function() {
            // Make table rows sortable
            $("#sortable tbody").sortable({
                update: function(event, ui) {
                    var order = $(this).sortable('toArray', { attribute: 'data-id' });
                    $.post('update_order.php', { order: order }, function(response) {
                        console.log(response);
                    });
                }
            });

            // Toggle active status
            $('.toggle-active').on('click', function() {
                var button = $(this);
                var slideId = button.data('id');
                
                $.post('toggle_active.php', { id: slideId }, function(response) {
                    var data = JSON.parse(response);
                    if (data.success) {
                        button.toggleClass('btn-success btn-secondary');
                        button.text(data.new_active ? 'Active' : 'Inactive');
                    } else {
                        alert('Failed to toggle status.');
                    }
                });
            });
        });
    </script>
</body>
</html>

