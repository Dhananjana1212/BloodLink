<?php

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
$sql = "DELETE FROM `inventorymanager` WHERE InventoryManagerID=".$id;
$result = $conn->query($sql);
if ($result) {
    header("Location: blood inventory.php");
    exit();
}

?>