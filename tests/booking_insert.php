<?php


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

echo $slotno;

$sql = "INSERT INTO booking_details (id,fname,lname,id_no,contact,hours,car_brand,car_model,no_plate,car_color,time_in,time_out,slot_no,slot_status)
VALUES(null,'$fname','$lname','$id_no','$contact','$hours','$car_brand','$car_model','$no_plate','$car_color','$time_in','$time_out','$slotno',0)";
$r1=mysqli_query($conn, $sql);

$sql2 = "UPDATE slots SET slots.status = 0 , slots.time_out='$time_out' WHERE slots.slot_no='$slotno'";
$r2=mysqli_query($conn, $sql2);

     
     if ($r2) {
        
        echo '<script>
    window.location = "payment.php"; 
    
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