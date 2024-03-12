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
$Name = $_POST['HospitalName'];
$Address = $_POST['Address'];
$Email = $_POST['Email'];
$Contact = $_POST['Contact'];
$Password = $_POST['Password']; 

$hashedpassword = password_hash($Password, PASSWORD_BCRYPT);

// Insert data into the database
$sql = "INSERT INTO bloodbanks (HospitalName, Address, Email, Contact, password) 
        VALUES ('$Name', '$Address', '$Email', '$Contact', '$hashedpassword')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location: blood banks.php");
    exit(); 

   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
