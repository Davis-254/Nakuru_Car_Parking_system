<?php

    include './includes/dbconn.php';
    //Total Vehicle Entries
    $query=mysqli_query($con,"SELECT bid from booking_details where date(book_time)=CURDATE();");
    $count_parkings=mysqli_num_rows($query);

    echo $count_parkings
 ?>