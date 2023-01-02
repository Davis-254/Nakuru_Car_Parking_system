<?php 
include_once 'db.php';


$sql = "UPDATE booking_details SET booking_details.slot_status=1 WHERE booking_details.time_out<CURRENT_TIME()";
$r1=mysqli_query($conn, $sql);

$sql2 = "UPDATE slots SET slots.status = 1 WHERE slots.time_out<CURRENT_TIME()";
$r2=mysqli_query($conn, $sql2);




?>