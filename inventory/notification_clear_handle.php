<?php

include 'db_connection.php'; // Include database connection

// Check if the form is submitted with a POST request
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['notificationID'])) {
    // Retrieve the NotificationID from the form submission
    $notificationID = $_POST['notificationID'];

    // Sanitize the input to prevent SQL injection (assuming $connection is already defined)
    $notificationID = $connection->real_escape_string($notificationID);

    // Construct the DELETE query
    $query = "DELETE FROM notification WHERE NotificationID = '$notificationID'";

    // Execute the query
    if ($connection->query($query) === TRUE) {
        // Redirect back to the page where the form was submitted from
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit();
    } else {
        // Handle error if deletion fails
        echo "Error deleting notification: " . $connection->error;
    }
} else {
    // Handle error if the form is not submitted with a POST request or if notificationID is not set
    echo "Invalid request";
}

// Close the database connection
$connection->close();
?>
