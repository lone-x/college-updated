<?php
require_once 'database.php';

if (isset($_POST['id'])) {
    $id = intval($_POST['id']);
    
    // Fetch the current active status
    $sql = "SELECT active FROM slider_contents WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($current_active);
    $stmt->fetch();
    $stmt->close();
    
    // Toggle the active status
    $new_active = $current_active ? 0 : 1;
    $sql = "UPDATE slider_contents SET active = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $new_active, $id);
    $stmt->execute();
    $stmt->close();
    
    echo json_encode(['success' => true, 'new_active' => $new_active]);
} else {
    echo json_encode(['success' => false]);
}
?>
