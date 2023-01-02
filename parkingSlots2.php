<?php 
  session_start(); 
require 'expirer.php';

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
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
    <!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
    <link rel="stylesheet" type="text/css" href="./css/css2/parking_slot.css">


    <style>
        table{
            border: 1px solid #1a1a1a;
            width: 100%;
            text-align: center;
            vertical-align: middle;
        }
        th{
            background: whitesmoke;
            text-align: center;
            vertical-align: middle;
            color: green;
        }


    </style>
    <script type="text/javascript">
    function alt(btn, color){
            alert("You are about to reserve this parking. Click OK to continue or cancel.")
    
  
    var count=1;
    var property = document.getElementById(btn);


    if (count == 0){
        property.style.backgroundColor = "green"
        count=1;        
    }
    else{
          // alert("This parking is reserved!!")
          window.location ="parkingSlots2.php"
        property.style.backgroundColor = "red"
        count=0;
    }

}

function alt(btn2, color){
            alert("You are about to reserve this parking. Click OK to continue or cancel.")
    var count=1;
    var property = document.getElementById(btn2);
    if (count == 0){
        property.style.backgroundColor = "green"
        count=1;        
    }
    else{
        // alert("This parking is reserved!!")
        //   window.location ="parkingSlots2.php"
        property.style.backgroundColor = "red"
        count=0;
    }

}
</script>

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
                      <i class="fa fa-user"></i>
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

 <!-- Details 1 -->
   <br><br><br>



 <div class="body1">
 <img src="./images/park2.jpg" alt="Smiley face" height="600px" width="100%"> 


 <div id="a-body1"></div>
<div class="left">
    <div id="lefthead">
        <h2 style="color:white;"><b>NOTE:</b><br>Book only the available slots in Green.<br>Click on the button to book.</h2>
        <!-- <p style="font-family:sans-serif;color: red;font-size: 20px;">The Number of available slots in SUCPS at #time = #currentTimestamp </p>
        <p style="font-family:sans-serif;color: red;">Available slots = 8</p> -->
    </div>
    
    <label>
        
    </label>
</div>


    <!--<div class="vleft"></div>-->
    <div class="right">

            <div class="left_slot">

            <p style="color:#252f33  font-size=50px"></p>

            <hr>
        </div>
    

   <?php 

include('slotsreader.php');
   ?>



</div>

<!--<div class="vright"></div>-->

    <div class="corner">
        <div id="head">
            <h3 style="color: white;">Know the Car Slots:</h3>
        </div>
    
        <div id="filledbox"></div>
        <div id="filledletter"><p style="color:white;">Filled</p></div>
        <div id="emptybox"></div>
        <div id="emptyletter"><p style="color:white;">Empty</p></div>

    </div>
</div>







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

</body>

</html>