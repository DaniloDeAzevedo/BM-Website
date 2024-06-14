<?php

if (session_status() == PHP_SESSION_NONE) 
{
    session_start();
}

//Calls code that connects to the database
include('connection.php');

//Upon "Add to Cart" button being clicked
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    //Declaring new variables
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];

    //Ensures that no fields are empty and informs the user if that is the case
    if (!empty($product_name) && !empty($product_image) && !empty($product_price)) 
    {
        //Insert Product Card inofrmation
        $stmt = $conn->prepare("INSERT INTO cart (product_name, product_price, product_image, product_quantity)
                                            VALUES ('$product_name', '$product_price', '$product_image', 1);");
        //Upon the previous statement being executed, a message is displayed to the user
        if ($stmt->execute()) {
            echo "Record added successfully";
        } 
        else
        {
            echo "Error adding record: " . $stmt->error;
        }
        //Close statement
        $stmt->close();
    }
    else 
    {
        echo "Invalid form data";
    }
}

