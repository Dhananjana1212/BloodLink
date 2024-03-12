<?php include('dbcon.php'); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Blood Link</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="ucsc.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <style>
    html,
    body,
    h1,
    h2,
    h3,
    h4,
    h5 {
        font-family: "Raleway", sans-serif;
    }

    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
    }

    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgb(255, 57, 57);
        -webkit-transition: 0.4s;
        transition: 0.4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: 0.4s;
        transition: 0.4s;
    }

    input:checked+.slider {
        background-color: #4CAF50;
    }

    input:focus+.slider {
        box-shadow: 0 0 1px #2196f3;
    }

    input:checked+.slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }
    </style>
</head>

<body class="ucsc-light-grey">
    <!-- Top container -->
    <div class="ucsc-bar ucsc-top ucsc-teal ucsc-large" style="z-index: 4">
        <button class="ucsc-bar-item ucsc-button ucsc-hide-large ucsc-hover-none ucsc-hover-text-light-grey"
            onclick="ucsc_open();">
            <i class="fa fa-bars"></i>  Menu
        </button>
        <span class="ucsc-bar-item ucsc-right"><img src="img/Logo.png" style="width: 200px" /></span>
    </div>

    <?php
    $Email = 'cityhospital@example.com';

    $query = "SELECT * FROM bloodbanks where Email = '$Email'";

    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("query failed" . mysqli_error($conn));
    }

    if ($row = mysqli_fetch_assoc($result)) {
        $HospitalName = $row['HospitalName'];
        $Address = $row['Address'];
        $BloodBankID = $row['BloodBankID'];
        $Contact = $row['Contact'];
        $Email = $row['Email'];
    } else {
        echo 'No data found';
    }


    ?>

    <!-- Sidebar/menu -->
    <nav class="ucsc-sidebar ucsc-collapse ucsc-white ucsc-animate-left" style="z-index: 3; width: 300px"
        id="mySidebar">
        <br />
        <div class="ucsc-container ucsc-row">
            <div class="ucsc-col s4">
                <img src="img/blood-bank.png" class=" ucsc-margin-right" style="width: 46px" />
            </div>
            <div class="ucsc-col s8 ucsc-bar">
                <span>Welcome!!</span><br />
                <span><strong>
                    <!--PRINTING THE NAME -->
                        <?php echo $HospitalName ?>!
                    </strong></span>
                <br />
                <a href="#" class="ucsc-bar-item ucsc-button"><i class="fa fa-bell"></i></a>
                <a href="profile.php" class="ucsc-bar-item ucsc-button"><i class="fa fa-bank"></i></a>
                <a href="#" class="ucsc-bar-item ucsc-button"><i class="fa fa-sign-out"></i></a>
            </div>
        </div>
        <hr />
        <div class="ucsc-container">
            <h5>Dashboard</h5>
        </div>
        <div class="ucsc-bar-block">
            <a href="#"
                class="ucsc-bar-item ucsc-button ucsc-padding-16 ucsc-hide-large ucsc-dark-grey ucsc-hover-black"
                onclick="ucsc_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>

            <a href="profile.php" class="ucsc-bar-item ucsc-button ucsc-padding ucsc-teal"><i
                    class="fa fa-bank fa-fw"></i>  Profile</a>

            <a href="notifications.html" class="ucsc-bar-item ucsc-button ucsc-padding"><i
                    class="fa fa-bell fa-fw"></i>  Notifications</a>

            <a href="location.html" class="ucsc-bar-item ucsc-button ucsc-padding"><i
                    class="fa fa-location-arrow fa-fw"></i>  Locating</a>

            <a href="donors.php" class="ucsc-bar-item ucsc-button ucsc-padding"><i class="fa fa-bank fa-fw"></i> 
                Donors</a>

            <a href="feedback.php" class="ucsc-bar-item ucsc-button ucsc-padding"><i class="fa fa-history fa-fw"></i> 
                Feedback</a>

            <a href="Bloodinventory.php" class="ucsc-bar-item ucsc-button ucsc-padding"><i
                    class="fa fa-bank fa-fw"></i>  Blood-Inventory</a>

            <a href="#" class="ucsc-bar-item ucsc-button ucsc-padding"><i class="fa fa-sign-out fa-fw"></i>  Log Out</a>
            <br /><br />
        </div>
    </nav>

    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="ucsc-overlay ucsc-hide-large ucsc-animate-opacity" onclick="ucsc_close()" style="cursor: pointer"
        title="close side menu" id="myOverlay"></div>

    <!-- !PAGE CONTENT! -->
    <div class="ucsc-main" style="margin-left: 300px; margin-top: 43px">
        <!-- Header -->
        <header class="ucsc-container" style="padding-top: 22px">
            <h5>
                <b><i class="fa fa-bank"></i>INVENTORY MANAGER</b>
            </h5>
        </header>

        <div class="ucsc-container" style="display: relative; align-items: center;  width: 2000px; ">
            <div class="ucsc-panel">
                <div class="ucsc-row-padding">
                    <div class="ucsc-half">
                        <div class="ucsc-card ucsc-round ucsc-white" style="margin-bottom: 10px; margin-left: 200px ">
                            <div class="ucsc-container">
                                <h4 class="ucsc-center"><b>Inventory Manager Profile</b></h4>
                                <p class="ucsc-center">
                                    <img src="img/blood-bank.png" style="height: 106px; width: 106px" alt="Avatar" />
                                </p>
                                <h4 class="ucsc-center">Inventory Manager</h4>
                                <h6 class="ucsc-center">Invenotry Manager</h6>
                                <center><img src="img/lk.gif" style="width: 46px" /></center>

                                <hr />


                                <div class="ucsc-half">
                                    <p>
                                        <i class="fa fa-user fa-fw ucsc-margin-right ucsc-text-theme"></i>
                                        <b>Inventory Mangaer Name</b>
                                        <?php echo $row["HospitalName"] ?>
                                    </p>
                                    

                                    <p>
                                        <i class="fa fa-id-badge fa-fw ucsc-margin-right ucsc-text-theme"></i>
                                        <b>User ID:</b>
                                        <?php echo $row["BloodBankID"] ?>
                                    </p>
                                </div>

                                <div class="ucsc-half">
                                    <p>
                                        <i class="fa fa-phone-square fa-fw ucsc-margin-right ucsc-text-theme"></i>
                                        <b>Phone:</b>
                                        <?php echo $row["Contact"] ?>
                                    </p>
                                    <p>
                                        <i class="fa fa-envelope fa-fw ucsc-margin-right ucsc-text-theme"></i>
                                        <b>Email:</b>
                                        <?php echo $row["Email"] ?>
                                    </p>
                                    <br /><br /><br /><br /><br />
                                </div>


                                <button class="ucsc-button ucsc-yellow ucsc-right">
                                    <a href="delete.php?email=<?php echo $row['Email']; ?>">
                                        <i class="fa fa-trash fa-fw ucsc-margin-right ucsc-text-theme"></i>Delete
                                </button>
                                <button class="ucsc-button ucsc-green ucsc-right">
                                    <a href="edit-form.php?email=<?php echo $row['Email']; ?>">
                                        <i class="fa fa-pencil fa-fw ucsc-margin-right ucsc-text-theme"></i>Edit Profile
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <?php
    if (isset($_GET['update_msg'])) {
        echo "<h4>" . $_GET['update_msg'] . "</h4>";
    }
    ?>

    <?php
    if (isset($_GET['delete_msg'])) {
        echo "<h4>" . $_GET['delete_msg'] . "</h4>";
    }
    ?>


    < <hr />

    <br />
    <!-- Footer -->
    <footer class="ucsc-container ucsc-padding-16 ucsc-dark-grey ucsc-center">
        <h6>BloodLink | All rights reserved ©</h6>
        <p>Powered by <a href="https://cmb.ac.lk/u_course_cat/ucsc" target="_blank">UCSC</a></p>
    </footer>

    <!-- End page content -->
    </div>

    <script>
    // Get the Sidebar
    var mySidebar = document.getElementById("mySidebar");

    // Get the DIV with overlay effect
    var overlayBg = document.getElementById("myOverlay");

    // Toggle between showing and hiding the sidebar, and add overlay effect
    function ucsc_open() {
        if (mySidebar.style.display === "block") {
            mySidebar.style.display = "none";
            overlayBg.style.display = "none";
        } else {
            mySidebar.style.display = "block";
            overlayBg.style.display = "block";
        }
    }

    // Close the sidebar with the close button
    function ucsc_close() {
        mySidebar.style.display = "none";
        overlayBg.style.display = "none";
    }
    </script>
</body>

</html>