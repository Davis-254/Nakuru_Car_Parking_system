<?php 
  session_start(); 

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
            <a class="navbar-brand logo-image" href="#NCPS-logo"><img src="images/favicon.png" alt="alternative"></a>
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
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="view_booking.php"> View Bookings </a>
                </li> -->

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
<body>
    <!-- side-nav -->
    

    <!-- End side-nav -->

 <!-- Details 1 -->
   <br><br><br>


<section class="rate_section2 layout_padding" id="rate_section2" style="background-image: url('./images/park4.jpg'); width: 100%;">
    <div class="container2">
      <div class="heading_container2">
        <h2 style="color:white;">
          Follow the following simple steps so as to book a car slot with us:
        </h2>
      </div>
      <div class="rate_container2">

        <div class="box2">
          <div class="btn-box2">
            <a href="">
              STEP 1
            </a>
          </div>
          <div class="detail-box2">
            <div class="price2">
              <h3>
                 Under "Our Location" On the Navigation Bar:<span> </span>

              </h3>
              <h6>
                
              </h6>
            </div>
            <p>
              This is where you will be able to see our location from where you are using a map provided for you by the system then you can proceed to <br> <b>STEP 2</b> <br><b> >>>>> </b>
            </p>
          </div>
          
        </div>
        <div class="box2">
          <div class="btn-box2">
            <a href="">
              STEP 2
            </a>
          </div>
          <div class="detail-box2">
            <div class="price2">
              <h3>
                VIEWING AVAILABLE SLOTS <span></span>

              </h3>
              <h6>
                
              </h6>
            </div>
            <p>
              Click on "View Slots" option and you will be able to see the parking slots that you can book. <br> <b>NOTE:</b> <br> <b><i>GREEN</i></b> Slots are to show empty parking slots. <br> <b><i>RED</i></b> Slots are to indicate booked parking slots. <br> Click on the green slot button to book and follow <br> <b>STEP 3</b> <br><b> >>>>>
            </p>
          </div>
          
        </div>
        <div class="box2">
          <div class="btn-box2">
            <a href="">
              STEP 3
            </a>
          </div>
          <div class="detail-box2">
            <div class="price2">
              <h3>
                BOOKING<span></span>

              </h3>
              <h6>
                
              </h6>
            </div>
            <p>
              After clicking a <b>GREEN <i>(Unoccupied)</i></b> slot as directed in <b>STEP 2</b>, A form will pop up that contains details that you need to fill in so as to get a parking slot. Fill in the details <b>CAREFULLY</b> and proceed to <br> <b>STEP 4</b> <br><b> >>>>> 
            </p>
          </div>
          
        </div>
        <div class="box2">
          <div class="btn-box2">
            <a href="">
              STEP 4
            </a>
          </div>
          <div class="detail-box2">
            <div class="price2">
              <h3>
                PAYMENT AND RECEIPT GENERATION <span></span>

              </h3>
              <h6>
                
              </h6>
            </div>
            <p>
              After filling in the booking details, a payment form will pop up. Make the payments as charged by the system so that you can finally get a slot. A <b>RECEIPT</b> will be generated for you by the system, which you can view under "RECEIPT". Download it for You will be required to present this at the gate for scanning so that you can be allowed into the parking. 
            </p>
          </div>
          
        </div>
        


      </div>
    </div>
  </section>
    <!-- end slider section -->



<!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      &copy; <span id="displayYear"></span> All Rights Reserved By
      <a href="index.html">NCPS Copyright © 2022</a>
    </p>
  </section>
  <!-- footer section -->


  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>
  <!-- <script type="text/javascript" src="js/theme.js"></script> -->

</body>

</html>