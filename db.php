<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "new_sucps";
    
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
        // elseif ($conn) {
        //   // code...
        //   echo "connection successful";
        // }
?>