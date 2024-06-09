<?php 
include('connection.php');

$stmt = $conn->prepare("SELECT * FROM cart LIMIT 4 "); //REMOVE LATER

$stmt->execute();

$featured_products = $stmt->get_result(); //array






?>