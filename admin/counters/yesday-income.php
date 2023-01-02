<?php

    include './includes/dbconn.php';
    
    $sql = "SELECT SUM( b_amount) FROM booking_details where date(book_time)=CURDATE()-1";
        $amountsum = mysqli_query($con, $sql) or die(mysqli_error($sql));
        $row_amountsum = mysqli_fetch_assoc($amountsum);
        $totalRows_amountsum = mysqli_num_rows($amountsum);
        echo $row_amountsum['SUM( b_amount)'];
 ?>