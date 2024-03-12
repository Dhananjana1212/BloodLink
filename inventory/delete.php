<?php

include 'connect.php';
if(isset($_GET['deleteid'])){
    $bloodpacketid=$_GET['deleteid'];

    $sql="delete from `inventory` where bloodpacketid=$bloodpacketid";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "Deleted successfully";
        header("location:display.php");
    }else{
        die(mysqli_error($con));
    }
}
?>
