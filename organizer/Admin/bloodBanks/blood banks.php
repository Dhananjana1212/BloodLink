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
$sql = "SELECT BloodBankID, HospitalName, Address, Email, Contact FROM bloodbanks";
$result = $conn->query($sql);

// Close the database connection
$conn->close();
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
        <span>Welcome, <strong>Geethan!</strong></span
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
        href="../profile/my-profile.php"
        class="ucsc-bar-item ucsc-button ucsc-padding"
        ><i class="fa fa-user fa-fw"></i>  Profile</a
      >
       <a href="blood banks.php" class="ucsc-bar-item ucsc-button ucsc-padding ucsc-teal"
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
          <b><i class="fa fa-bank"></i> Blood Bank Details</b>
        </h5>
      </header>

      <!-- <div class="ucsc-container" style="display: flex"> -->
        <div class="ucsc-container">
          <!-- <h5>Donation Information</h5> -->
          <table class="ucsc-table ucsc-striped ucsc-bordered ucsc-border ucsc-hoverable ucsc-white">
            <tr>
              <th>BB ID</th>
              <th>Hospital Name</th>
              <th>Email</th>
              <th>Contact</th>
              <th>Action</th>
            </tr>
            <tr>
              <?php
              if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                      echo "<tr>";
                      echo "<td>" . $row["BloodBankID"]. "</td>";
                      echo "<td>" . $row["HospitalName"]. "</td>";
                      echo "<td>" . $row["Email"]. "</td>";
                      echo "<td>" . $row["Contact"]. "</td>";
                      echo "<td>
                              <a href='/bloodlink/Admin/bloodBanks/RegisterEdit.php?id=".$row["BloodBankID"]."' class='ucsc-button ucsc-green'>Update</a>
                              <a href='/bloodlink/Admin/bloodBanks/deleteRegister.php?id=".$row["BloodBankID"]."' class='ucsc-button ucsc-green'>Delete</a>
                          </td>";
                      echo "</tr>";
                  }
              } 
              else {
                  echo "<tr><td colspan='7'>0 results found</td></tr>";
              }
              ?>
          </tr>
          </table>
        </div>

        <br/><br/>

        <div class="ucsc-container">

          <div class="ucsc-card ucsc-round ucsc-white ucsc-half" style="margin-right: 10px; margin-bottom: 20px; padding-left: 20px; padding-right: 20px;">
          <br/>
          <h5 class="ucsc-center"><b>Add New Blood Banks</b> <i class="fa fa-arrow-down"></i></h5><br/>
          <form class="ucsc-form">
            <a href = "Register.php" class="ucsc-button ucsc-green">ADD</a>
          </form><br/>
          </div>

        </div>
        
      <!-- </div> -->

      <hr />

      <br /><br /><br /><br /><br /><br /><br /><br />

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
