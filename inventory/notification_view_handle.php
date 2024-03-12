<?php

include 'session.php'; // Include database connection

// Check if the form is submitted with a POST request
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['notificationID'])) {
    // Retrieve the NotificationID from the form submission
    $notificationID = $_POST['notificationID'];

    // Sanitize the input to prevent SQL injection
    $notificationID = $connection->real_escape_string($notificationID);

    // Construct the DELETE query
    $query = "SELECT * FROM notification WHERE NotificationID = '$notificationID'";
    $result = $connection->query($query);

    if ($result->num_rows == 1) {
        // Blood type found, fetch the result
        $notificationData = $result->fetch_assoc();
        $notificationType = $notificationData['NotificationType'];
        $associateID = $notificationData['AssociateID'];

        if ($notificationType == '1') { 
            header("Location: campaign-view.php?associateID=$associateID");
            exit();
         }

        if ($notificationType == '3') {
            header("Location: my-profile.php");  }

        } else {
        // Blood type not found or multiple blood types found for the same ID
        echo "Notification not found or multiple bnotifications found for the same ID.";
        }
    } else {
    // Handle error if the form is not submitted with a POST request or if notificationID is not set
    echo "Invalid request!";
    }

// Close the database connection
$connection->close();
?>
