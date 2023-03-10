<?php include('server.php') ?>
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

    <style type="text/css">
        .header {
  /*width: 30%;*/
  margin: 50px auto 0px;
  color: white;
  background: #007BFF;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}
form, .content {
  /*width: 30%;*/
  margin: 0px auto;
  padding: 20px;
  border: 3px solid #007BFF;
  background: white;
  border-radius: 0px 0px 10px 10px;
}
.input-group {
  margin: 10px 0px 10px 0px;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
  font-family: fantasy;
}
.input-group input {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
.btn {
  padding: 10px;
  font-size: 15px;
  color: white;
  background: #007BFF;
  border: none;
  border-radius: 5px;
}
.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}
.success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;
}
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
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="map.html"> Locate Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href=""> Features </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href=""> Services </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="">Contact us</a>
                </li>
                <li>
                  <a class="btn-outline-sm" href="">Register/Login</a>
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

        
    <!-- Basic -->
    <div class="ex-form-1 pt-5 pb-5" style="background-image: url('./images/parkallocation.jpeg'); opacity: 0.9;background-repeat: no-repeat; background-size: 100% 100%; top: 0px;">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3">
                    <div class="text-box mt-5 mb-5">
                        <div class="header">
                            <h4 style="color: white;"><b>SIGN UP</b></h4>
                            <p style="font-family: cursive; color: white;" class="mb-4">Fill out the form below to sign up for the service. Already signed up? Then just <a class="blue" style="color:blue;" href="log-in.php">Log In</a></p>
                        </div>

                        <!-- Sign Up Form -->
                        <form action="signup-form.php" method="POST">
                            <?php include('errors.php'); ?>
                            <div class="input-group">
                                <label>Username</label>
                                <input type="text" name="username" value="<?php echo $username; ?>">
                            </div>
                            <div class="input-group">
                                <label>Email</label>
                                <input type="email" name="email" value="<?php echo $email; ?>">
                            </div>
                            <div class="input-group">
                                <label>Password</label>
                                <input type="password" name="password_1">
                            </div>
                            <div class="input-group">
                                <label>Confirm password</label>
                                <input type="password" name="password_2">
                            </div>
                            <div class="input-group">
                            <button type="submit" class="btn" name="reg_user">Register</button>
                            </div>
                                <p>
                                 Already a member? <a href="log-in.php">Sign in</a>
                                </p>
                        </form>
                        <!-- end of sign up form -->

                    </div>
                    <!-- end of text-box -->
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of ex-basic-1 -->
    <!-- end of basic -->


   <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      &copy; <span id="displayYear"></span> All Rights Reserved By
      <a href="index.html">NCPS Copyright ?? 2022</a>
    </p>
  </section>
  <!-- footer section -->


  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>

</body>

</html>