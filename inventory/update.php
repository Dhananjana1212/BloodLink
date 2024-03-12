<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


include 'connect.php';
$donorid=$_GET['updateid'];
var_dump($donorid);

$sql="Select * from `inventory` where donorid='$donorid'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$bloodpacketid=$row['bloodpacketid'];
$bloodtype=$row['bloodtype'];
$date=$row['date'];
$Flagged=$row['Flagged'];

var_dump($row);


if(isset($_POST['submit'])){
    $donorid=$_POST['donorid'];
    $bloodtype=$_POST['bloodtype'];
    $Flagged=$_POST['Flagged'];

    $sql="UPDATE `inventory` SET donorid='$donorid', bloodtype='$bloodtype', Flagged='$Flagged' WHERE bloodpacketid='$bloodpacketid'";



    $result=mysqli_query($con,$sql);
    if($result){
        //echo "Updated succesfully";
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
    <title>Blood Link</title>
</head>
<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Bloodpacket ID number</label> 
                <input type="text" class="form-control" placeholder="Enter the the bloodpacket ID" name="donorid" autocomplete="off" value=<?php echo $donorid; ?>>
            </div>
            <div class="form-group">
                <label>Blood Type</label>
                <input type="text" class="form-control" placeholder="Enter the Blood type eg:- A+" name="bloodtype" autocomplete="off" value=<?php echo $bloodtype; ?>>
            </div>
            <!--<label>Flag sample</label>
            <div>
                <select class="form-control" name="Flagged">
                    <option value="Yes" <?php if ($Flagged == "Yes") echo "selected"; ?>>Yes</option>
                    <option value="No" <?php if ($Flagged == "No") echo "selected"; ?>>No</option>
                </select>
            </div>
-->
            

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>


</body>
</html>