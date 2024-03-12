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
            src="img/avatar2.png"
            class="ucsc-circle ucsc-margin-right"
            style="width: 46px"
          />
        </div>
        <div class="ucsc-col s8 ucsc-bar">
          <span>Welcome, <strong>Jimmy!</strong></span
          ><br />
          <a href="#" class="ucsc-bar-item ucsc-button"
            ><i class="fa fa-bell"></i
          ></a>
          <a href="my-profile.html" class="ucsc-bar-item ucsc-button"
            ><i class="fa fa-user"></i
          ></a>
          <a href="#" class="ucsc-bar-item ucsc-button"
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
        <a href="inventory manager overview.html" class="ucsc-bar-item ucsc-button ucsc-padding"
          ><i class="fa fa-eye fa-fw"></i>  Overview</a
        >
        <a
          href="inventory.html"
          class="ucsc-bar-item ucsc-button ucsc-padding  ucsc-teal"
          ><i class="fa fa-user fa-fw"></i>  Inventory Management</a
        >
        <a href="inventorynotifications.html" class="ucsc-bar-item ucsc-button ucsc-padding"
          ><i class="fa fa-bell fa-fw"></i>  Notifications</a
        >
        
        <a href="history.html" class="ucsc-bar-item ucsc-button ucsc-padding "
          ><i class="fa fa-history fa-fw"></i> History</a
        >
        <a href="#" class="ucsc-bar-item ucsc-button ucsc-padding"
          ><i class="fa fa-sign-out fa-fw"></i>  Log Out</a
        ><br /><br />
      </div>
    </nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="ucsc-overlay ucsc-hide-large ucsc-animate-opacity" onclick="ucsc_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="ucsc-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="ucsc-container" style="padding-top:22px">
    <h5><b><i class="fa fa-list"></i> Inventory Management</b></h5>
  </header>

  <div class="ucsc-container">
    <div class="ucsc-section ucsc-bottombar ucsc-padding-16">
      <span class="ucsc-margin-right">Filter:</span> 
      <button class="ucsc-button ucsc-green"><i class="fa fa-arrow-down ucsc-margin-right"></i>This Week</button>
      <button class="ucsc-button ucsc-white"><i class="fa fa-arrow-right ucsc-margin-right"></i>This Month</button>
      <button class="ucsc-button ucsc-white ucsc-hide-small"><i class="fa fa-arrow-right ucsc-margin-right"></i>Next Month</button>
      <button class="ucsc-button ucsc-white ucsc-hide-small"><i class="fa fa-arrow-right ucsc-margin-right"></i>Within Next 3 Months</button>
    </div>
    </div>

    
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'connect.php'

    ?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="ucsc.css"/>
</head>

<body>
    <div class="container">
        <div class="ucsc-panel">
            <div class="ucsc-row-padding" style="margin:0 -16px">
                <div class="ucsc-full">
                    <table class="ucsc-table ucsc-striped ucsc-bordered ucsc-border ucsc-hoverable ucsc-white">
                        <button class="btn btn-primary my-5"><a href="inventoryentry.php" class="text-light">Add
                                inventory</a></button>
                        <table class="table">
                            <thead>
                                <th>Donor ID</th>
                                <th>Blood Packet ID</th>
                                <th>Blood Type</th>
                                <th>Date</th>
                                <th>Flagged Status</th>
                            </thead>
                            <tbody>
                </div>
            </div>
        </div>
    </div>

    <?php

    $sql = "Select * from `inventory`";
    $result = mysqli_query($con, $sql);
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $donorid = $row['donorid'];
            $bloodpacketid = $row['bloodpacketid'];
            $bloodtype = $row['bloodtype'];
            $date = $row['date'];
            $Flagged = $row['Flagged'];
            echo '<tr>
                        <th scope = "row">' . $donorid . '</th>
                        <td>' . $bloodpacketid . '</td>
                        <td>' . $bloodtype . '</td>  
                        <td>' . $date . '</td> 
                        <td>' .$Flagged. '</td>
                        <td>
                        <button class="ucsc-button ucsc-green"><a href="update.php?updateid=' . $bloodpacketid . '" class ="text-light">Update</a></button>
                        
                        
                        </td>
                        </tr>';
        }
    }

    ?>

    </tbody>

    </table>
    </div>
</body>

</html>