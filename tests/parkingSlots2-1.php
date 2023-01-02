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
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
    <meta property="og:site_name" content="" />
    <!-- website name -->
    <meta property="og:site" content="" />
    <!-- website link -->
    <meta property="og:title" content="" />
    <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" />
    <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" />
    <!--
            3
            . image link, make sure it's jpg -->
    <meta property="og:url" content="" />
    <!-- where do you want your post to link to -->
    <meta name="twitter:card" content="summary_large_image">
    <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>SUCPS</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/parking_slot.css">

    <!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">


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
            alert("Parking Reserved")
    var count=1;
    var property = document.getElementById(btn);
    if (count == 0){
        property.style.backgroundColor = "green"
        count=1;        
    }
    else{
        property.style.backgroundColor = "red"
        count=0;
    }

}
function alt(btn2, color){
            alert("Parking Reserved")
    var count=1;
    var property = document.getElementById(btn2);
    if (count == 0){
        property.style.backgroundColor = "green"
        count=1;        
    }
    else{
        property.style.backgroundColor = "red"
        count=0;
    }

}
</script>
</head>

<body data-bs-spy="scroll" data-bs-target="#navbarExample">

    <!-- Navigation -->
    <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation">
        <div class="container">

             <!-- Image Logo  -->
            <a class="navbar-brand logo-image" href="#SUCPS-logo"><img src="images/logo.png" alt="alternative"></a>

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <a class="navbar-brand logo-text" href="index.html" style="color: black;">SMART URBAN</a>
            <a class="navbar-brand logo-text" href="index.html">CAR PARKING SYSTEM</a>

            <button  class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ms-auto navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="userdashboard.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="map2.php">View Map</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="parkingSlots.php">View Slots</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="booking2.php">Booking</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <?php  if (isset($_SESSION['username'])) : ?>
                      Welcome <strong><b><i><?php echo $_SESSION['username']; ?></i></b></strong>
                       </a>
                       <li>
                        <span class="nav-item">
                          <a class="btn-outline-sm" href="index.html?logout='1'">logout</a> 
                        <?php endif ?>
                      </span>
                    </li>
                    </li>
                </ul>
                <!-- <span class="nav-item">
                        <a class="btn-outline-sm" href="log-in.php">Register / Log In</a>
                    </span> -->
            </div>
            <!-- end of navbar-collapse -->
        </div>
        <!-- end of container -->
    </nav>
<!-- end of navbar -->
    <!-- end of navigation -->

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

            <p style="color:#252f33  font-size=50px">left</p>

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

<div class="" style="width: 100%;">
            <span class=""><b>
            CURRENT BOOKED SLOTS</b>
          </span>
            <table >
                <tr>
                    <th>
                        Slot
                    </th>
                    <th>
                        Time booked
                    </th>
                    <th>
                        Parking hours
                    </th>
                    <th>
                        Release time
                    </th>
                    
                </tr>
               <!-- php code here -->
                    <tr>
                        <td>
                            <span></span>
                        </td>
                        <td>
                            <span></span>
                        </td>
                        <td>
                            <span></span>
                        </td>
                        <td>
                            <span></span>
                        </td>
                        
                    </tr>
                    
            </table>
        </div>






   <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-col first">
                        <h6>About Website</h6>
                        <p class="p-small">SUCPS is a complete parking management system that applies smart solutions for short time/Long time rental of empty parking spaces in urban centers. It is a transparent system that allows customers to easily book parking slots and be directed to the parking areas they have booked. Feel free to enjoy our services.</p>
                    </div>
                    <!-- end of footer-col -->
                    <div class="footer-col second">
                        <h6>Links</h6>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li>Important: <a href="terms.html">Terms & Conditions</a></li>
                            <li><a href="privacy.html">Privacy Policy</a></li>
                            <li>Menu: <a href="#header">Home</a></li>
                            <!-- <li> <a href="#features">Services</a></li> -->
                            <li><a href="detail.html">Details</a></li>
                        </ul>
                    </div>
                    <!-- end of footer-col -->
                    <div class="footer-col third">
                        <span class="fa-stack">
                                <a href="https://www.facebook.com/">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                        <span class="fa-stack">
                                <a href="https://twitter.com/">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                        <!-- <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-pinterest-p fa-stack-1x"></i>
                                </a>
                            </span> -->
                        <span class="fa-stack">
                                <a href="https://www.instagram.com/">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-instagram fa-stack-1x"></i>
                                </a>
                            </span>
                            <p><b>@SUCPS_KE</b> in all social media platforms</p>
                            <p><b>OR</b></p>
                        <p class="p-small">Email us @ <a href="mailto:contact@site.com"><strong>muhuhudavid254@gmail.com</strong></a></p>
                        <p><b>OR</b></p>
                        <p><b>TEL:</b><br>+254 746579794 / +254 756152738</p>
                    </div>
                    <!-- end of footer-col -->
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of footer -->
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © <a href="#your-link">SUCPS 2022</a></p>
                </div>
                <!-- end of col -->
            </div>
            <!-- enf of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of copyright -->
    <!-- end of copyright -->


    <!-- Back To Top Button -->
    <button onclick="topFunction()" id="myBtn">
            <img src="images/up-arrow.png" alt="alternative">
        </button>
    <!-- end of back to top button -->

    <!-- Scripts -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Bootstrap framework -->
    <script src="js/swiper.min.js"></script>
    <!-- Swiper for image and text sliders -->
    <script src="js/purecounter.min.js"></script>
    <!-- Purecounter counter for statistics numbers -->
    <script src="js/replaceme.min.js"></script>
    <!-- ReplaceMe for rotating text -->
    <script src="js/scripts.js"></script>
    <!-- Custom scripts -->
        
</body>
</html>