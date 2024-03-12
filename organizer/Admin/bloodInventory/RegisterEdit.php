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

// Fetch data from the database

// Close the database connection


if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $sql = "UPDATE inventorymanager SET FirstName='".$_POST["FirstName"]."', LastName='".$_POST["LastName"]."', Contact=".$_POST['Contact'].", Email='".$_POST["Email"]."' WHERE InventoryManagerID=".$_POST["InventoryManagerID"]."";
  $result = $conn->query($sql);
  if( $result){
    header("Location: blood inventory.php");
    exit();
  }
  exit();
} else {
  $id = $_GET["id"];
  $sql = "SELECT InventoryManagerID, FirstName, LastName, Email, Contact FROM inventorymanager where InventoryManagerID=" . $id;
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <link rel="stylesheet" href="Register.css">
</head>

<body>

  <div class="wrapper">
    <div class="title">
      Edit Details
    </div>


    <div class="form">

      <form action="" method="POST">

        <div class="form">
        <div class="inputfield">
          <label>Firts Name</label>
          <input type="text" class="input" name="FirstName" id="FirstName" required value="<?= $row['FirstName'] ?>">
       </div>  
       <input type="hidden" class="input" name="InventoryManagerID" id="InventoryManagerID" required value="<?= $row['InventoryManagerID'] ?>">
        <div class="inputfield">
          <label>Last Name</label>
          <input type="text" class="input" name="LastName" id="LastName" required value="<?= $row['LastName'] ?>">
       </div>  
        <div class="inputfield">
          <label>Email Address</label>
          <input type="email" class="input" name="Email" id="Email" required value="<?= $row['Email'] ?>">
       </div> 
      <div class="inputfield">
          <label>contact Number</label>
          <input type="text" class="input" name="Contact" id="Contact" required value="<?= $row['Contact'] ?>">
       </div> 
       
       
      <div class="inputfield">
      <span id="wrong_pass_alert"></span>
        <input type="submit" value="Update" class="btn" onclick="wrong_pass_alert()">
      </div>
      </form>

    </div>
  </div>
  <script>
    function validate_password() {

      var password = document.getElementById('Password').value;
      var confirmpassword = document.getElementById('confirmpassword').value;
      if (password != confirmpassword) {
        document.getElementById('wrong_pass_alert').style.color = 'red';
        document.getElementById('wrong_pass_alert').innerHTML = '☒ Use same password';
        document.getElementById('create').disabled = true;
        document.getElementById('create').style.opacity = (0.4);
      } else {
        document.getElementById('wrong_pass_alert').style.color = 'green';
        document.getElementById('wrong_pass_alert').innerHTML =
          '🗹 Password Matched';
        document.getElementById('create').disabled = false;
        document.getElementById('create').style.opacity = (1);
      }
    }

    function wrong_pass_alert() {
      if (document.getElementById('Password').value != "" &&
        document.getElementById('confirmpassword').value != "") {

      } else {
        alert("Please fill all the fields");
      }
    }
  </script>
</body>

</html>