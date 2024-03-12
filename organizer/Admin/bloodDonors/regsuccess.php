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
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$Email = $_POST['Email'];
$Contact = $_POST['Contact'];
$District = $_POST['District'];
$Password = $_POST['Password']; 

$hashedpassword = password_hash($Password, PASSWORD_BCRYPT);

// Insert data into the database
$sql = "INSERT INTO blooddonor (FirstName, LastName, Email, Contact, District, password) 
        VALUES ('$Name', '$Address', '$Email', '$Contact', '$District', '$hashedpassword')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location: blood donors.php");
    exit(); 

   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
