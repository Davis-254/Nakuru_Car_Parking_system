<?php
    $con=mysqli_connect("localhost", "root", "", "new_sucps");
    if(mysqli_connect_errno()){
    echo "Connection Fail".mysqli_connect_error();
    }
  ?>