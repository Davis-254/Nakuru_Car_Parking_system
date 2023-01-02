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
<html lang="en">
<head>
<meta charset="utf-8">
<title>NCPS</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
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

  
<link
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link href="" rel="stylesheet" />
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"
    ></script>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap");

      body {
        background-color: #eaedf4;
        font-family: "Rubik", sans-serif;
      }

      .card {
        /*width: 310px;*/
        border: none;
        border-radius: 15px;
      }

      .justify-content-around div {
        border: none;
        border-radius: 20px;
        background: #f3f4f6;
        padding: 5px 20px 5px;
        color: #8d9297;
      }

      .justify-content-around span {
        font-size: 12px;
      }

      .justify-content-around div:hover {
        background: #545ebd;
        color: #fff;
        cursor: pointer;
      }

      .justify-content-around div:nth-child(1) {
        background: #545ebd;
        color: #fff;
      }

      span.mt-0 {
        color: #8d9297;
        font-size: 12px;
      }

      h6 {
        font-size: 15px;
      }
      .mpesa {
        background-color: green !important;
      }

      img {
        border-radius: 15px;
      }
    </style>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function(){
    $("#myModal").modal('show');
  });
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
                <li class="nav-item">
                  <a class="nav-link" href="receipt.php"> Receipt </a>
                </li>
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
<div id="myModal" class="modal fade">
  <!-- <div class="modal-dialog"> -->
        <!-- <div class="modal-content"> -->
          <body oncontextmenu="return false" class="snippet-body">
    <div class="container d-flex justify-content-center">
      <div class="card mt-5 px-3 py-4">
        <div class="d-flex flex-row justify-content-around">
          <div class="mpesa"><span>Mpesa </span></div>
          <div><span>Paypal</span></div>
          <div><span>Card</span></div>
        </div>
        <div class="media mt-4 pl-2">
          <img src="./images/1200px-M-PESA_LOGO-01.svg.png" class="mr-3" height="75" />
          <div class="media-body">
            <h6 class="mt-1">Enter Amount & Number</h6>
          </div>
        </div>
        <div class="media mt-3 pl-2">
                          <!--bs5 input-->

            <form class="row g-3" action="payment.php" method="POST">
            
                <div class="col-12">
                   <?php echo $_SESSION['slotn']; ?>
                   <!-- <?php echo $_SESSION['bid']; ?>  -->

                  <label for="inputAddress" class="form-label">Amount</label>
                  <input type="text" class="form-control" readonly name="amount" value= <?php echo $_SESSION['cust_charge']; ?> >
                </div>
                <div class="col-12">
                  <label for="inputAddress2" class="form-label" >Phone Number</label>
                  <input type="text" class="form-control" name="phone" placeholder="" >
                </div>
             
                <div class="col-12">
                    <br>
                  <button type="submit" class="btn btn-success" name="pay">Pay Now</button>
                </div>
              </form>
              <!--bs5 input-->
          </div>
        </div>
      </div>
    </div>

<!-- </div> -->
<!-- </div> -->
</body>
</html>