<?php
// Check if item ID is provided
if(isset($_POST["item_id"])) {
    // Sanitize the input to prevent SQL injection
    $item_id = $_POST["item_id"];

    // Database connection details
    $servername = "localhost"; 
    $username = "id22301757_root"; 
    $password = "W@duhajagwmah0"; 
    $database = "id22301757_localhost";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to delete item from the database
    $sql = "DELETE FROM checkout_item WHERE list_item_id = ?";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        echo "Error preparing statement: " . $conn->error;
        exit;
    }
    $stmt->bind_param("i", $item_id);
    if ($stmt->execute()) {
        echo "Item deleted successfully";
    } else {
        echo "Error deleting item: " . $conn->error;
    }

    // Close connection
    $conn->close();
} else {
    echo "Item ID not provided";
}
?>
