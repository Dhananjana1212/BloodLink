<?php
 // Connect to your database (replace these with your actual database credentials)
 $host = "localhost";
 $username = "root";
 $password = "";
 $database = "bloodlink";

 $conn = new mysqli($host, $username, $password, $database);

 // Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user type from the form
    $userType = $_POST["userType"];

    // Get email and password from the form (you should sanitize and validate these inputs)
    $email = $_POST["Email"];
    $password = $_POST["Password"];

    // Formulate the query based on the user type
    $table = ($userType == "admin" || $userType == "blooddonor" || $userType == "inventorymanager" || $userType == "sampletester" || $userType == "bloodbanks") ? $userType : "campaignorganizer";
    $query = "SELECT * FROM $table WHERE Email = '$email' AND Password = '$password'";

    // Execute the query
    $result = $conn->query($query);

    // Check if the query was successful and if there is a matching record
    if ($result && $result->num_rows > 0) {
        // Successful login, redirect to the appropriate page
        if ($userType == "admin") {
            header("Location: Admin/profile/my-profile.php");
        } elseif ($userType == "organizer"){
            header("Location: Campaign/profile/my-profile.php");
        } elseif ($userType == "blooddonors") {
            header("Location: blooddonor_page.php");
        } elseif ($userType == "inventorymanager") {
            header("Location: inventory_manager_page.php");
        } elseif ($userType == "sampletester") {
            header("Location: sample_tester_page.php");
        } elseif ($userType == "bloodbanks") {
            header("Location: blood_bank_page.php");
    }
        exit();
    } else {
        // Invalid login, you can handle this accordingly (e.g., display an error message)
        echo "Invalid login credentials.";
    }

    // Close the database connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="imaging">
        <div class="background-image"></div>
        <img src="blood3.png" alt="Overlay Image" class="overlay-image">
    </div>
    <div class="login">
        <form action="" method="POST">
        <h1>User Type</h1>
            <div class="input-box">
            
    <select name="userType" id="userType">
        <option value="admin">Admin</option>
        <option value="organizer">Organizer</option>
        <option value="blooddonors">Blood Donor</option>
        <option value="inventorymanager">Inventory Manager</option>
        <option value="sampletester">Sample Tester</option>
        <option value="bloodbanks">Blood Bank</option>
    </select>
    <br>
            </div>
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" name="Email" placeholder="Email" required>
                <div class="user-icon">
                </div>
            </div>
            <div class="input-box">
                <input type="Password" name="Password" placeholder="Password" required>
                <div class="pass-icon">
                </div>
            </div>
            <div class="Remember-forgot">
                <label>
                    <input type="checkbox">Remember me</label>
                    <a href="#">Forgot password</a>
            </div>
            <button type="submit" class="btn">Login</button>
        </form>
    </div>
</body>
</html>
