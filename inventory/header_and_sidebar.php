<?php
// Query to get the first name of the user
$query = "SELECT FirstName
          FROM blooddonor
          WHERE DonorID =  $donorID";

$result = $connection->query($query);

if ($result) {
    $row = $result->fetch_assoc();
    $FirstName = $row['FirstName'];
    } else {
    echo "Error executing query: " . $connection->error;
    }

$total_notifications = $_SESSION['total_notifications'];

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Blood Link</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="ucsc.css" />
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
      .fading-text {
    opacity: 0;
    transition: opacity 0.5s ease-in-out;
    font-weight: bold !important;
    font-family: 'Calibri', sans-serif; /* Set font family to Calibri */
    }

    .notification-icon-container {
    position: relative;
    display: inline-block; /* Ensure container only takes up necessary space */
    }

    .notification-count {
    position: absolute;
    top: -3px; /* Adjust top position as needed */
    right: -5px; /* Adjust right position as needed */
    background-color: red; /* Background color for count */
    color: white; /* Text color for count */
    border-radius: 50%; /* Make count circular */
    padding: 4px; /* Adjust padding as needed */
    font-size: 10px; /* Adjust font size as needed */
    font-weight: bold;
    width: 13px; /* Ensure width and height are equal */
    height: 13px; /* Ensure width and height are equal */
    text-align: center; /* Center text horizontally */
    line-height: 3px; /* Center text vertically */
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
        ><img src="img/Logo.png" style="width: 200px"
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
            src="img/avatar-female.png"
            class="ucsc-circle ucsc-margin-right"
            style="width: 46px"
          />
        </div>
        <div class="ucsc-col s8 ucsc-bar">
          <span>Welcome, <strong><?php echo $FirstName; ?></strong></span
          ><br />
          <?php if ($total_notifications > 0) { ?>
          <a href="notifications.php" class="ucsc-bar-item ucsc-button"> 
             <div class="notification-icon-container">
                 <i class="fa fa-bell"></i>
                     <span class="notification-count"><?php echo $total_notifications ?></span>
             </div></a><?php } else{?>
             <a href="notifications.php" class="ucsc-bar-item ucsc-button"><i class="fa fa-bell"></i></a><?php } ?>
          <a href="my-profile.php" class="ucsc-bar-item ucsc-button"
            ><i class="fa fa-user"></i
          ></a>
          <a href="logout.php" class="ucsc-bar-item ucsc-button"
            ><i class="fa fa-sign-out"></i
          ></a>
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
        <a href="index.php" class="ucsc-bar-item ucsc-button ucsc-padding <?php echo (strpos($_SERVER['REQUEST_URI'], 'index.php') !== false) ? 'ucsc-teal' : ''; ?>"
          ><i class="fa fa-eye fa-fw"></i>  Overview</a
        >
        <a
          href="my-profile.php"
          class="ucsc-bar-item ucsc-button ucsc-padding <?php echo (strpos($_SERVER['REQUEST_URI'], 'my-profile.php') !== false) ? 'ucsc-teal' : ''; ?>"
          ><i class="fa fa-user fa-fw"></i>  My Profile</a
        >
        <a href="notifications.php" class="ucsc-bar-item ucsc-button ucsc-padding <?php echo (strpos($_SERVER['REQUEST_URI'], 'notifications.php') !== false) ? 'ucsc-teal' : ''; ?>"
          ><i class="fa fa-bell fa-fw"></i>  Notifications 
          <?php if ($total_notifications > 0) { ?> <button class="ucsc-button fading-text ucsc-padding-small ucsc-yellow ucsc-tiny ucsc-border ucsc-border-red">NEW <?php echo $total_notifications ?></button> <?php } ?></a
        >
        <a href="campaigns.php" class="ucsc-bar-item ucsc-button ucsc-padding <?php echo (strpos($_SERVER['REQUEST_URI'], 'campaigns.php') !== false) ? 'ucsc-teal' : ''; ?>"
          ><i class="fa fa-bank fa-fw"></i>  Campaigns</a
        >
        <a href="donation-history.php" class="ucsc-bar-item ucsc-button ucsc-padding <?php echo (strpos($_SERVER['REQUEST_URI'], 'donation-history.php') !== false) ? 'ucsc-teal' : ''; ?>"
          ><i class="fa fa-history fa-fw"></i>  Donation History</a
        >
        <a href="logout.php" class="ucsc-bar-item ucsc-button ucsc-padding"
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

    </body>
    </html>

    <script>
    const fadingText = document.querySelector('.fading-text');

    function fadeInOut() {
      fadingText.style.opacity = 1;
      setTimeout(() => {
        fadingText.style.opacity = 0;
      }, 1000); // Adjust duration as needed
    }

    setInterval(fadeInOut, 2500); // Adjust interval as needed
  </script>