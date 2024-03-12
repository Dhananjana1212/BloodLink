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

// Retrieve form data
$Name = $_POST['Name'];
$Address = $_POST['Address'];
$District = $_POST['District'];
$PostalCode = $_POST['PostalCode'];
$Email = $_POST['Email'];
$Contact = $_POST['Contact'];
$Password = $_POST['Password']; 

$hashedpassword = password_hash($Password, PASSWORD_BCRYPT);

// Insert data into the database
$sql = "INSERT INTO campaignorganizer (Name, Address, District, PostalCode, Email, Contact, password) 
        VALUES ('$Name', '$Address', '$District', '$PostalCode', '$Email', '$Contact', '$hashedpassword')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location: campaign organizers.php");
    exit(); 

   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
