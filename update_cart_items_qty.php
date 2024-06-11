<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include('connection.php');


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['product_quantity'])) {
    // Get form data
    $product_id = $_POST['product_id'];
    $product_quantity = $_POST['product_quantity'];


    if (!empty($product_id) && !empty($product_quantity)) {

        $stmt = $conn->prepare("UPDATE cart SET product_quantity = '$product_quantity' WHERE product_id = '$product_id'");

        // Execute statement
        if ($stmt->execute()) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $stmt->error;
        }

        // Close statement
        $stmt->close();

    }
    else 
    {
        echo "Invalid form data";
    }

}

?>