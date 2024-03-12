<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "bloodlink";

$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve profile data from the database based ID
$sql = "SELECT * FROM admin";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
  $profileData = $result->fetch_assoc();
  } else {
  echo "Profile not found.";
  }

$Fname = $profileData['Fname'];
$Lname = $profileData['Lname'];
$Address = $profileData['Address'];
$mobileno = $profileData['mobileno'];
$Email = $profileData['Email'];
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Blood Link</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../ucsc.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Raleway"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
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

      input:checked + .slider {
        background-color: #4CAF50;
      }

      input:focus + .slider {
        box-shadow: 0 0 1px #2196f3;
      }

      input:checked + .slider:before {
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
      <button
        class="ucsc-bar-item ucsc-button ucsc-hide-large ucsc-hover-none ucsc-hover-text-light-grey"
        onclick="ucsc_open();"
      >
        <i class="fa fa-bars"></i>  Menu
      </button>
      <span class="ucsc-bar-item ucsc-right"
        ><img src="../img/Logo.png" style="width: 200px"
      /></span>
    </div>

    <!-- Sidebar/menu -->
    <nav
      class="ucsc-sidebar ucsc-collapse ucsc-white ucsc-animate-left"
      style="z-index: 3; width: 300px"
      id="mySidebar"
    >
      <br />
      <div class="ucsc-container ucsc-row">
        <div class="ucsc-col s4">
          <img
            src="../img/avatar2.png"
            class="ucsc-circle ucsc-margin-right"
            style="width: 46px"
          />
        </div>
        <div class="ucsc-col s8 ucsc-bar">
          <span>Welcome, <strong><?php echo $profileData['Fname']; ?></strong></span
          ><br />
        </div>
      </div>
      <hr />
      <div class="ucsc-container">
        <h5>Dashboard</h5>
      </div>
      <div class="ucsc-bar-block">
        <a
          href="#"
          class="ucsc-bar-item ucsc-button ucsc-padding-16 ucsc-hide-large ucsc-dark-grey ucsc-hover-black"
          onclick="ucsc_close()"
          title="close menu"
          ><i class="fa fa-remove fa-fw"></i>  Close Menu</a
        >
        <a
          href="my-profile.php"
          class="ucsc-bar-item ucsc-button ucsc-padding ucsc-teal"
          ><i class="fa fa-user fa-fw"></i>  Profile</a
        >
         <a href="../bloodBanks/blood banks.php" class="ucsc-bar-item ucsc-button ucsc-padding"
          ><i class="fa fa-bank fa-fw"></i>  Blood Banks</a
        >
        
        <a href="../bloodInventory/blood inventory.php" class="ucsc-bar-item ucsc-button ucsc-padding"
         ><i class="fa fa-user-circle-o fa-fw"></i>  Blood Inventory</a
       >
       
       <a href="../campaignOrg/campaign organizers.php" class="ucsc-bar-item ucsc-button ucsc-padding"
        ><i class="fa fa-tint fa-fw"></i>  Campaign Organizers</a
      >
        <a href="../bloodDonors/blood donors.php" class="ucsc-bar-item ucsc-button ucsc-padding"
          ><i class="fa fa-male fa-fw"></i>  Blood Donors</a
        >
        <a href="../labTech/laboratory Technician.php" class="ucsc-bar-item ucsc-button ucsc-padding"
        ><i class="fa fa-flask fa-fw"></i>  Laboratory Technician</a
      >    
        <a href="../../logout.php" class="ucsc-bar-item ucsc-button ucsc-padding"
          ><i class="fa fa-sign-out fa-fw"></i>  Log Out</a
        ><br /><br />
      </div>
    </nav>

    <!-- Overlay effect when opening sidebar on small screens -->
    <div
      class="ucsc-overlay ucsc-hide-large ucsc-animate-opacity"
      onclick="ucsc_close()"
      style="cursor: pointer"
      title="close side menu"
      id="myOverlay"
    ></div>

    <!-- !PAGE CONTENT! -->
    <div class="ucsc-main" style="margin-left: 300px; margin-top: 43px">
      <!-- Header -->
      <header class="ucsc-container" style="padding-top: 22px">
        <h5>
          <b><i class="fa fa-user"></i> Profile</b>
        </h5>
      </header>

      <div class="ucsc-container" style="display: flex">
              <div
                class="ucsc-card ucsc-round ucsc-white"
                style="margin-right: 10px; margin-bottom: 20px;"
              >
                <div class="ucsc-container">
                  <h4 class="ucsc-center"><b>Profile</b></h4>
                  <p class="ucsc-center">
                    <img
                      src="../img/avatar2.png"
                      class="ucsc-circle"
                      style="height: 106px; width: 106px"
                      alt="Avatar"
                    />
                  </p>
                  <h4 class="ucsc-center">Geethan Hemathilake</h4>
                  <h6 class="ucsc-center"><?php echo $profileData['Address']; ?></h6>
                  <center><img src="../img/lk.gif" style="width: 46px" /></center>

                  <div class="ucsc-half">
                    <p>
                      <i class="fa fa-user fa-fw ucsc-margin-right ucsc-text-theme"></i>
                      <b>First Name:</b>
                      <?php echo $profileData['Fname']; ?>
                    </p>
                    <p>
                      <i class="fa fa-user fa-fw ucsc-margin-right ucsc-text-theme"></i>
                      <b>Last Name:</b>
                      <?php echo $profileData['Lname']; ?>
                    </p>
                  
                  </div>
                  
                  <div class="ucsc-half">
                    
                    <p>
                      <i class="fa fa-home fa-fw ucsc-margin-right ucsc-text-theme"></i>
                      <b>Address:</b>
                      <?php echo $profileData['Address']; ?>
                    </p>
                    <p>
                      <i class="fa fa-phone-square fa-fw ucsc-margin-right ucsc-text-theme"></i>
                      <b>Phone:</b> 
                      <?php echo $profileData['mobileno']; ?>
                    </p>
                    <p>
                      <i class="fa fa-envelope fa-fw ucsc-margin-right ucsc-text-theme"></i>
                      <b>Email:</b> 
                      <?php echo $profileData['Email']; ?>
                    </p>
                
                    <br /><br />
                  </div>                  

                 
                  <a href="RegisterEdit.php" class = "ucsc-button ucsc-green ucsc-right">
                    <i class="fa fa-pencil fa-fw ucsc-margin-right ucsc-text-theme"></i>Edit Profile
                  </a>
                  
                </div>
            </div>
      </div>

      <hr />
      
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
