<?php
require_once 'database.php';

if (isset($_POST['order']) && is_array($_POST['order'])) {
    $order = $_POST['order'];
    foreach ($order as $position => $id) {
        $sql = "UPDATE slider_contents SET sort_order = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ii", $position, $id);
        $stmt->execute();
        $stmt->close();
    }
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false]);
}
?>
