<?php

// Create connection
include('connection.php');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];

// Query the database for the user
$sql = "SELECT * FROM users WHERE username='$username' AND user_password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    header("Location: index.php");
    exit();

} else {
    
    header("Location: login.php?error=1");
    exit();
}

$conn->close();
?>