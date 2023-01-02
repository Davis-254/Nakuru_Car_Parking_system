<?php 
  session_start();
  include('admin/includes/dbconn.php'); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: log-in.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: log-in.php");
  }
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>NCPS</title>



  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700|Roboto:400,700&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- <link rel="stylesheet" type="text/css" href="css/sidenav.css"> -->
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/receipttable.css">
    <!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
    <style>
     
    </style>
</head>

<body>

    <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.html">
            <a class="navbar-brand logo-image" href="#NUCPS-logo"><img src="images/favicon.png" alt="alternative"></a>
            <span style="color: orangered; font-family: fantasy; font-size: 30px;">
              NC
            </span>
            <span style="color: white; font-family: fantasy; font-size: 30px;">
              PS
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="userdashboard.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="map2.php"> Our Location</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="parkingSlots2.php"> View Slots </a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link" href="receipt.php"> Receipt </a>
                </li> -->
                <li class="nav-item">
                  <a class="nav-link" href="view_booking.php"> View Bookings </a>
                </li>

                <!-- <li class="nav-item">
                  <a class="nav-link" href="#">Contact us</a>
                </li> -->
                <li class="nav-item">
                        <a class="nav-link" href="#">
                        <?php  if (isset($_SESSION['username'])) : ?>
                      Welcome <strong><b><i><?php echo $_SESSION['username']; ?></i></b></strong>
                       </a>
                <li>
                        <span class="nav-item">
                          <a class="btn-outline-sm" href="index.html?logout='1'">Logout</a> 
                        <?php endif ?>
                      </span>
                </li>
                </li>
                
              </ul>
              <!-- <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form> -->
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->

    <!-- side-nav -->
    

    <!-- End side-nav -->

 <!-- Details 1 -->
   <br><br><br>
<table class="styled-table">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Slot Number</th>
            <th>Amount Paid</th>
            <th>Time In</th>
            <th>Time Out</th>
            <th>Parking Hours</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
      <?php
        // $cid=$_GET['viewid'];
        $ret=mysqli_query($con,"SELECT * from  booking_details where slot_status='0'");
        $cnt=1;
        while ($row=mysqli_fetch_array($ret)) {

        ?>
        <tr>

            <td><?php echo $cnt;?></td>
                 
            <td><?php  echo $row['fname'];?></td>

            <td><?php  echo $row['slot_no'];?></td>

            <td><?php  echo $row['b_amount'];?></td>

            <td><?php  echo $row['time_in'];?></td> 

            <td><?php  echo $row['time_out'];?></td>

            <td><?php  echo $row['hours'];?></td>
            
            <td><a href="outgoing-detail.php?updateid=<?php echo $row['bid'];?>"><button type="button" class="btn btn-sm btn-info">View Details</button></a>
            <a href="admin/print-receipt.php?vid=<?php echo $row['bid'];?>"><button type="button" class="btn btn-sm btn-warning"> <i class="fa fa-print"></i></button>
            </td>

            </tr>

                <?php $cnt=$cnt+1;}?>
 
        
        </tbody>

    </table>
<!-- <input type="button" value="Print"> -->



<!-- footer section -->
  <!-- <section class="container-fluid footer_section">
    <p>
      &copy; <span id="displayYear"></span> All Rights Reserved By
      <a href="index.html">NCPS Copyright © 2022</a>
    </p>
  </section> -->
  <!-- footer section -->


  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>
  <!-- <script type="text/javascript" src="js/theme.js"></script> -->

</body>

</html>