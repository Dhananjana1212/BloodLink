<?php
include 'session.php';
include 'header_and_sidebar.php';
?>

<html>
<head>
    <style>
        /* Style for the body to make it a flex container */
        .notification-area {
            display: flex;
            min-height: 60vh; /* Set minimum height of the body to 100% of the viewport height */
            flex-direction: column; /* Make the flex container a column */
        }
    </style>
</head>
<body>
    <!-- !PAGE CONTENT! -->
    <div class="ucsc-main" style="margin-left: 300px; margin-top: 43px">
      <!-- Header -->
      <header class="ucsc-container" style="padding-top: 22px">
        <h5>
          <b><i class="fa fa-bell"></i> Notifications (<?php echo $_SESSION['total_notifications']; ?>) <i class="fa-solid fa-poo-bolt fa-beat-fade" style="--fa-beat-fade-opacity: 0.1; --fa-beat-fade-scale: 1.25;" ></i></b>
        </h5>
      </header>


        <div class="ucsc-container notification-area">

        <?php

        // Query to select data
        $query = "SELECT notification.*, notificationtypes.Description
          FROM notification
          INNER JOIN notificationtypes ON notification.NotificationType = notificationtypes.NotificationType
          WHERE notification.RecipientID = $donorID";

        $result = $connection->query($query);

        if ($result->num_rows > 0) {
          while ($NotificationData = $result->fetch_assoc()) { ?>
                          <div class="ucsc-card ucsc-round ucsc-white ucsc-row" style="margin-right: 10px; margin-bottom: 20px; padding-left: 20px; padding-right: 20px; padding-top: 20px; padding-bottom: 20px;">
                                <div class="ucsc-col m6 l8">
                                    <?php echo $NotificationData['Description']; ?> <i class="fa fa-bell"></i>
                                </div>
                                <div class="ucsc-col m6 l4">
                                  <form method="post" action="notification_clear_handle.php">
                                      <input type="hidden" name="notificationID" value="<?php echo $NotificationData['NotificationID']; ?>">
                                          <button type="submit" class="ucsc-button ucsc-teal ucsc-right">
                                              <i class="fa fa-times fa-fw ucsc-margin-right ucsc-text-theme"></i>Clear 
                                          </button>
                                  </form>
                                  <form method="post" action="notification_view_handle.php">
                                      <input type="hidden" name="notificationID" value="<?php echo $NotificationData['NotificationID']; ?>">
                                          <button type="submit" class="ucsc-button ucsc-yellow ucsc-right">
                                              <i class="fa fa-arrow-right fa-fw ucsc-margin-right ucsc-text-theme"></i>View
                                          </button>
                                  </form> 
                                </div>
                          </div>
                <?php }
          } else {
          echo "You do not have new notifications!";
          }
        ?>

        </div>
        
      <!-- </div> -->

      <hr />

      <br /><br /><br /><br /><br /><br /><br /><br />

</body>
</html>

<?php include 'footer.php'; ?>