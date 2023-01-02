<?php

    include './includes/dbconn.php';

    $query3=mysqli_query($con,"SELECT bid from booking_details");
    $count_parkings=mysqli_num_rows($query3);

    echo $count_parkings
 ?>