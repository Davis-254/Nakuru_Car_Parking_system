<?php

    include('phpqrcode/qrlib.php');
    require_once('config.php');
    
    $pname=$_POST['cname'];
    $path = 'images/';
    $file = $path.uniqid().".png";

    $ecc = 'L';
    $pixel_Size = 10;
    $frame_Size = 10;

    $query="insert into qr(pname,qrImage) values ('$pname','$file')";
    if($mysqli->query($query)==true)
    {
        QRcode::png($pname,$file,$ecc,$pixel_Size,$frame_Size);
        header('location:addQrCode.php?msg=data added successfully');
    }
    else{
        header('location:addQrCode.php?msg=data failed ');
    }
    
   

    
?>