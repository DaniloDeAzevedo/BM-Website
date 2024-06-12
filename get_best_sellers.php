<?php

include('connection.php');


$stmt = $conn->prepare("SELECT * FROM best_sellers");

$stmt->execute();

$featured_products = $stmt->get_result(); //rows

?>
