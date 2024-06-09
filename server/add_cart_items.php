<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include('connection.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    //New variables
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];


    if (!empty($product_name) && !empty($product_image) && !empty($product_price)) {

        $stmt = $conn->prepare("INSERT INTO cart (product_name, product_price, product_image, product_quantity)
                                            VALUES ('$product_name', '$product_price', '$product_image', 1);");

        // Execute statement
        if ($stmt->execute()) {
            echo "Record added successfully";
        } else {
            echo "Error adding record: " . $stmt->error;
        }

        // Close statement
        $stmt->close();


    }
    else 
    {
        echo "Invalid form data";
    }




}

