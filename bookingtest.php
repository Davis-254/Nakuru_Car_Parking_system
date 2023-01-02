<?php
include_once 'db.php';

if (isset($_POST['submit'])) {
	$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$id_no = mysqli_real_escape_string($conn, $_POST['id_no']);
$contact = mysqli_real_escape_string($conn, $_POST['contact']);
$hours=mysqli_real_escape_string($conn, $_POST['hours']);
$car_brand=mysqli_real_escape_string($conn, $_POST['car_brand']);
$car_model=mysqli_real_escape_string($conn, $_POST['car_model']);
$no_plate=mysqli_real_escape_string($conn, $_POST['no_plate']);
$car_color=mysqli_real_escape_string($conn, $_POST['car_color']);


// $name = mysqli_real_escape_string($conn, $_POST['name']);
// $email = mysqli_real_escape_string($conn, $_POST['email']);
// $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
// $password = mysqli_real_escape_string($conn, $_POST['password']);
// $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']); 
if (!preg_match("/^[a-zA-Z ]+$/",$fname,$lname)) {
$name_error = "Name must contain only alphabets and space";
}
// if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
// $email_error = "Please Enter Valid Email ID";
// }
if(strlen($id_no) < 8) {
$id_no_error = "Password must be minimum of 8 numbers";
}       
if(strlen($contact) < 10) {
$contact_error = "Mobile number must be minimum of 10 characters";
}
// if($password != $cpassword) {
// $cpassword_error = "Password and Confirm Password doesn't match";
// }
if (!$error) {
if(mysqli_query($conn, "INSERT INTO booking_details (id,fname,lname,id_no,contact,hours,car_brand,car_model,no_plate,car_color)VALUES('','$fname','$lname','$id_no','$contact','$hours','$car_brand','$car_model',
    '$no_plate','$car_color')")) {
header("location: booking.php");
exit();
} else {
echo "Error: " . $sql . "" . mysqli_error($conn);
}
}
mysqli_close($conn);
}
?>