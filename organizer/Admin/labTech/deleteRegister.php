<?php
// Establish database connection (Replace these values with your actual database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$database = "bloodlink";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$id = $_GET["id"];
$sql = "DELETE FROM `sampletester` WHERE TesterID=".$id;
$result = $conn->query($sql);
if ($result) {
    header("Location: laboratory Technician.php");
    exit();
}

?>