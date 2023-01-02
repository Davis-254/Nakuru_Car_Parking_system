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
  <!-- MODAL CSS LINKS -->
<link
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" type="text/css" href="css/modal.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="bootstrap-5/css/bootstrap.css">
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"
    ></script>  

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
    <!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">

    <style>
        * {
  box-sizing: border-box;
}

.rowb {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.containerb {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #1F7AE9;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #2A86F6;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}



    </style>
    <script type="text/javascript">
        function updateDue() {

    var timeout = parseInt(document.getElementById("time_out").value);
    var timein = parseInt(document.getElementById("time_in").value);

    // to make sure that they are numbers
    if (!timeout) { 
      timeout = 0; 
    }
    if (!timein) { 
      timein = 0; 
    }

    var ansD = document.getElementById("hours");
    ansD.value = timeout - timein;
    // if (ansD < 0) {
    //             $('#GFG_DOWN').html('Enter time range above 60 minutes');
    //             input.value = 0;
    //         } 
    var time = parseInt(document.getElementById("hours").value)
          // var charge = parseInt(document.getElementById("hours").value);
          if (time < 1) {
            charge = 100;
          }
          else{
            charge = 100 * time;
          }
          var result = document.getElementById("amount");
          result.value = charge;
}
        // function calculate(){
        //   var time = parseInt(document.getElementById("hours").value)
        //   // var charge = parseInt(document.getElementById("hours").value);
        //   if (time = 0) {
        //     charge = 100;
        //   }
        //   else{
        //     charge = 100 * time;
        //   }
        //   var result = document.getElementById("amount");
        //   result.value = charge;
        // }
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
    <!-- end header section -->

    <!-- Details 1 -->
   <br><br><br>
   <br><br>
<div class="rowb">
  <div class="col-75">
    <div class="containerb">
      

      <div width='50%'>
          <?php
    $slot_no=$_GET['slotno'];
    ?>
  <label><h2>Slot No. <b><?php echo $slot_no ?></b></h2></label> 
      </div>
        <div class="row">
         
           <div class="col-50">
            <h3>PERSONAL INFORMATION</h3>
            <label for="fname"><i class="fa fa-user"></i> First Name</label>
            <input type="text" id="fname" name="fname" placeholder="John" required>
            <label for="lname"><i class="fa fa-user"></i> Last Name</label>
            <input type="text" id="lname" name="lname" placeholder="Wanyonyi" required>
            <label for="id_no"><i class="fa fa-address-card-o"></i> National ID Number</label>
            <input type="text" id="id_no" name="id_no" placeholder="24356789" required>
            <label for="contact"><i class="fa fa-address-card-o"></i> Phone Number</label>
            <input type="text" id="contact" name="contact" placeholder="0712345678" required>
<!--             <label for="date"><i class="fa fa-calendar"></i> Date</label>
            <input type="date" id="date" name="" placeholder=""> -->
            

            <!-- <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div> -->
          </div>

          <div class="col-50">
            <h3>CAR DETAILS</h3>
            <!-- <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div> -->
            <label for="car_brand"><i class="fa fa-car"></i> Car Brand</label>
            <input type="text" id="car_brand" name="car_brand" placeholder="Lexus" required>
            <label for="car_model"><i class="fa fa-car"></i> Car Model</label>
            <input type="text" id="car_model" name="car_model" placeholder="L560" required>
            <label for="no_plate"><i class="fa fa-drivers-license-o"></i> Number Plate</label>
            <input type="text" id="no_plate" name="no_plate" placeholder="KDY 220C" required>
            <label for="car_color"><i class="fa fa-filter"></i> Car Colour</label>
            <input type="text" id="car_color" name="car_color" placeholder="White" required>
            
            <!-- <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div> -->
          </div>
          <div class="col-50">
            <h3>PARKING DETAILS</h3>
            <!-- <p><b>NOTE: Please select time only in hours</b></p> -->
            <label for="time_in"><i class="fa fa-clock-o"></i>Time In</label>
            <input type="time" id="time_in" name="time_in" placeholder="" value="06:00" min="1:00" max="22:00" onchange="updateDue()" required> <br>
            <label for="time_out"><i class="fa fa-clock-o"></i>Time Out</label>
            <input type="time" id="time_out" name="time_out" placeholder="" value="18:00" min="2:00" max="23:00" onchange="updateDue()" required> <br>
            <label for="hours"><i class="fa fa-time"></i> Booking Hours</label>
            <input type="text" id="hours" name="hours" placeholder="" readonly required>
            <!-- amount test -->
            <label for="amount"><i class="fa fa-credit-card"></i>Amount Charged:</label>
            <input type="text"  id="amount" name="b_amount" placeholder="" readonly required>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> I agree with Terms & Conditions of NCPS.
        </label>
        <button  class="btn" name="submit" value="submit" id="myBt"  data-toggle="modal" data-target="#myModal" >Pay Now</button>
        <!-- <input type="submit" name="submit" value="Continue to Payment" class="btn" id="myBtn"> -->
     
    </div>
  </div>
  <!-- <div class="col-25">
    <div class="container">
      <h4>Confirm that all Your Details are correct. <span class="price" style="color:black"><i class="fa fa-address-card-o"></i> <b></b></span></h4> -->
      <!-- <p><b>Amount to be charged:</b><br>KSH. 200/= </p>
      <p><b>Rate Per Hour:</b><br>KSH. 100/=</p>
      <p><b>Hours Booked:</b><br> 2</p> -->
      <!-- <p><a href="#">Product 4</a> <span class="price">$2</span></p> -->
      <!-- <hr>
      <p>Proceed to: <span class="price" style="color:black"><b>Payment and Receipt generation using the button below</b></span></p>
    </div>
  </div>
</div> -->

<!-- modal-->

<div id="myModal" class="modal fade">

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

            <form class="row g-3" >
            
                <div class="col-12">
                  <label for="inputAddress" class="form-label">Amount</label>
                  <input type="text" class="form-control" name="amount" placeholder="Enter Amount">
                </div>
                <div class="col-12">
                  <label for="inputAddress2" class="form-label" >Phone Number</label>
                  <input type="text" class="form-control" name="phone"  placeholder="e.g. 254712345678">
                </div>
             
                <div class="col-12">
                    <br>
                  <button type="button" class="btn btn-success" name="pay">Pay Now</button>
                </div>
              </form>
              <!--bs5 input-->
          </div>
        </div>
      </div>
    </div>


<!--Scripts-->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script>
//   $(document).ready(function(){
//     $("#myModal").modal('show');
//   });
 </script>


<script type="text/javascript"
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"
    ></script>




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
