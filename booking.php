<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}


* {
  box-sizing: border-box;
}

.row {
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
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
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

.container {
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
  background-color: #04AA6D;
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
  background-color: #45a049;
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
</head>
<body>

<h2>Responsive Checkout Form</h2>
<p>Resize the browser window to see the effect. When the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other.</p>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="booking_insert.php" method="POST">
      
        <div class="row">
          <div class="col-50">
            <h3>PERSONAL INFORMATION</h3>
            <label for="fname"><i class="fa fa-user"></i> First Name</label>
            <input type="text" id="fname" name="fname" placeholder="John">
            <label for="lname"><i class="fa fa-user"></i> Last Name</label>
            <input type="text" id="lname" name="lname" placeholder="Wanyonyi">
            <label for="id_no"><i class="fa fa-address-card-o"></i> National ID Number</label>
            <input type="text" id="id_no" name="id_no" placeholder="24356789">
            <label for="contact"><i class="fa fa-address-card-o"></i> Phone Number</label>
            <input type="text" id="contact" name="contact" placeholder="0712345678">
<!--             <label for="date"><i class="fa fa-calendar"></i> Date</label>
            <input type="date" id="date" name="" placeholder=""> -->
            <label for="hours"><i class="fa fa-time"></i> Booking Hours</label>
            <input type="text" id="hours" name="hours" placeholder="">

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
            <label for="car_brand">Car Brand</label>
            <input type="text" id="car_brand" name="car_brand" placeholder="Lexus">
            <label for="car_model">Car Model</label>
            <input type="text" id="car_model" name="car_model" placeholder="L560">
            <label for="no_plate">Number Plate</label>
            <input type="text" id="no_plate" name="no_plate" placeholder="KDY 220C">
            <label for="car_color">Car Colour</label>
            <input type="text" id="car_color" name="car_color" placeholder="White">
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
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> I agree with Terms & Conditions of SUCPS.
        </label>
        <input type="submit" name="submit" value="Continue to Payment" class="btn">
      </form>
    </div>
  </div>
 <!--  <div class="col-25">
    <div class="container">
      <h4>Confirm Your Details <span class="price" style="color:black"><i class="fa fa-address-card-o"></i> <b>4</b></span></h4>
      <p><a href="#">Date booked</a> <span class="price">#date</span></p>
      <p><a href="#">Booked hours</a> <span class="price">#hours</span></p> -->
      <!-- <p><a href="#">Product 3</a> <span class="price">$8</span></p>
      <p><a href="#">Product 4</a> <span class="price">$2</span></p> -->
      <!-- <hr>
      <p>Proceed to: <span class="price" style="color:black"><b>Payment and QR code generation using the button below</b></span></p>
    </div> -->
  </div>
</div>

</body>
</html>
