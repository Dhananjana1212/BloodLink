<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


include 'connect.php';
if(isset($_POST['submit'])){
    $donorid=$_POST['donorid'];
    $bloodtype=$_POST['bloodtype'];


    $sql="insert into `inventory` (donorid,bloodtype)
    values('$donorid','$bloodtype')";

    $result=mysqli_query($con,$sql);
    if($result){
        //echo "Data inserted succesfully";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="ucsc-light-grey">
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>State of the blood packet</label> <!-- Added label for dropdown -->
                <select class="form-control" name="blood_state"> <!-- Dropdown selection -->
                    <option value="Separated">Separated</option> <!-- Option 1: Separated -->
                    <option value="Unseparated">Unseparated</option> <!-- Option 2: Unseparated -->
                </select>
            </div>
            <div class="form-group">
                <label>Donor ID number</label> 
                <input type="text" class="form-control" placeholder="Enter the Donor's ID eg:- D001" name="donorid" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Blood Type</label>
                <input type="text" class="form-control" placeholder="Enter the Blood type eg:- A+" name="bloodtype" autocomplete="off">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>

