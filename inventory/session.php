<?php

session_start(); // Start session

include 'db_connection.php'; // Include database connection

// Check if user is logged in
if (isset($_SESSION['DonorID']) && isset($_SESSION['Email'])) {
    // User is logged in

    $donorID = $_SESSION['DonorID'];

    // Query to get the total notification count
    $query = "SELECT COUNT(*) AS total_notifications
          FROM notification
          WHERE RecipientID =  $_SESSION[DonorID]";

    $result = $connection->query($query);

    if ($result) {
        $row = $result->fetch_assoc();
        $_SESSION['total_notifications'] = $row['total_notifications'];
        } else {
        echo "Error executing query: " . $connection->error;
        }

    // Query to get the total campaign count
    $query = "SELECT COUNT(*) AS total_campaigns
          FROM bloodcampaigns";

    $result = $connection->query($query);

    if ($result) {
        $row = $result->fetch_assoc();
        // $total_notifications = $row['total_notifications'];
        $_SESSION['total_campaigns'] = $row['total_campaigns'];
        } else {
        echo "Error executing query: " . $connection->error;
        }

    } else {
    // User is not logged in, redirect to login page
    header("Location: login.php");
    exit();
    }

?>