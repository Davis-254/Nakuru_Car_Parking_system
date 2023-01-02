<?php
include_once 'db.php';
session_start(); 
if(isset($_POST['pay'])){
 


	$uid = $_SESSION['userid'];
	$booking_id = $_SESSION['bid'];
	$slot_no = $_SESSION['slotn'];
	$amount = $_POST['amount'];
	$phone = $_POST['phone'];


	$sql = "INSERT INTO payments (id,uid,booking_id,slot_no, amount,phone) VALUES(0,'$uid','$booking_id','$slot_no','$amount','$phone')";

// 	$sql = "SELECT CONCAT(users2.id,' ',booking_details.id'',booking_details.slot_no'',booking_details.b_amount) AS name, myguests.email, messages.message 
// From myguests 
// INNER JOIN messages 
// ON myguests.id = messages.id";


	$result=mysqli_query($conn, $sql);

$sql2 = "UPDATE slots SET slots.status = 0  WHERE slots.slot_no='$slot_no'";
$r2=mysqli_query($conn, $sql2);



	if ($result) {
        
        echo '<script>
    window.location = "receipt.php"; 
    
    alert("Payments made Successful") </script>';
        // echo "New record has been added successfully !";
     } 
     else {
        echo '<script>
   
    
     alert("Payments Unsuccessful, Try refreshing the page and try again") </script>';

    echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
     mysqli_close($conn);



}




?>


?>