<?php
session_start(); 

include_once 'db.php';
if(isset($_POST['submit']))
{    

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$id_no = $_POST['id_no'];
$contact = $_POST['contact'];
$hours=$_POST['hours'];
$car_brand=$_POST['car_brand'];
$car_model=$_POST['car_model'];
$no_plate=$_POST['no_plate'];
$car_color=$_POST['car_color'];
$time_in = $_POST['time_in'];
$time_out = $_POST['time_out'];
$slotno= $_GET['slt_no'];
$b_amount = $_POST['b_amount'];



$sql = "INSERT INTO booking_details (bid,fname,lname,id_no,contact,hours,car_brand,car_model,no_plate,car_color,time_in,time_out,slot_no,slot_status,b_amount)
VALUES(null,'$fname','$lname','$id_no','$contact','$hours','$car_brand','$car_model','$no_plate','$car_color','$time_in','$time_out','$slotno',0,'$b_amount')";
$r1=mysqli_query($conn, $sql);

$sql2 = "UPDATE slots SET slots.status = 1 , slots.time_out='$time_out' WHERE slots.slot_no='$slotno'";
$r2=mysqli_query($conn, $sql2);

     
     if ($r1) {

        $sql3="SELECT * FROM booking_details ORDER BY bid DESC LIMIT 1 ";
        $r3=mysqli_query($conn, $sql3);
        $raw = mysqli_fetch_array($r3);
        $_SESSION['bid']  = $raw['bid'];
        $_SESSION['slotn']  = $slotno;
        $_SESSION['cust_charge']  = $b_amount;
              echo '<script>
    window.location = "payment-form.php"; 
    
    alert("Booking Successful") </script>';
        // echo "New record has been added successfully !";
         
     } 
     else {
        echo '<script>
   
    
     alert("Booking Unsuccessful, Try refreshing the page and try again") </script>';

    echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
     mysqli_close($conn);
}


?>