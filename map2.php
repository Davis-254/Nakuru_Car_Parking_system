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
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
    <!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
    <style>
div.background {
  /*background: url(klematis.jpg) repeat;*/
  border: 2px solid black;
  background-image: './images/parkallocation.jpeg';
}

div.transbox {
  margin: 30px;
  background-color: #ffffff;
  border: 1px solid black;
  opacity: 0.6;
}

div.transbox p {
  margin: 5%;
  font-weight: bold;
  color: #000000;

}
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 20px;
  font-family: cursive;
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

 <!-- Details 1 -->
   <br><br><br>
   <br><br>

<center><p style="font-family: fantasy; color: orangered;">FIND OUR PARKING LOCATION ON THE MAP</p></center>

    <div id="googleMap" style="width:100%;height:800px;"></div>

    <script>
        function detectBrowser() {
            var useragent = navigator.userAgent;
            var mapdiv = document.getElementById("map");

            if (useragent.indexOf('iPhone') != -1 || useragent.indexOf('Android') != -1) {
                mapdiv.style.width = '100%';
                mapdiv.style.height = '100%';
            } else {
                mapdiv.style.width = '100px';
                mapdiv.style.height = '800px';
            }
        }

        var myLatLng;
        var latit;
        var longit;

        function geoSuccess(position) {
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;
            var directionsService = new google.maps.DirectionsService;
            var directionsDisplay = new google.maps.DirectionsRenderer;
            myLatLng = {
                lat: latitude,
                lng: longitude
            };
            var mapProp = {
                //            center: new google.maps.LatLng(latitude, longitude), // puts your current location at the centre of the map,
                zoom: 15,
                mapTypeId: 'roadmap',

            };
            var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

            var directionsService = new google.maps.DirectionsService;
            var directionsDisplay = new google.maps.DirectionsRenderer;

            //call renderer to display directions
            directionsDisplay.setMap(map);

            var bounds = new google.maps.LatLngBounds();
            //        var mapOptions = {
            //            mapTypeId: 'roadmap'
            //        };

            // Multiple Markers
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: 'My location'
            });
            var markers = [
                ['SUCPS location', -0.2855737405514044, 36.06875241020382], //Nyayo Garden
                ['SUCPS Park 1', -0.28641217497898486, 36.0687843917356], //prefabs coords
                // ['SUCPS Park 2', -0.286516597046801, 36.06833624144044],//Hostel Block B
                ['SUCPS Park 3', -0.285045986170947, 36.06942398487529],//Boys Hostel A
                // ['SUCPS Park 4', -0.28486759844833787, 36.070141895542285],//Cafeteria
                // ['SUCPS Park 5', -0.28503728433086506, 36.0703420403343],//Library
                // ['SUCPS Park 6', -0.28614241796606105, 36.07028112670195],//Tuition Block
                // ['SUCPS Park 7',-0.2856246585202791, 36.07028112670195],//Transport dept
                // ['SUCPS Park 8', -0.2862120326796687, 36.07034639130804],//school Fam
                ['my current location', latitude, longitude]
            ];

            // Info Window Content
            var infoWindowContent = [
                ['<div class="info_content">' +
                    '<h3>SUCPS location</h3>' +
                    '<p>SUCPS location</p>' +
                    '<img src="./images/Park1.jpg" width="200" height="200">' +
                    '</div>'
                ],
                ['<div class="info_content">' +
                    '<h3>SUCPS Parking 1</h3>' +
                    '<p>SUCPS Parking 1</p>' +
                    '<img src="./images/park2.jpg" width="200" height="200">' +
                    '</div>'
                ],
                // ['<div class="info_content">' +
                //     '<h3>' + markers[3][0] + '</h3>' +
                //     '<p>SUCPS Parking 2 </p>' +
                //     '<img src="./images/park3.jpg" width="200" height="200">' +
                //     '</div>'
                // ]
                ['<div class="info_content">' +
                    '<h3>SUCPS Parking 2</h3>' +
                    '<p>SUCPS Parking 2</p>' +
                    '<img src="./images/park4.jpg" width="200" height="200">' +
                    '</div>'
                ],
                // ['<div class="info_content">' +
                //     '<h3>SUCPS Park 4</h3>' +
                //     '<p>SUCPS Park 4</p>' +
                //     '<img src="./images/park3.jpg" width="200" height="200">' +
                //     '</div>'
                // ],
                // ['<div class="info_content">' +
                //     '<h3>SUCPS Park 5</h3>' +
                //     '<p>SUCPS Park 5</p>' +
                //     '<img src="./images/park2.jpg" width="200" height="200">' +
                //     '</div>'
                // ],
                // ['<div class="info_content">' +
                //     '<h3>SUCPS Park 6</h3>' +
                //     '<p>SUCPS Park 6</p>' +
                //     '<img src="./images/park1.jpg" width="200" height="200">' +
                //     '</div>'
                // ],
                // ['<div class="info_content">' +
                //     '<h3>SUCPS Park 7</h3>' +
                //     '<p>SUCPS Park 7</p>' +
                //     '<img src="./images/park3.jpg" width="200" height="200">' +
                //     '</div>'
                // ]
            ];

            // Display multiple markers on a map
            var infoWindow = new google.maps.InfoWindow(),
                marker, i;

            // Loop through our array of markers & place each one on the map
            for (i = 0; i < markers.length; i++) {
                var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
                bounds.extend(position);
                marker = new google.maps.Marker({
                    position: position,
                    map: map,
                    title: markers[i][0]
                });

                // Allow each marker to have an info window
                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                        infoWindow.setContent(infoWindowContent[i][0]);
                        infoWindow.open(map, marker);

                        latit = marker.getPosition().lat();
                        longit = marker.getPosition().lng();
                        // console.log("lat: " + latit);
                        // console.log("lng: " + longit);
                    }
                })(marker, i));

                marker.addListener('click', function() {
                    directionsService.route({
                        // origin: document.getElementById('start').value,
                        origin: myLatLng,

                        // destination: marker.getPosition(),
                        destination: {
                            lat: latit,
                            lng: longit
                        },
                        travelMode: 'DRIVING'
                    }, function(response, status) {
                        if (status === 'OK') {
                            directionsDisplay.setDirections(response);
                        } else {
                            window.alert('Directions request failed due to ' + status);
                        }
                    });

                });
                // Automatically center the map fitting all markers on the screen
                map.fitBounds(bounds);
            }
        }

        function calculateAndDisplayRoute(directionsService, directionsDisplay) {
            directionsService.route({
                // origin: document.getElementById('start').value,
                origin: myLatLng,
                destination: marker.getPosition(),
                travelMode: 'DRIVING'
            }, function(response, status) {
                if (status === 'OK') {
                    console.log('all good');
                    directionsDisplay.setDirections(response);
                } else {
                    window.alert('Directions request failed due to ' + status);
                }
            });
        }

        function geoError() {
            alert("Geocoder failed.");
        }

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(geoSuccess, geoError);
                // alert("Geolocation is supported by this browser.");
            } else {
                alert("Geolocation is not supported by this browser.");
            }
        }
    </script>

    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARB7hEp7PDWAPoB12q8r-iQmykCOkkgz8&callback=getLocation"></script>

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