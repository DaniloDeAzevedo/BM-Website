<?php 
include('connection.php');

$stmt = $conn->prepare("SELECT * FROM cart");

$stmt->execute();

$featured_products = $stmt->get_result(); //array






?>