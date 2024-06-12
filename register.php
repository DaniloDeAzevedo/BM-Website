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

// Insert user data into the database
$sql = "INSERT INTO users (username, user_password) VALUES ('$username', '$password')";

if ($conn->query($sql) === TRUE) {
    header("Location: login.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>