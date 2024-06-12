<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve email from form
    $email = $_POST['email'];

    //Validate email
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //Prepare and bind the statement to avoid SQL injection
        $stmt = $conn->prepare("INSERT INTO newsletter_subscribers (user_email) VALUES (?)");
        $stmt->bind_param("s", $email);

        // Execute statement
        if ($stmt->execute()) {
            echo "Successfully subscribed!";
        } else {
            echo "Error adding record: " . $stmt->error;
        }

        // Close statement
        $stmt->close();
    } else {
        echo "Invalid email address";
    }
}
?>