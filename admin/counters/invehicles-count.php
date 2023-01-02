<?php

    include './includes/dbconn.php';

    $query=mysqli_query($con,"SELECT bid from  booking_details where slot_status=''");
    $count_parkings=mysqli_num_rows($query);

    echo $count_parkings
 ?>