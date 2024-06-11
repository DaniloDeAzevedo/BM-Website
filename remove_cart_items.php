<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Retrieve product_id or other identifier
    $product_id = $_POST['product_id'];

    // Check if product_id is not empty
    if (!empty($product_id)) {

        // Prepare the DELETE statement
        $stmt = $conn->prepare("DELETE FROM cart WHERE product_id = ?");

        // Bind parameters
        $stmt->bind_param("i", $product_id);

        // Execute statement
        if ($stmt->execute()) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $stmt->error;
        }

        // Close statement
        $stmt->close();

    } else {
        echo "Invalid form data";
    }

}
?>